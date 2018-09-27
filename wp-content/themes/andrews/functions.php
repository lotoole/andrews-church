<?php

// Register Post Types, Taxonomies, Shortcodes
require_once( 'includes/galleries.php' );
require_once( 'includes/share.php' );

new andrews();

class andrews {
    private $version;

    public static $sm = '(min-width: 576px)';
    public static $md = '(min-width: 768px)';
    public static $lg = '(min-width: 992px)';
    public static $xl = '(min-width: 1200px)';

    function __construct() {
        $theme = wp_get_theme();
        $this->version = $theme->Version;

        add_theme_support( 'menus' );
        add_theme_support( 'post-thumbnails' );

        add_image_size( 'icon', 60, 60, true );
        add_image_size( 'excerpt', 640, 480, true );
        add_image_size( 'square', 640, 640, true );
        add_image_size( 'hero', 1280, 400, true );
        add_image_size( 'hero-small', 1280, 200, true );

        add_action( 'admin_init',                   array( $this, 'add_editor_styles' ) );
        add_action( 'init',                         array( $this, 'action_register_nav_menus' ) );
        add_action( 'init',                         array( $this, 'action_acf_add_options_page' ) );
        add_action( 'init',                         array( $this, 'register_post_type_board_trustees' ) );
        add_action( 'init',                         array( $this, 'register_post_type_meeting_minutes' ) );
        add_action( 'init',                         array( $this, 'register_post_type_newsletter' ) );
        add_action( 'init',                         array( $this, 'register_post_type_news_updates' ) );
        add_action( 'acf/init',                     array( $this, 'action_acf_init' ) );
        add_action( 'wp_enqueue_scripts',           array( $this, 'action_enqueue_scripts' ) );
        add_action( 'wp_enqueue_scripts',           array( $this, 'action_enqueue_styles' ), 20 );
        add_action( 'admin_enqueue_scripts',        array( $this, 'action_admin_enqueue_styles' ) );

        add_filter( 'post_type_link',               array( $this, 'filter_post_type_link' ), 10, 2 );
        add_filter( 'body_class',                   array( $this, 'filter_body_class' ) );
        add_filter( 'mce_buttons_2',                array( $this, 'filter_mce_buttons_2' ) );
        add_filter( 'tiny_mce_before_init',         array( $this, 'filter_tiny_mce_before_init' ) );
        add_filter( 'attachment_fields_to_edit',    array( $this, 'filter_image_attachment_fields_to_edit' ), null, 2);
        add_filter( 'attachment_fields_to_save',    array( $this, 'filter_image_attachment_fields_to_save' ), null , 2);
        add_filter( 'template_include',             array( $this, 'filter_template_include' ) );
        add_filter( 'image_size_names_choose',      array( $this, 'filter_image_size_names_choose' ) );
        add_filter( 'post_link',                    array( $this, 'filter_post_link' ), 10, 2 );
        add_filter( 'upload_mimes',                 array( $this, 'filter_upload_mimes' ) );
    }

    function add_editor_styles() {
        add_editor_style( 'static/css/editor.css' );
    }

    function action_register_nav_menus() {
        register_nav_menus(
            array(
                'primary' => 'Primary Navigation in Header',
                'secondary' => 'Secondary Navigation in Header',
                'footer' => 'Navigation in Footer'
            )
        );
    }

    function action_acf_add_options_page() {
        if ( function_exists( 'acf_add_options_page' ) ) {
            acf_add_options_page();
        }
    }

    function register_post_type_board_trustees() {
       $labels = array(
           'name'                => 'Board Trustees',
           'singular_name'       => 'Board Member',
       );

       $args = array(
           'label'               => 'board_member',
           'labels'              => $labels,
           'supports'            => array( 'title', 'editor', 'thumbnail' ),
           'hierarchical'        => false,
           'public'              => true,
           'show_ui'             => true,
           'show_in_menu'        => true,
           'menu_position'       => 10,
           'menu_icon'           => 'dashicons-admin-users',
           'has_archive'         => false,
           'capability_type'     => 'page',
       );

       register_post_type( 'board_member', $args );
   }

