<?php
// WordPress Titles
add_theme_support( 'title-tag' );

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Custom settings
function custom_settings_add_menu() {
	add_menu_page( 'Vapid Cyborg', 'Vapid Cyborg', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Custom Settings</h1>
		<form method="post" action="options.php">
				<?php
						settings_fields( 'section' );
						do_settings_sections( 'theme-options' );
						submit_button();
				?>
		</form>
	</div>
<?php }

// profile
function setting_profile() { ?>
	<input type="text" name="profile" id="profile" value="<?php echo get_option( 'profile' ); ?>" />
<?php }

// twitter
function setting_twitter() { ?>
	<input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

// github
function setting_github() { ?>
	<input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

function custom_settings_page_setup() {
	add_settings_section( 'section', 'All Settings', null, 'theme-options' );
    add_settings_field( 'profile', 'Profile Picture URL', 'setting_profile', 'theme-options', 'section' );
    add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
    add_settings_field( 'github', 'GitHub URL', 'setting_github', 'theme-options', 'section' );
    
    register_setting( 'section', 'profile' );
    register_setting( 'section', 'twitter' );
    register_setting( 'section', 'github' );
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// micro news post type
function create_micro_post() {
	register_post_type( 'micro-post',
			array(
			'labels' => array(
	'name' => __( 'Micro Post' ),
	'singular_name' => __( 'Micro Post' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
	'title',
	'editor',
	'thumbnail',
	'custom-fields'
			)
	));
}
add_action( 'init', 'create_micro_post' );