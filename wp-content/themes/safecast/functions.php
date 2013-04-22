<?php
        // Translations can be filed in the /languages/ directory
        load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );
 
        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !function_exists(core_mods) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"), false);
				wp_enqueue_script('jquery');
			}
		}
		core_mods();
	}

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','html5reset' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.
    add_theme_support('post-thumbnails');

    add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
    add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

    function remove_width_attribute( $html ) {
       $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
       return $html;
    }

    function excerpt($limit) {
          $excerpt = explode(' ', get_the_excerpt(), $limit);
          if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).'&hellip; <a href="'. get_permalink($post->ID) . '">' . 'more' . '</a>';
          } else {
            $excerpt = implode(" ",$excerpt);
          } 
          $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
          return $excerpt;
        }

        function content($limit) {
          $content = explode(' ', get_the_content(), $limit);
          if (count($content)>=$limit) {
            array_pop($content);
            $content = implode(" ",$content).'&hellip; <a href="'. get_permalink($post->ID) . '">' . 'more' . '</a>';
          } else {
            $content = implode(" ",$content);
          } 
          $content = preg_replace('/\[.+\]/','', $content);
          $content = apply_filters('the_content', $content); 
          $content = str_replace(']]>', ']]&gt;', $content);
          return $content;
        }
?>