  function register_post_type_meeting_minutes() {
     $labels = array(
         'name'                => 'Meeting Minutes',
         'singular_name'       => 'Meeting',
     );

     $args = array(
         'label'               => 'meeting_minutes',
         'labels'              => $labels,
         'supports'            => array( 'title', 'editor', 'thumbnail' ),
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'menu_position'       => 10,
         'menu_icon'           => 'dashicons-welcome-write-blog',
         'has_archive'         => false,
         'capability_type'     => 'page',
     );

     register_post_type( 'meeting_minutes', $args );
 }

 function register_post_type_news_updates() {
    $labels = array(
        'name'                => 'News Updates',
        'singular_name'       => 'News Update',
    );

    $args = array(
        'label'               => 'news_updates',
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 10,
        'menu_icon'           => 'dashicons-welcome-write-blog',
        'has_archive'         => false,
        'capability_type'     => 'page',
    );

    register_post_type( 'news_updates', $args );
}

 function register_post_type_newsletter() {
    $labels = array(
        'name'                => 'Newsletter',
        'singular_name'       => 'newsletter',
    );

    $args = array(
        'label'               => 'newsletter',
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 10,
        'menu_icon'           => 'dashicons-format-aside',
        'has_archive'         => false,
        'capability_type'     => 'page',
    );

    register_post_type( 'newsletter', $args );
}


    function action_acf_init() {
        acf_update_setting( 'google_api_key', GOOGLE_MAPS_API_KEY );
    }

    function action_enqueue_scripts() {
        // Header
        wp_enqueue_script( 'head', get_stylesheet_directory_uri() . '/static/js/build/head.min.js', false, $this->version, false );

        // Footer
        wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/static/js/build/main.min.js', false, $this->version, true );

        $data = array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'template_directory_url' => get_stylesheet_directory_uri(),
        );

        if ( is_page( 'events' ) ) {
            wp_enqueue_script( 'gmaps', 'http://maps.googleapis.com/maps/api/js?key=AIzaSyBid3ONbzn_pOk6zoopLhOljWsvjzivNcg', false, false, true );
        }

