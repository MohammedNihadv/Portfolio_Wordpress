<?php

/**
* Get started notice
*/

//  Plugin Activation Start
if (!function_exists('minimalistic_portfolio_is_plugin_installed')) {
    function minimalistic_portfolio_is_plugin_installed($plugin_slug)
    {
        $plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
        return file_exists($plugin_path);
    }
}
if (!function_exists('minimalistic_portfolio_is_plugin_activated')) {
    function minimalistic_portfolio_is_plugin_activated($plugin_slug)
    {
        return is_plugin_active($plugin_slug);
    }
}

// Hook into a custom action when the button is clicked
add_action('wp_ajax_minimalistic_portfolio_install_and_activate_plugins', 'minimalistic_portfolio_install_and_activate_plugins');
add_action('wp_ajax_nopriv_minimalistic_portfolio_install_and_activate_plugins', 'minimalistic_portfolio_install_and_activate_plugins');
add_action('wp_ajax_minimalistic_portfolio_rplugin_activation', 'minimalistic_portfolio_rplugin_activation');
add_action('wp_ajax_nopriv_minimalistic_portfolio_rplugin_activation', 'minimalistic_portfolio_rplugin_activation');

// Function to install and activate the plugins



function check_plugin_installed_status($pugin_slug, $plugin_file)
{
    return file_exists(ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file) ? true : false;
}

/* Check if plugin is activated */


function check_plugin_active_status($pugin_slug, $plugin_file)
{
    return is_plugin_active($pugin_slug . '/' . $plugin_file) ? true : false;
}

require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/misc.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
// Helper function to check if all recommended plugins are installed and activated
function minimalistic_portfolio_all_plugins_active() {
    $recommended_plugins = array(
        array(
            'name' => __( 'CBX Bookmark & Favorite', 'minimalistic-portfolio' ),
            'slug' => 'cbxwpbookmark',
            'file' => 'cbxwpbookmark.php'
        ),
    );

    foreach ($recommended_plugins as $plugin) {
        $plugin_slug = $plugin['slug'];
        $plugin_file = $plugin['file'];

        // Check if the plugin is active
        if (!is_plugin_active($plugin_slug . '/' . $plugin_file)) {
            return false; // If any plugin is not active, return false
        }
    }

    return true; // All plugins are active
}

class Silent_Skin extends WP_Upgrader_Skin {
    public function header() {}
    public function footer() {}
    public function feedback($string, ...$args) {}
    public function error($errors) {}
    public function before() {}
    public function after() {}
}

// Function to install and activate plugins
function minimalistic_portfolio_install_and_activate_plugins() {
    if (!current_user_can('manage_options')) {
        return;
    }
    check_ajax_referer('minimalistic_portfolio_welcome_nonce', 'nonce');

    // Define the recommended plugins
    $recommended_plugins = array(
        array(
            'name' => __( 'Mosaic Gallery Advanced Gallery', 'minimalistic-portfolio' ),
            'slug' => 'mosaic-gallery-advanced-gallery',
            'file' => 'mosaic-image-gallery.php'
        ),
    );

    set_transient('install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10);

    require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/misc.php');
    require_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

    foreach ($recommended_plugins as $plugin) {
        $plugin_slug = $plugin['slug'];
        $plugin_file = $plugin['file'];
        $plugin_name = $plugin['name'];

        // Check if the plugin is active
        if (is_plugin_active($plugin_slug . '/' . $plugin_file)) {
            update_install_and_activate_progress($plugin_name, 'Already Active');
            continue;
        }

        // Check if the plugin is installed but not active
        if (is_minimalistic_portfolio_plugin_installed($plugin_slug)) {
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);
            if (is_wp_error($activate)) {
                update_install_and_activate_progress($plugin_name, 'Error');
                continue;
            }
            update_install_and_activate_progress($plugin_name, 'Activated');
            continue;
        }

        // Plugin is not installed or activated, proceed with installation
        update_install_and_activate_progress($plugin_name, 'Installing');

        $api = plugins_api('plugin_information', array('slug' => $plugin_slug, 'fields' => array('sections' => false)));
        if (is_wp_error($api)) {
            update_install_and_activate_progress($plugin_name, 'Error');
            continue;
        }

        $upgrader = new Plugin_Upgrader(new Silent_Skin());
        $install = $upgrader->install($api->download_link);

        if ($install) {
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);
            if (is_wp_error($activate)) {
                update_install_and_activate_progress($plugin_name, 'Error');
                continue;
            }
            update_install_and_activate_progress($plugin_name, 'Activated');
            continue;
        } else {
            update_install_and_activate_progress($plugin_name, 'Error');
        }
    }
    delete_transient('install_and_activate_progress');
    if (ob_get_length()) ob_clean();

    header('Content-Type: application/json; charset=utf-8');
    $redirect_url = admin_url('themes.php?page=minimalistic-portfolio-guide-page');
    echo json_encode([
        'success' => true,
        'data' => [
            'redirect_url' => $redirect_url,
        ],
    ]);

    wp_die();
}

