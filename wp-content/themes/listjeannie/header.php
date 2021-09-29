<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width">
<title> 
<?php
	$site_description = get_bloginfo( 'description', 'display' );
	$site_name = get_bloginfo( 'name' );
    //for home page
	if ( $site_description && ( is_home() || is_front_page() ) ):
		echo $site_name;echo ' - '; echo  $site_description; 
	endif;
	// for other post pages
	if (!( is_home() ) && ! is_404() ):
	the_title(); echo ' - '; echo $site_name;
	endif;
	?>
</title>


<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> style="background:#f5f7fb;">
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-12">
                    <div class="header-top-content">
                    <p>New Release: Learn more about our latest updates with just a click
                    <a href="faq.html">Learn More</a></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-12">
                    <div class="header-top-right">
                    <?php
                    $args = array(
                    'theme_location'  => 'top',
                    'container' => 'false',
                    'menu_class' => 'nav',
                    //'depth' => 3,
                    'items_wrap' => '<ul>%3$s</ul>',

                    );
                    ?>
                    <?php wp_nav_menu($args); ?>
                    </div>
                </div> 		
                
            </div>
        </div>	
    </div>
    <nav class="navigation-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 pl-0 pr-0">
                    <div class="navbar navbar-expand-lg navbar-light">

                        <div id="navbarContent" class="collapse navbar-collapse">
                            <ul class="navbar-nav mx-auto">
                                <div class="web-logo">   
                                <?php
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                if ( has_custom_logo() ) {
                                echo '<a href='.home_url().'><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
                                } else {
                                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                                }
                                ?>
                                </div>
                                <?php
                                $args = array(
                                'theme_location'  => 'primary',
                                'container' => 'false',
                                'menu_class' => 'nav',
                                //'depth' => 3,
                                'items_wrap' => '%3$s',
                                'fallback_cb'       => 'ods_bootstrap_navwalker::fallback',
                                'walker'            => new ods_bootstrap_navwalker()
                                );
                                wp_nav_menu($args); 
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="nav_mobile">
    <div id="cssmenu">
        <div class="logo">
            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
            echo '<a href='.home_url().'><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
            } else {
            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
            }
            ?>
        </div>
        <div id="head-mobile"></div>
        <div class="button"></div>
            <?php
                $args = array(
                'theme_location'  => 'primary',
                'container' => 'false',
                'menu_class' => 'nav',
                //'depth' => 3,
                'items_wrap' => '<ul>%3$s</ul>',
                'fallback_cb'       => 'ods_bootstrap_navwalker::fallback',
                'walker'            => new ods_bootstrap_navwalker()
                );
                wp_nav_menu($args); 
            ?>
        </div>
    </div>
</header>