        wp_localize_script( 'main', 'andrews', $data );
    }

    function action_enqueue_styles() {
        wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/static/css/main.css', false, $this->version );
        wp_enqueue_style( 'print', get_stylesheet_directory_uri() . '/static/css/print.css', false, $this->version, 'print' );
        wp_enqueue_style( 'fonts', '//fonts.googleapis.com/css?family=Oswald:300,400,700', false, $this->version );
        // Remove unnecessary styles
        wp_deregister_style( 'contact-form-7' );
        wp_deregister_style( 'wordpress-popular-posts' );
    }

    function action_admin_enqueue_styles() {
        wp_enqueue_style( 'admin', get_stylesheet_directory_uri() . '/static/css/admin.css', false, $this->version, 'admin' );
    }

    function filter_post_type_link( $url, $post ) {
        $permalink = get_field( 'permalink', $post->ID );

        return $permalink ? $permalink : $url;
    }

    function filter_body_class( $classes ) {
        global $post;

        if ( isset( $post ) && is_singular() ) {
            $classes[] = $post->post_type . '-' . $post->post_name;
        }

        if ( !empty( $_REQUEST['format'] ) && 'print' == $_REQUEST['format'] ) {
            $classes[] = 'noscroll';
        }

        return $classes;
    }

    function filter_mce_buttons_2( $buttons ) {
        array_unshift( $buttons, 'styleselect' );
        return $buttons;
    }

    function filter_tiny_mce_before_init( $init ) {
        $style_formats = array(
            array(
                'title' => 'Arrow',
                'block' => 'p',
                'classes' => 'arrow',
                'wrapper' => false,
            ),
            array(
                'title' => 'Button',
                'inline' => 'a',
                'block' => 'a',
                'classes' => 'btn btn-primary',
                'wrapper' => false,
            ),
            array(
                'title' => 'Button - Block',
                'inline' => 'a',
                'block' => 'a',
                'classes' => 'btn btn-primary btn-block',
                'wrapper' => false,
            ),
            array(
                'title' => 'Button - Outline',
                'inline' => 'a',
                'block' => 'a',
                'classes' => 'btn btn-outline',
                'wrapper' => false,
            ),
            array(
                'title' => 'Callout',
                'block' => 'div',
                'classes' => 'callout',
                'wrapper' => false,
            ),
            array(
                'title' => 'Intro',
                'block' => 'p',
                'classes' => 'intro',
                'wrapper' => false,
            ),
            array(
                'title' => 'Intro - Large',
                'block' => 'p',
                'classes' => 'intro-lg',
                'wrapper' => false,
            ),
            array(
                'title' => 'Label',
                'block' => 'p',
                'classes' => 'label',
                'wrapper' => false,
            ),
            array(
                'title' => 'List With Columns',
                'block' => 'ul',
                'classes' => 'list-with-columns',
                'wrapper' => false,
            ),
            array(
                'title' => 'Answer',
                'block' => 'p',
                'classes' => 'answer',
                'wrapper' => false,
            ),
            array(
                'title' => 'Primary Button',
                'inline' => 'a',
                'block' => 'a',
                'classes' => 'btn btn-primary',
                'wrapper' => false,
            ),
        );

        $init['style_formats'] = json_encode( $style_formats );

        $custom_colours = array(
            'FFFFFF', 'White',
            '484848', 'Black',
            'E15F55', 'Red 1',
            'E03C31', 'Red 2',
            'D9AD38', 'Gold',
            '326EAD', 'Blue',
            'CF8148', 'Orange',
            '94AF54', 'Green',
            '168DA2', 'Teal',
            'DB8675', 'Pink',
            'E3B270', 'Manhattan',
            'EAB793', 'Wax',
            '8C8752', 'Olive',
        );

        $init['textcolor_map'] = json_encode( $custom_colours );
        $init['textcolor_cols'] = 8;

        return $init;
    }

    function filter_image_attachment_fields_to_edit( $form_fields, $post ) {
        $form_fields['credit'] = array(
            'label' => 'Photo Credit',
            'input' => 'text',
            'value' => get_post_meta( $post->ID, 'credit', true ),
        );

        return $form_fields;
    }

    function filter_image_attachment_fields_to_save( $post, $attachment ) {
        if ( isset( $attachment['credit'] ) ){
            update_post_meta( $post['ID'], 'credit', $attachment['credit'] );
        }

        return $post;
    }

    function filter_template_include( $template ) {
        global $wp_query;

        if ( $wp_query->is_search ) {
            $template = locate_template( 'archive.php' );
        }

        return $template;
    }

    function filter_image_size_names_choose( $sizes ) {
        $sizes['excerpt'] = 'Excerpt';
        $sizes['excerpt-wide'] = 'Excerpt Wide';
        $sizes['square'] = 'Square';

        return $sizes;
    }

    function filter_post_link( $permalink, $post ) {
        if ( get_field( 'permalink', $post ) ) {
            return get_field( 'permalink', $post );
        }

        return $permalink;
    }

    function filter_upload_mimes($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }

    static function get_pagination( $query = null ) {
        global $wp_query;

        $query = $query ? $query : $wp_query;

        return paginate_links( array(
            'current' => max( 1, get_query_var( 'paged' ) ),
            'total' => $query->max_num_pages,
        ) );
    }

    static function fields_to_classes() {
        $fields = func_get_args();
        $field_values = array_map( function ( $field ) {
            return get_sub_field( $field );
        }, $fields );
        $field_values = array_filter( $field_values );

        return implode( ' ', $field_values );
    }

    static function truncate_string( $string, $limit, $break = '.', $pad = '...' ) {
        // return with no change if string is shorter than $limit
        if ( strlen( $string ) <= $limit ) {
            return $string;
        }

        // is $break present between $limit and the end of the string?
        if ( false !== ( $breakpoint = strpos( $string, $break, $limit ) ) ) {
            if ( $breakpoint < strlen( $string ) - 1) {
                $string = substr( $string, 0, $breakpoint ) . $pad;
            }
        }

        return $string;
    }

    static function format_url( $url ) {
        $parts = parse_url( $url );

        if ( !empty( $parts['host'] ) ) {
            return str_replace( 'www.', '', $parts['host'] );
        }

        return $url;
    }

    static function to_lowercase_nowhitespace($string) {
      $ID = strtolower($string);
      $final = preg_replace('/\s+/', '', $ID);

      return $final;
    }

}
