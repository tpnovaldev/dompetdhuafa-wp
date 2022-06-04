<?php
/**
 * Dompet Dhuafa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dompet_Dhuafa
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dompet_dhuafa_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Dompet Dhuafa, use a find and replace
		* to change 'dompet-dhuafa' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'dompet-dhuafa', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'dompet-dhuafa' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'dompet_dhuafa_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'dompet_dhuafa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dompet_dhuafa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dompet_dhuafa_content_width', 640 );
}
add_action( 'after_setup_theme', 'dompet_dhuafa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dompet_dhuafa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dompet-dhuafa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dompet-dhuafa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dompet_dhuafa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dompet_dhuafa_scripts() {
	wp_enqueue_style( 'dompet-dhuafa-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'dompet-dhuafa-style', 'rtl', 'replace' );
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css' );

	wp_enqueue_script( 'dompet-dhuafa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dompet_dhuafa_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Login Form Shortcode
 */
function dd_add_login_shortcode() {
	add_shortcode( 'jay-login-form', 'dd_login_form_shortcode' );
}

function dd_login_form_shortcode( $args = array() ) {
	$defaults = array(
			'echo'           => true,
			// Default 'redirect' value takes the user back to the request URI.
			'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
			'form_id'        => 'loginform',
			'label_username' => __( 'Email' ),
			'label_password' => __( 'Kata Sandi' ),
			'label_log_in'   => __( 'Masuk' ),
			'id_username'    => 'user_login',
			'id_password'    => 'user_pass',
			'id_submit'      => 'wp-submit',
			'remember'       => false,
			'value_username' => '',
			// Set 'value_remember' to true to default the "Remember me" checkbox to checked.
			'value_remember' => false,
	);

	/**
	 * Filters the default login form output arguments.
	 *
	 * @since 3.0.0
	 *
	 * @see wp_login_form()
	 *
	 * @param array $defaults An array of default login form arguments.
	 */
	$args = wp_parse_args( $args, apply_filters( 'login_form_defaults', $defaults ) );

	/**
	 * Filters content to display at the top of the login form.
	 *
	 * The filter evaluates just following the opening form tag element.
	 *
	 * @since 3.0.0
	 *
	 * @param string $content Content to display. Default empty.
	 * @param array  $args    Array of login form arguments.
	 */
	$login_form_top = apply_filters( 'login_form_top', '', $args );

	/**
	 * Filters content to display in the middle of the login form.
	 *
	 * The filter evaluates just following the location where the 'login-password'
	 * field is displayed.
	 *
	 * @since 3.0.0
	 *
	 * @param string $content Content to display. Default empty.
	 * @param array  $args    Array of login form arguments.
	 */
	$login_form_middle = apply_filters( 'login_form_middle', '', $args );

	/**
	 * Filters content to display at the bottom of the login form.
	 *
	 * The filter evaluates just preceding the closing form tag element.
	 *
	 * @since 3.0.0
	 *
	 * @param string $content Content to display. Default empty.
	 * @param array  $args    Array of login form arguments.
	 */
	$login_form_bottom = apply_filters( 'login_form_bottom', '', $args );

	$form =
			sprintf(
					'<form name="%1$s" id="%1$s" action="%2$s" method="post" class="dd__form">',
					esc_attr( $args['form_id'] ),
					esc_url( site_url( 'wp-login.php', 'login_post' ) )
			) .
			$login_form_top .
			sprintf(
					'<div class="dd__group">
						<div class="dd__input">
							<i class="dd__icon icon--email"></i>
							<input type="text" name="log" id="%1$s" autocomplete="username" value="%3$s" size="20" placeholder="%2$s" />
						</div>
					</div>',
					esc_attr( $args['id_username'] ),
					esc_html( $args['label_username'] ),
					esc_attr( $args['value_username'] )
			) .
			sprintf(
					'<div class="dd__group">
						<div class="dd__input">
							<i class="dd__icon icon--password"></i>
							<input type="password" name="pwd" id="%1$s" autocomplete="current-password" class="js-password" value="" size="20" placeholder="%2$s" />
						</div>
						<div class="dd__check">
              <input type="checkbox" class="js-password-toggle" id="togglePassword" />
              <label for="togglePassword">Tampilkan Kata Sandi</label>
            </div>
					</div>',
					esc_attr( $args['id_password'] ),
					esc_html( $args['label_password'] )
			) .
			$login_form_middle .
			sprintf(
					'<div class="login-submit">
							<input type="submit" name="wp-submit" id="%1$s" class="dd__btn btn--primary" value="%2$s" />
							<input type="hidden" name="redirect_to" value="%3$s" />
					</div>',
					esc_attr( $args['id_submit'] ),
					esc_attr( $args['label_log_in'] ),
					esc_url( $args['redirect'] )
			) .
			$login_form_bottom .
			'</form>';

	if ( $args['echo'] ) {
			echo $form;
	} else {
			return $form;
	}
}
add_action( 'init', 'dd_add_login_shortcode' );


add_action( 'wp_logout','auto_redirect_after_logout' );
function auto_redirect_after_logout(){
  wp_safe_redirect( get_site_url() . "/masuk" );
  exit;
}

// add_action( 'after_setup_theme', 'remove_admin_bar' );
// function remove_admin_bar() {
// 	if (current_user_can('subscriber')) {
// 		show_admin_bar(false);
// 	}
// }

