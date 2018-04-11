<?php

get_template_part( '/inc/codestar-framework/cs-framework' ) ;

// framework Metabox options filter example

function thenobility_cs_framework_options($options)
{
    
    $options = array(); // remove old options   
   
    
    //All page option meta    
    $options[] = array(
        'id' => 'thenobility_page_meta',
        'title' => 'Page Options',
        'post_type' => 'page',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'thenobility_page_metabox',
                'title' => 'Page Options',
                'fields' => array(
                    // begin: a field
                    array(
                        'id' => 'enable_title',
                        'type' => 'switcher',
                        'title' => 'Enable Page Title',
                        'default' => 'false'
                    ),
                    // end: a field  
                    array(
                        'id' => 'custom_title',
                        'type' => 'textarea',
                        'title' => 'Add Page custom Title',
                        'dependency' => array(
                            'enable_title',
                            '==',
                            'true'
                        )
                    ),
                    // end: a field
                    array(
                        'id' => 'text_title_direction',
                        'type' => 'select',
                        'title' => 'Select Text Align',
                        'options' => array(
                            'center' => 'Center',
                            'left' => 'Left',
                            'right' => 'Right'
                        ),
                        'default' => 'left',
                        'dependency' => array(
                            'enable_title',
                            '==',
                            'true'
                        )
                    ),
                    // end: a field      
                    array(
                        'id' => 'header_style',
                        'type' => 'select',
                        'title' => 'Select Header Style',
                        'options' => array(
                            '1' => 'Header 1',
                            '2' => 'Header 2'
                        ),
                        'default' => 'Header 1'
                    )
                    // end: a field      
                    
                )
            )
        )
    );
    
    return $options;
    
}
add_filter('cs_metabox_options', 'thenobility_cs_framework_options');



// framework Theme options filter example
function thenobility_theme_options($options)
{
    
    $options = array();
    /*remove old options*/
    
    //Add acording option
    $options[] = array(
        'name' => 'header_top_options',
        'title' => 'Header Top Options',
        'icon' => 'fa fa-minus',
        'sections' => array(
            
            //Header top left start            
            array(
                'name' => 'header_top_left',
                'title' => 'Header Top Left',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    
                    array(
                        'id' => 'header_top_array',
                        'type' => 'group',
                        'title' => 'Header Top Icon',
                        'button_title' => 'Add New',
                        'accordion_title' => 'Add New Header Link',
                        'fields' => array(
                            array(
                                'id' => 'header_sub_title',
                                'type' => 'text',
                                'title' => 'Header Sub Title'
                            ),
                            array(
                                'id' => 'header_icon',
                                'type' => 'icon',
                                'default' => 'fa fa-heart',
                                'title' => 'Header Icon'
                            ),
                            array(
                                'id' => 'icon_color',
                                'type' => 'color_picker',
                                'title' => 'Icon Color',
                                'default' => '#f4cc14'
                            )
                        )
                    )
                    
                )
            ),
            //End left section
            array(
                'name' => 'header_top_right',
                'title' => 'Header Top Right',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    
                    array(
                        'id' => 'social_link_array',
                        'type' => 'group',
                        'title' => 'Social Link Add',
                        'button_title' => 'Add New',
                        'accordion_title' => 'Add New Social Link',
                        'fields' => array(
                            array(
                                'id' => 'social_icon',
                                'type' => 'icon',
                                'title' => 'Select social Icon'
                            ),
                            array(
                                'id' => 'social_link',
                                'type' => 'text',
                                'title' => 'Social link add'
                            )
                        )
                    ),
                    array(
                        'id' => 'header_right_link',
                        'type' => 'text',
                        'title' => 'Header Link'
                    )
                    
                )
            ),
            array(
                'name' => 'header_logo',
                'title' => 'Header Logo',
                'icon' => 'fa fa-minus',
                'fields' => array(
                    
                    array(
                        'id' => 'header_logo_text',
                        'type' => 'text',
                        'title' => 'Header Logo Text'
                    )
                    
                )
            )
        )
    );
//End header acordian option
    
    
    //Start footer acordian
   $options[] = array(
        'name' => 'footer_options',
        'title' => 'Footer Options',
        'icon' => 'fa fa-minus',
        'sections' => array(
            
            //Footer Social Option
            array(
                'name' => 'footer_social_option',
                'title' => 'Footer Social Option',
                'icon' => 'fa fa-minus',
                'fields' => array(                    
                    array(
                        'id' => 'footer_location_find_array',
                        'type' => 'group',
                        'title' => 'Add widget show you location',
                        'button_title' => 'Add New',
                        'accordion_title' => 'Add New location info',
                        'fields' => array(
                            array(
                                'id' => 'footer_location_icon',
                                'type' => 'icon',
                                'title' => 'Select location Icon'
                            ),
                            array(
                                'id' => 'footer_location_detail',
                                'type' => 'text',
                                'title' => 'Your detail location'
                            )
                        )
                    ),                   
                    
                )
            ),
            
           
        )
    );
//End footer acordian

    $options[] = array(
        'name' => 'script_section',
        'title' => 'Script Section',
        'fields' => array(
            array(
                'id' => 'custom_css',
                'type' => 'textarea',
                'sanitize' => false,
                'title' => 'Custom Css'
            )
        )
    );
    
    return $options;
    
}
add_filter('cs_framework_options', 'thenobility_theme_options');



// framework Custom options filter example
function thenobility_custom_framework_options($options)
{
    
    $options = array(); // remove old options
    
    return $options;
    
}
add_filter('cs_customize_options', 'thenobility_custom_framework_options');
