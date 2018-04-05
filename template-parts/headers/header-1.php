<header class="site-header">
    <!-- Header-top area start-->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">                      
                      <?php get_template_part( 'template-parts/headers/logo'); ?>                   
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header-top area End-->
    <!-- Nav area start-->
    <div id="" class="nav-area">
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
                        <a href="#">Become Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav area End-->
</header>