<?php
/**
 * Your Block Theme Functions
 *
 * @package Your_Block_Theme
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function your_block_theme_setup() {

    // Add support for WordPress block styles.
    add_theme_support( 'wp-block-styles' );

    // Enable wide alignment.
    add_theme_support( 'align-wide' );

    // Enable responsive embeds.
    add_theme_support( 'responsive-embeds' );

    // Add support for custom logos.
    add_theme_support( 'custom-logo' );

    // Add support for custom editor styles.
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/editor-style.css' );

    // Load theme textdomain for internationalization.
    load_theme_textdomain( 'your-block-theme', get_template_directory() . '/languages' );

    // Register navigation menus.
    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary Menu', 'your-block-theme' ),
            'footer'  => esc_html__( 'Footer Menu', 'your-block-theme' ),
        )
    );
}
add_action( 'after_setup_theme', 'your_block_theme_setup' );

/**
 * Enqueue theme assets: stylesheets and JavaScript files.
 */
function your_block_theme_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    // Enqueue the main stylesheet.
    wp_enqueue_style(
        'your-block-theme-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );

    // Enqueue additional custom CSS (if available).
    wp_enqueue_style(
        'your-block-theme-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        array(),
        $theme_version
    );

    // Enqueue JavaScript file.
    wp_enqueue_script(
        'your-block-theme-scripts',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $theme_version,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'your_block_theme_assets' );

/**
 * Register widget areas for fallback support.
 */
function your_block_theme_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'your-block-theme' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'your-block-theme' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'your_block_theme_widgets_init' );

/**
 * Register Custom Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

    /**
     * Helper function to retrieve the content of a pattern file.
     *
     * @param string $filename The file name located in the /patterns/ folder.
     * @return string The file contents if it exists, otherwise an empty string.
     */
    function your_block_theme_get_pattern( $filename ) {
        $file_path = get_template_directory() . '/patterns/' . $filename;
        return file_exists( $file_path ) ? file_get_contents( $file_path ) : '';
    }

    // Register a custom block pattern category for your theme.
    if ( function_exists( 'register_block_pattern_category' ) ) {
        register_block_pattern_category(
            'your-theme-patterns',
            array( 'label' => __( 'Your Theme Patterns', 'your-block-theme' ) )
        );
    }

    // Register the Hero Section pattern.
    register_block_pattern(
        'your-block-theme/hero-section',
        array(
            'title'       => __( 'Hero Section', 'your-block-theme' ),
            'description' => __( 'A full-width hero section with an image/gradient background, headline, and CTA button.', 'your-block-theme' ),
            'categories'  => array( 'your-theme-patterns' ),
            'content'     => your_block_theme_get_pattern( 'hero-section.html' ),
        )
    );

    // Register the Features/Services Section pattern.
    register_block_pattern(
        'your-block-theme/features-section',
        array(
            'title'       => __( 'Features/Services Section', 'your-block-theme' ),
            'description' => __( 'Showcases key features or services using multiple columns, icons, and descriptions.', 'your-block-theme' ),
            'categories'  => array( 'your-theme-patterns' ),
            'content'     => your_block_theme_get_pattern( 'features-section.html' ),
        )
    );

    // Register the Call-to-Action (CTA) Section pattern.
    register_block_pattern(
        'your-block-theme/cta-section',
        array(
            'title'       => __( 'Call-to-Action Section', 'your-block-theme' ),
            'description' => __( 'A section prompting users to take action, e.g., sign up or contact.', 'your-block-theme' ),
            'categories'  => array( 'your-theme-patterns' ),
            'content'     => your_block_theme_get_pattern( 'cta-section.html' ),
        )
    );

    // Register the Testimonials Section pattern.
    register_block_pattern(
        'your-block-theme/testimonials',
        array(
            'title'       => __( 'Testimonials Section', 'your-block-theme' ),
            'description' => __( 'A section to display client testimonials or quotes for social proof.', 'your-block-theme' ),
            'categories'  => array( 'your-theme-patterns' ),
            'content'     => your_block_theme_get_pattern( 'testimonials.html' ),
        )
    );

    // Register the Recent Posts / Blog Grid pattern.
    register_block_pattern(
        'your-block-theme/recent-posts-grid',
        array(
            'title'       => __( 'Recent Posts / Blog Grid', 'your-block-theme' ),
            'description' => __( 'A grid layout displaying recent posts with featured images, titles, and excerpts.', 'your-block-theme' ),
            'categories'  => array( 'your-theme-patterns' ),
            'content'     => your_block_theme_get_pattern( 'recent-posts-grid.html' ),
        )
    );

    // Register the FAQ Section pattern.
    register_block_pattern(
        'your-block-theme/faq-section',
        array(
            'title'       => __( 'FAQ Section', 'your-block-theme' ),
            'description' => __( 'A section designed to display frequently asked questions and answers.', 'your-block-theme' ),
            'categories'  => array( 'your-theme-patterns' ),
            'content'     => your_block_theme_get_pattern( 'faq-section.html' ),
        )
    );
}
