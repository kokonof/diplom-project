<?php
add_action('wp_enqueue_scripts', 'impact_require_scripts');
function impact_require_scripts() {
	wp_enqueue_style('impact-style-bootstrap',
		get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('impact-style-bootstrap-icons',
		get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
	wp_enqueue_style('impact-style-aos',
		get_template_directory_uri() . '/assets/vendor/aos/aos.css');
	wp_enqueue_style('impact-style-glightbox',
		get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css');
	wp_enqueue_style('impact-style-swiper',
		get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css');


	wp_enqueue_style('impact-style', get_stylesheet_uri());

	wp_enqueue_script('impact-script-bootstrap',
		get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
	wp_enqueue_script('impact-script-aos',
		get_template_directory_uri() . '/assets/vendor/aos/aos.js');
	wp_enqueue_script('impact-script-glightbox',
		get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js');
	wp_enqueue_script('impact-script-purecounter',
		get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js');
	wp_enqueue_script('impact-script-swiper',
		get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js');
	wp_enqueue_script('impact-script-isotope',
		get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js');
	wp_enqueue_script('impact-script-validate',
		get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js');
	wp_enqueue_script('impact-script-main',
		get_template_directory_uri() . '/assets/js/main.js');
	wp_enqueue_script('jquery');
	wp_enqueue_script('comment-reply');
}

/**
 * impact functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package impact
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
function impact_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on impact, use a find and replace
		* to change 'impact' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'impact', get_template_directory() . '/languages' );

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

	register_nav_menus([
		'header_menu' => 'Верхнє меню',
		'right_menu' => 'Меню з права',
		'footer_menu' => esc_html__( 'Primary', 'impact' ),
	]);

	add_theme_support('post-formats', [
		'aside', 'gallery', 'link', 'image',
		'quote', 'status', 'video', 'audio', 'chat'
	]);
	add_theme_support( 'post-thumbnails' );
//	add_image_size( 'spec_thumb', 240, 240, false );
	add_theme_support( 'custom-logo', [
		'width' =>'156',
		'height' =>'46'
	]);
	add_theme_support( 'custom-background', [
		'default-color' =>'ffffff',
	]);
	add_theme_support( 'custom-header', [
		'default-color' =>'ffffff',
	]);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
//			'comment-form',
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
			'impact_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	remove_theme_support('html5', 'comment-form');

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

	add_image_size( 'spec_thumb', 850, '', true );
	add_image_size( 'recent_thumb', '', 60, false );
	add_image_size( 'blogs_thumb', '', 300, false );

// далее в цикле выводим этот размер так:
	the_post_thumbnail( 'spec_thumb' );
	the_post_thumbnail( 'recent_thumb' );
	the_post_thumbnail( 'blogs_thumb' );
}
add_action( 'after_setup_theme', 'impact_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function impact_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'impact_content_width', 640 );
}
add_action( 'after_setup_theme', 'impact_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function impact_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'impact' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'impact' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'impact_widgets_init' );


function misha_comment( $comment, $args, $depth ){
	?>
	<div id="respond" class="comment <?php echo $comment->comment_parent === '0' ? '' : 'comment-reply' ?>">
	<li class="d-flex"  id="comment-<?php comment_ID() ?>">
		<div class="comment-img">
			<?php echo get_avatar( $comment, 60, '', '', array( 'class' => 'comment-avatar' ) ) ?>
		</div>

		<div>
			<h5><?php comment_author() ?>
				<a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a>
				<?php comment_reply_link([],$comment->comment_ID, $comment->comment_post_ID )?>
			</h5>
			<time datetime="<?php comment_date( 'j F Y в H:i' ) ?>"><?php comment_date( 'j F Y в H:i' ) ?></time>
			<p>
				<?php comment_text() ?>
			</p>
		</div>
	</li>
	<?php // без закрывающего </li> (!)

}

function misha_end_comment( $comment, $args, $depth ){
	echo '</div>';
}

/**
 * Enqueue scripts and styles.
 */
function impact_scripts() {
	wp_enqueue_style( 'impact-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'impact-style', 'rtl', 'replace' );

	wp_enqueue_script( 'impact-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'impact_scripts' );

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
add_filter('wp_list_categories', 'cat_count_span');
function cat_count_span($links) {
	$links = str_replace('</a> (', ' <span>(', $links);
	$links = str_replace(')', ')</span></a>', $links);
	$links = str_replace('cat-item cat-item-1', '', $links);
	return $links;
}




