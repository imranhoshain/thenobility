<header class="site-header">
    <!-- Header-top area start-->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">                      
                      <?php get_template_part( 'template-parts/headers/logo'); ?>                   
                    </div>
                    <?php 
                            $social_link_array = cs_get_option('social_link_array');
                            if(!empty($social_link_array)) :
                        ?>
                    <div class="social-icons">
                        <ul>                        
                        <?php 
                            foreach ($social_link_array as $social_link ) :
                         ?>
                            <li><a href="#"><i class="<?php echo $social_link['social_icon']; ?>" aria-hidden="true"></i></a></li>
                         <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Header-top area End-->
    <!-- Nav area start-->
    <div id="sticky_menubar" class="nav-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-menu">
                        <ul id="menu">
                            <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'header_menu',
                                        'menu_id'        => 'primary-menu',
                                        
                                    ) );
                                    ?>
                        </ul>
                    </div>
                    <div class="menu-btn">
                        <a href="<?php echo cs_get_option('header_right_link'); ?>">Become Volunteer</a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <!-- Nav area End-->
</header>