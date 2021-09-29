<?php
//Theme Styles

add_action( 'wp_enqueue_scripts', 'theme_styles' );
    function theme_styles() {
       
       wp_enqueue_style( 'style-animate', get_template_directory_uri().'/css/animate.css' );
       wp_enqueue_style( 'style-minbootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
       wp_enqueue_style( 'style-fontawesome', get_template_directory_uri().'/css/font-awesome.min.css');
       wp_enqueue_style( 'style-hover', get_template_directory_uri().'/css/hover-effect.css');
       wp_enqueue_style( 'style-mobile', get_template_directory_uri().'/css/mobile-menu.css');
       wp_enqueue_style( 'style-main', get_stylesheet_uri() );
       wp_enqueue_script( 'main-min-js', get_template_directory_uri().'/js/jquery-3.3.1.min.js' );
       wp_enqueue_script( 'main-js', get_template_directory_uri().'/js/main.js' );
       wp_enqueue_script( 'mobile-js', get_template_directory_uri().'/js/mobile-menu.js' );
       wp_enqueue_script( 'wow-js', get_template_directory_uri().'/js/wow.min.js' );
       wp_enqueue_script( 'easing-js', get_template_directory_uri().'/js/jquery.easing.1.3.js' );
       wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js' );
       
}



///Theme Logo

function listjeannie_custom_logo_setup() {
    $defaults = array(
    'height'      => 40,
    'width'       => 142,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
   'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'listjeannie_custom_logo_setup' );
 
 //Navigation menus  

register_nav_menus(array(
    'primary' => __('Primary Menu', 'Primary Theme Menu'),
    'secondary' => __('Secondary Menu',       'Secondary Menu'),
    'top' => __('Top Menu',       'Top Menu')
));

//Widgets

function header_widgets_btn() {
 
    register_sidebar( array(
        'name'          => 'How to Find Us',
        'id'            => 'how-to-find-us',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => 'Follow Us and Subscribe',
        'id'            => 'follow-us-and-subscribe',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => 'Contact Us',
        'id'            => 'contact-us',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => 'Footer CopyRight',
        'id'            => 'footer-copyright',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
 
}
add_action( 'widgets_init', 'header_widgets_btn' );



add_theme_support( 'post-thumbnails' );

function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);
function _namespace_modify_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link hvr-underline-from-left"', $ulclass);
}

add_filter('wp_nav_menu', '_namespace_modify_menuclass');

class ods_bootstrap_navwalker extends Walker_Nav_Menu {

    /**
     * @see Walker::start_lvl()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of page. Used for padding.
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
       
        $indent = str_repeat( "\t", $depth );
        if($depth === 0){
        $output .= "\n$indent<div class=\"mega-menu-full\"><ul class=\"sub-menu\">\n";
        }else{
            $output .= "\n$indent<ul class=\"sub-menu\">\n";
        }
    }

    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param int $current_page Menu item ID.
     * @param object $args
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        /**
         * Dividers, Headers or Disabled
         * =============================
         * Determine whether the item is a Divider, Header, Disabled or regular
         * menu item. To prevent errors we use the strcasecmp() function to so a
         * comparison that is not case sensitive. The strcasecmp() function returns
         * a 0 if the strings are equal.
         */
        if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
            // $output .= $indent . '<li role="presentation" class="divider">';
        } else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
            // $output .= $indent . '<li role="presentation" class="divider">';
        } else if ( strcasecmp( $item->attr_title, 'dropdown-header') == 0 && $depth === 1 ) {
            // $output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
        } else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
            // $output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
        } else {
            
            $class_names = $value = '';
            
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $classes[] = 'menu-item-' . $item->ID;
            
            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
            
            if ( $args->has_children )
                $class_names .= ' dropdown mega-menu-dropdown';

            if ( in_array( 'current-menu-item', $classes ) )
                $class_names .= ' active';
                
            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
            
            $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
            
            $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
            
            $output .= $indent . '<li' . $id . $value . $class_names .'>';

            $atts = array();
            
            $atts['title']  = ! empty( $item->title )   ? $item->title  : '';
            $atts['target'] = ! empty( $item->target )  ? $item->target : '';
            $atts['rel']    = ! empty( $item->xfn )     ? $item->xfn    : '';
            $atts['class']    = "";
            
            // If item has_children add atts to a.
            if ( $args->has_children && $depth === 0 ) {
                $atts['href']           = $item->url;
                //$atts['data-toggle']    = 'dropdown';
                //$atts['class']          = 'dropdown-toggle';
                //$atts['aria-haspopup']  = 'true';
            } else {
                $atts['href'] = ! empty( $item->url ) ? $item->url : '';
            }
            

            $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
            
            $attributes = '';
            foreach ( $atts as $attr => $value ) {
                if ( ! empty( $value ) ) {
                    $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }
            

            $item_output = $args->before;
            /*
             * Glyphicons
             * ===========
             * Since the the menu item is NOT a Divider or Header we check the see
             * if there is a value in the attr_title property. If the attr_title
             * property is NOT null we apply it as the class name for the glyphicon.
             */
            
            if ( ! empty( $item->attr_title ) )
                $item_output .= '<a'. $attributes .'><span class="glyphicon ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
            else
                $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= ( $args->has_children && 0 === $depth ) ? '</a><span class="mobile-menu-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>' : '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }

    /**
     * Traverse elements to create list from elements.
     *
     * Display one element if the element doesn't have any children otherwise,
     * display the element and its children. Will only traverse up to the max
     * depth and no ignore elements under that depth.
     *
     * This method shouldn't be called directly, use the walk() method instead.
     *
     * @see Walker::start_el()
     * @since 2.5.0
     *
     * @param object $element Data object
     * @param array $children_elements List of elements to continue traversing.
     * @param int $max_depth Max depth to traverse.
     * @param int $depth Depth of current element.
     * @param array $args
     * @param string $output Passed by reference. Used to append additional content.
     * @return null Null on failure with no changes to parameters.
     */
    public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
            return;

        $id_field = $this->db_fields['id'];

        // Display this element.
        if ( is_object( $args[0] ) )
           $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );

        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    /**
     * Menu Fallback
     * =============
     * If this function is assigned to the ods_nav_menu's fallback_cb variable
     * and a manu has not been assigned to the theme location in the WordPress
     * menu manager the function with display nothing to a non-logged in user,
     * and will add a link to the WordPress menu manager if logged in as an admin.
     *
     * @param array $args passed from the ods_nav_menu function.
     *
     */
    //public static function fallback( $args ) {
        //if ( current_user_can( 'manage_options' ) ) {

            // extract( $args );

            // $fb_output = null;

            // if ( $container ) {
            //     $fb_output = '<' . $container;

            //     if ( $container_id )
            //         $fb_output .= ' id="' . $container_id . '"';

            //     if ( $container_class )
            //         $fb_output .= ' class="' . $container_class . '"';

            //     $fb_output .= '>';
            // }

            // $fb_output .= '<ul';

            // if ( $menu_id )
            //     $fb_output .= ' id="' . $menu_id . '"';

            // if ( $menu_class )
            //     $fb_output .= ' class="' . $menu_class . '"';

            // $fb_output .= '>';
            // $fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a asdasdmenu</a></li>';
            // $fb_output .= '</ul>';

            // if ( $container )
            //     $fb_output .= '</' . $container . '>';

            // echo $fb_output;
        //}
    //}
}


function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );

