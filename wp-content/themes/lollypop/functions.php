<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Enqueues scripts and styles.
 */

function twentyseventeen_scripts() {
    //wp_enqueue_style('fonts-gststic', "https://fonts.gstatic.com");
   // wp_enqueue_style('fonts-pt', "https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;display=swap");
 //   wp_enqueue_style('swifer', get_template_directory_uri().'/css/swiper-bundle.min.css');
   // wp_enqueue_style('aos', get_template_directory_uri().'/css/aos.css');
    //wp_enqueue_style('main', get_template_directory_uri().'/css/main.css');
    //wp_enqueue_style('plyr', get_template_directory_uri().'/css/plyr.css');
   

   wp_enqueue_script('jquery-version', get_template_directory_uri().'/js/jquery-3.1.1.min.js');    
    /*wp_enqueue_script('aos', get_template_directory_uri().'/js/aos.js');    
    wp_enqueue_script('jquery-ui', get_template_directory_uri().'/js/jquery-ui.min.js');    
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri().'/js/bootstrap.bundle.min.js');    
    wp_enqueue_script('swiper-bundle', get_template_directory_uri().'/js/swiper-bundle.min.js');    
   // wp_enqueue_script('dropdown', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/dropdown.min.js');    
    //wp_enqueue_script('transition','https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/transition.min.js');    
    wp_enqueue_script('scroll-trigger', get_template_directory_uri().'/js/ScrollTrigger.min.js');    
    wp_enqueue_script('gsap', get_template_directory_uri().'/js/gsap.min.js');    
    wp_enqueue_script('plyr', get_template_directory_uri().'/js/plyr.polyfilled.js');    
    wp_enqueue_script('scroll-magic', get_template_directory_uri().'/js/ScrollMagic.min.js');    
    wp_enqueue_script('debug-addindicator', get_template_directory_uri().'/js/debug.addIndicators.min.js');    
    wp_enqueue_script('tween-max', get_template_directory_uri().'/js/TweenMax.min.js');    
    wp_enqueue_script('slick', get_template_directory_uri().'/js/plugins/slick.min.js');   
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js');    
    wp_enqueue_script('home', get_template_directory_uri().'/js/home.js');    
    wp_enqueue_script('header', get_template_directory_uri().'/js/header.js');    */
   // wp_enqueue_script( 'jquery-1', 'https://code.jquery.com/jquery-1.10.2.js');

    /* if( is_page_template('contact.php') ) {
      wp_enqueue_script('contact', get_template_directory_uri().'/js/contact.js', array(), false, true);
     }*/
}
//add_action('wp_footer', 'twentyseventeen_scripts' );
add_action( 'wp_enqueue_scripts', 'twentyseventeen_scripts' );
add_theme_support( 'post-thumbnails' );

function set_head_keywords() {
    $id = get_the_ID();
    if (!$id) return;
    $meta = get_post_meta( $id, '_yoast_wpseo_focuskw', true );
    return $meta;
}
add_action( 'wp_head', 'set_head_keywords' );


function webp_upload_mimes( $existing_mimes ) {
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';

    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );

class Month_Name_Permalink {

/**
 * Month Names
 */
public static $monthnames = array(
    'january',
    'february',
    'march',
    'april',
    'may',
    'june',
    'july',
    'august',
    'september',
    'october',
    'november',
    'december',
);

/**
 * Registers all required hooks
 */
public static function init() {
    add_rewrite_tag( '%monthname%', '(' . implode('|', self::$monthnames) . ')' );
    add_rewrite_rule(
        '^([0-9]{4})/(' . implode( '|', self::$monthnames ) . ')/([0-9]{1,2})/(.*)?',
        'index.php?name=$matches[4]',
        'top'
    );     

}
/**
 * Filters the month name and month code tags
 */
public static function filter_post_link( $permalink, $post ) {
    if ( false === strpos( $permalink, '%monthname%' )) {
        return $permalink;
    }

    try {
        $monthindex = intval(get_post_time( 'n', "GMT" == false, $post->ID ));

        $monthname = self::$monthnames[$monthindex - 1];

        $permalink = str_replace( '%monthname%', $monthname, $permalink );
        return $permalink;
    } catch (Exception $e) {
        return $permalink;
    }
}

}

add_action( 'init', array( 'Month_Name_Permalink', 'init' ) );
add_filter( 'post_link', array( 'Month_Name_Permalink', 'filter_post_link' ), 10, 2 );




function my_custom_mime_types( $mimes ) {
$mimes['svg'] = 'image/svg+xml';
$mimes['svgz'] = 'image/svg+xml';
unset( $mimes['exe'] );
return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );


/* Redirecting URLS */

function quadlayers_redirect() {

	if (isset($_SERVER['HTTPS']) &&
		($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
		isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
		$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
		$protocol = 'https://';
	}
	else {
		$protocol = 'http://';
	}

	$currenturl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$currenturl_relative = wp_make_link_relative($currenturl);

	switch ($currenturl_relative) {

	case '/ui-ux-design-studio-in-usa/':
		$urlto = home_url('/ui-ux-design-agency-in-usa/');
		break;

	default:
		return;

	}

	if ($currenturl != $urlto)
		exit( wp_redirect( $urlto ) );


}
add_action( 'template_redirect', 'quadlayers_redirect' );

add_filter( 'wpseo_json_ld_output', '__return_false' );

add_filter('do_redirect_guess_404_permalink','stop_redirect_guess');
function stop_redirect_guess() {
	    return false;
}

// stop WordPress scaling large images 
add_filter( 'big_image_size_threshold', '__return_false' );