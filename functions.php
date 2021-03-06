<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    
    // mmenu
    wp_enqueue_style( 'mmenu', get_stylesheet_directory_uri() . '/css/jquery.mmenu.all.css', array(), $the_theme->get( 'Version' ) );
    
    
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'fortawesome', 'https://use.fortawesome.com/6e7e3a67.js', array(),  $the_theme->get( 'Version' ), false);
    
    wp_enqueue_script( 'mmenu', get_stylesheet_directory_uri() . '/js/jquery.mmenu.all.js', array(), $the_theme->get( 'Version' ), false );
    
    wp_enqueue_script( 'mmenu-custom', get_stylesheet_directory_uri() . '/js/mmenu.js', array(), $the_theme->get( 'Version' ), false );
    
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
function my_header_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents align-top" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count align-top"><?php echo esc_html( $count ); ?></span>
        <?php            
    }else{?>
	    <span class="cart-contents-count align-top empty"><?php echo esc_html( $count ); ?></span>
    <?php }
        ?></a><?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );