<?php

new GPEC_Share();

class GPEC_Share {
    function __construct() {
        add_action( 'init', array( $this, 'register_shortcodes' ) );
    }

    function register_shortcodes() {
        add_shortcode( 'share', array( $this, 'share_this' ) );
    }

    function share_this( $atts, $content = null ) {
        $atts = shortcode_atts( array(
            'url' => null,
        ), $atts );
        $content_str = html_entity_decode( strip_tags( $content  ) );
        $facebook_args = array_filter( array( 'link' => $atts['url'], 'description' => $content_str ) );
        $twitter_args = array_filter( array( 'url' => $atts['url'], 'text' => $content_str ) );
        $format = '%s <div class="share-this"><a data-share class="icon-facebook" target="_blank" href="%s"><span class="sr-only">Facebook</span></a> <a data-share class="icon-twitter-alt" target="_blank" href="%s"><span class="sr-only">Twitter</span></a></div>';

        return sprintf($format, $content, self::facebook( $facebook_args ), self::twitter( $twitter_args ) );
    }

    static function facebook( $args = null ) {
        $args = wp_parse_args( $args, array(
            'app_id' => '1717646331810143',
            'link' => get_the_permalink(),
            'name' => false,
            'description' => false,
        ) );
        $args = array_filter( $args );
        $url = 'https://www.facebook.com/v2.8/dialog/feed?' . http_build_query( $args );

        return $url;
    }

    static function twitter( $args = null ) {
        $args = wp_parse_args( $args, array(
            'text' => get_the_title(),
            'url' => get_the_permalink(),
            'related' => 'WrightTaliesin'
        ) );
        $args = array_filter( $args );
        $args['text'] = GPEC::truncate_string( $args['text'], 105, ' ' );
        $url = 'https://twitter.com/intent/tweet?' . http_build_query( $args );

        return $url;
    }

    static function email( $args = null ) {
        $args = wp_parse_args( $args, array(
            'subject' => get_the_title(),
            'body' => get_the_excerpt(),
            'link' => get_the_permalink(),
        ) );
        $args['body'] .= "\n\nRead More: " . $args['link'];
        unset($args['link']);
        $url = 'mailto:?' . http_build_query( $args, null, '&', PHP_QUERY_RFC3986 );

        return $url;
    }
}