// Function to check if a plugin is installed
function is_minimalistic_portfolio_plugin_installed($plugin_slug) {
    $installed_plugins = get_plugins();
    foreach ($installed_plugins as $path => $details) {
        if (strpos($path, $plugin_slug) === 0) {
            return true;
        }
    }
    return false;
}

// Function to update the installation progress
function update_install_and_activate_progress($plugin_name, $status) {
    $progress = get_transient('install_and_activate_progress');
    $progress[] = array('plugin' => $plugin_name, 'status' => $status);
    set_transient('install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10);
}

// Dismiss function for AJAX request
add_action('wp_ajax_minimalistic_portfolio_dismissed_notice_handler', 'minimalistic_portfolio_ajax_notice_dismiss_function');

function minimalistic_portfolio_ajax_notice_dismiss_function() {
    if (!wp_verify_nonce($_POST['wpnonce'], 'minimalistic_portfolio_welcome_nonce')) {
        wp_send_json_error('Invalid nonce');
        exit;
    }
    
    if (isset($_POST['type'])) {
        $minimalistic_portfolio_type = sanitize_text_field(wp_unslash($_POST['type']));
        update_option('dismissed-' . $minimalistic_portfolio_type, true);
        wp_send_json_success('Notice dismissed');
    } else {
        wp_send_json_error('Type not set');
    }
}
//  Plugin Activation End

function minimalistic_portfolio_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started_notice', FALSE ) ) {
        $minimalistic_portfolio_current_screen = get_current_screen();
			if ($minimalistic_portfolio_current_screen->id !== 'appearance_page_minimalistic-portfolio-guide-page') {
         $minimalistic_portfolio_comments_theme = wp_get_theme(); ?>
            <div class="minimalistic-portfolio-notice-wrapper updated notice notice-get-started-class is-dismissible notice-info" data-notice="get_started_notice">
			<div class="minimalistic-portfolio-notice">
				<div class="minimalistic-portfolio-notice-content">
					<div class="minimalistic-portfolio-notice-heading">
						<h2><?php esc_html_e('Thanks For Installing ','minimalistic-portfolio'); ?><?php echo esc_html( $minimalistic_portfolio_comments_theme ); ?> <?php esc_html_e('Theme','minimalistic-portfolio'); ?></h2>
					<p><?php 
                    /* translators: %s: theme name */
                    printf(esc_html__("%s is now installed and ready to use. We've provide some links to get you started.", 'minimalistic-portfolio'), $minimalistic_portfolio_comments_theme ); ?></p>
					</div>
					<div class="diplay-flex-btn">
						<a class="button button-primary button-primary theme-install" id="install-activate-button" href="#"><?php _e('GET STARTED', 'minimalistic-portfolio'); ?></a>
						<a class="button button-primary" target="_blank" href="<?php echo esc_url( MINIMALISTIC_PORTFOLIO_BUNDLE_BUY_NOW ); ?>"><?php echo esc_html__('GO TO PREMIUM','minimalistic-portfolio'); ?></a>
					</div>
				</div>
				<div class="minimalistic-portfolio-notice-img">
                    <a href="<?php echo esc_url( MINIMALISTIC_PORTFOLIO_BUNDLE_BUY_NOW ); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/notification.png'); ?>" alt="<?php esc_attr_e('logo', 'minimalistic-portfolio'); ?>"></a>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'minimalistic_portfolio_deprecated_hook_admin_notice' );

// After switching theme, reset dismissed notice option
add_action('after_switch_theme', 'minimalistic_portfolio_after_switch_theme');
function minimalistic_portfolio_after_switch_theme() {
    update_option('dismissed-get_started_notice', FALSE);
}

function minimalistic_portfolio_admin_enqueue_scripts() {
	wp_enqueue_style( 'minimalistic-portfolio-admin-style', esc_url( get_template_directory_uri() ).'/assets/css/main.css' );
    wp_localize_script( 'minimalistic-portfolio-admin-script', 'minimalistic_portfolio_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'minimalistic_portfolio_admin_enqueue_scripts' );

add_action( 'admin_menu', 'minimalistic_portfolio_getting_started' );
function minimalistic_portfolio_getting_started() {
	add_theme_page( esc_html__('Get Started', 'minimalistic-portfolio'), esc_html__('Get Started', 'minimalistic-portfolio'), 'edit_theme_options', 'minimalistic-portfolio-guide-page', 'minimalistic_portfolio_test_guide');
}

if ( ! defined( 'MINIMALISTIC_PORTFOLIO_DOCS_FREE' ) ) {
define('MINIMALISTIC_PORTFOLIO_DOCS_FREE',__('https://demo.misbahwp.com/docs/minimal-portfolio-free-docs/','minimalistic-portfolio'));
}
if ( ! defined( 'MINIMALISTIC_PORTFOLIO_DOCS_PRO' ) ) {
define('MINIMALISTIC_PORTFOLIO_DOCS_PRO',__('https://demo.misbahwp.com/docs/minimalistic-portfolio-pro-docs/','minimalistic-portfolio'));
}
if ( ! defined( 'MINIMALISTIC_PORTFOLIO_BUNDLE_BUY_NOW' ) ) {
define('MINIMALISTIC_PORTFOLIO_BUNDLE_BUY_NOW',__('https://www.misbahwp.com/products/wordpress-bundle','minimalistic-portfolio'));
}
if ( ! defined( 'MINIMALISTIC_PORTFOLIO_SUPPORT_FREE' ) ) {
define('MINIMALISTIC_PORTFOLIO_SUPPORT_FREE',__('https://wordpress.org/support/theme/minimalistic-portfolio','minimalistic-portfolio'));
}
if ( ! defined( 'MINIMALISTIC_PORTFOLIO_REVIEW_FREE' ) ) {
define('MINIMALISTIC_PORTFOLIO_REVIEW_FREE',__('https://wordpress.org/support/theme/minimalistic-portfolio/reviews/#new-post','minimalistic-portfolio'));
}
if ( ! defined( 'MINIMALISTIC_PORTFOLIO_DEMO_PRO' ) ) {
define('MINIMALISTIC_PORTFOLIO_DEMO_PRO',__('https://www.misbahwp.com/pages/all-demos','minimalistic-portfolio'));
}

function minimalistic_portfolio_test_guide() { ?>
	<?php $minimalistic_portfolio_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
            <div id="lefty-up">
                <div id="description">
                    <h3><?php esc_html_e('Welcome! Thank you for choosing ','minimalistic-portfolio'); ?><?php echo esc_html( $minimalistic_portfolio_theme ); ?>  <span><?php esc_html_e('Version: ', 'minimalistic-portfolio'); ?><?php echo esc_html($minimalistic_portfolio_theme['Version']);?></span></h3>
                    <div id="description-insidee">
                        <?php
                            $minimalistic_portfolio_theme = wp_get_theme();
                            echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $minimalistic_portfolio_theme->get( 'Description' ) ) ) );
                        ?>
                    </div>
                    <div id="admin_links">
                        <h3><?php esc_html_e('Unlock More Features With Premium Version','minimalistic-portfolio'); ?></h3>
                        <div id="admin_inside_links">
                            <a href="<?php echo esc_url( MINIMALISTIC_PORTFOLIO_BUNDLE_BUY_NOW ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Get Premium', 'minimalistic-portfolio' ) ?></a>
                            <a href="<?php echo esc_url( MINIMALISTIC_PORTFOLIO_DEMO_PRO ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Live Demo', 'minimalistic-portfolio' ); ?> </a>
                            <a class="blue-button-1" href="<?php echo esc_url( MINIMALISTIC_PORTFOLIO_BUNDLE_BUY_NOW ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'View All Themes', 'minimalistic-portfolio' ) ?></a>
                        </div>
                    </div>
                </div>
                <div id="theme-img">
                    <img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $minimalistic_portfolio_theme->get_screenshot() ); ?>" />
                    <div id="img-btm-box">
                        <h3 class="bundle-box-title"><?php esc_html_e('Get This Premium Theme at Flat 20% OFF','minimalistic-portfolio'); ?></h3>
                        <div class="bundle-info">
                            <div class="bundle-left">
                                <p class="coupon-text"><?php esc_html_e('Use Coupon Code:','minimalistic-portfolio'); ?></p>
                                <p class="coupon-code"><?php esc_html_e('HEAT20','minimalistic-portfolio'); ?></p>
                            </div>
                            <div class="bundle-right">
                                <a class="white-button" href="<?php echo esc_url( MINIMALISTIC_PORTFOLIO_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now $89.00', 'minimalistic-portfolio' ) ?><span><?php esc_html_e( '$4,799.00', 'minimalistic-portfolio' ) ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="lefty-down">
                <div id="admin_links">
                    <h3><?php esc_html_e('Important Links','minimalistic-portfolio'); ?></h3>
                    <p id="description-insidee"><?php esc_html_e('Below are some Important Link, Customize your theme, Get Support, and If you are stuck somewhere get help with the documentation','minimalistic-portfolio'); ?></p>
                    <div id="admin_inside_links">
                        <a href="<?php echo esc_url( MINIMALISTIC_PORTFOLIO_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Minimalistic Portfolio Documentation', 'minimalistic-portfolio' ) ?></a>
                        <a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize Theme', 'minimalistic-portfolio' ); ?> </a>
                        <a class="blue-button-1" href="<?php echo esc_url( MINIMALISTIC_PORTFOLIO_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Get Support', 'minimalistic-portfolio' ) ?></a>
                        <a class="blue-button-2" href="<?php echo esc_url( MINIMALISTIC_PORTFOLIO_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review Theme', 'minimalistic-portfolio' ) ?></a>
                    </div>
                </div>
            </div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle bundle"><?php esc_html_e( 'Get All Themes', 'minimalistic-portfolio' ); ?></h3>
				<div class="insidee theme-bundle">
					<img width="100%" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bundle-image.png' ); ?>" alt="<?php esc_attr_e('logo', 'minimalistic-portfolio'); ?>">
					<p class="offer"><?php esc_html_e('Get 110+ Perfect WordPress Theme In A Single Package at just $89.','minimalistic-portfolio'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 110+ WordPress Themes At 20% Off ','minimalistic-portfolio'); ?><span><?php esc_html_e('"HEAT20"','minimalistic-portfolio'); ?></span></p>
				<div id="admin_pro_linkss">
					<a class="blue-button-1" href="<?php echo esc_url( MINIMALISTIC_PORTFOLIO_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy All Themes - $89', 'minimalistic-portfolio' ) ?></a>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','minimalistic-portfolio'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','minimalistic-portfolio'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','minimalistic-portfolio'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','minimalistic-portfolio'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','minimalistic-portfolio'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','minimalistic-portfolio'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','minimalistic-portfolio'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','minimalistic-portfolio'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','minimalistic-portfolio'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','minimalistic-portfolio'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','minimalistic-portfolio'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','minimalistic-portfolio'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','minimalistic-portfolio'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>
<?php } ?>