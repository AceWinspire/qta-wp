<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/AceWinspire
 * @since             1.0.0
 * @package           Qtest_builder
 *
 * @wordpress-plugin
 * Plugin Name:       qtest_services
 * Plugin URI:        https://github.com/AceWinspire
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Aleksandar Vojinovic
 * Author URI:        https://github.com/AceWinspire
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       qtest_builder
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('QTEST_BUILDER_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-qtest_builder-activator.php
 */
function activate_qtest_builder()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-qtest_builder-activator.php';
	Qtest_builder_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-qtest_builder-deactivator.php
 */
function deactivate_qtest_builder()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-qtest_builder-deactivator.php';
	Qtest_builder_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_qtest_builder');
register_deactivation_hook(__FILE__, 'deactivate_qtest_builder');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-qtest_builder.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_qtest_builder()
{
	$plugin = new Qtest_builder();
	$plugin->run();
}
// Services
function qtest_services()
{
	$labels = array(
		'name'                  => _x('Services', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Service', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Services', 'text_domain'),
		'name_admin_bar'        => __('service', 'text_domain'),
		'parent_item_colon'     => __('Parent service:', 'text_domain'),
		'all_items'             => __('All services', 'text_domain'),
		'add_new_item'          => __('Add New service', 'text_domain'),
		'add_new'               => __('Add New service', 'text_domain'),
		'new_item'              => __('New item', 'text_domain'),
		'edit_item'             => __('Edit item', 'text_domain'),
		'update_item'           => __('Update item', 'text_domain'),
		'view_item'             => __('View item', 'text_domain'),
		'search_items'          => __('Search Services', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'items_list'            => __('Items list', 'text_domain'),
		'items_list_navigation' => __('Items list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter items list', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Item', 'text_domain'),
		'description'           => __('Item post type.', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'taxonomies'            => array('UI', 'Branding', 'Graphics'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-dashboard',
		'query_var' 			=> true,
		'rewrite' 				=> true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type('ourservices', $args);
}
add_action('init', 'qtest_services', 0);

//Services-type
function types_services()
{
	$labels = array(
		'name'                       => _x('Type of Service', 'Taxonomy General Name', 'text_domain'),
		'singular_name'              => _x('type_service', 'Taxonomy Singular Name', 'text_domain'),
		'menu_name'                  => __('Type of service', 'text_domain'),
		'all_items'                  => __('All Items', 'text_domain'),
		'parent_item'                => __('Parent Item', 'text_domain'),
		'parent_item_colon'          => __('Parent Item:', 'text_domain'),
		'new_item_name'              => __('New Item Name', 'text_domain'),
		'add_new_item'               => __('Add New Item', 'text_domain'),
		'edit_item'                  => __('Edit Item', 'text_domain'),
		'update_item'                => __('Update Item', 'text_domain'),
		'view_item'                  => __('View Item', 'text_domain'),
		'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
		'add_or_remove_items'        => __('Add or remove items', 'text_domain'),
		'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
		'popular_items'              => __('Popular Items', 'text_domain'),
		'search_items'               => __('Search Items', 'text_domain'),
		'not_found'                  => __('Not Found', 'text_domain'),
		'items_list'                 => __('Items list', 'text_domain'),
		'items_list_navigation'      => __('Items list navigation', 'text_domain'),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'supports'              	 => array('title', 'editor', 'thumbnail'),
		'capability_type'       	 => 'post',
	);
	register_taxonomy('type_service', array('ourservices'), $args);
}
add_action('init', 'types_services', 0);

function qtest_recent_work()
{
	$labels = array(
		'name'                  => _x('recentwork', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('recentwork', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Recent Work', 'text_domain'),
		'name_admin_bar'        => __('recentwork', 'text_domain'),
		'parent_item_colon'     => __('Parent item:', 'text_domain'),
		'all_items'             => __('All items', 'text_domain'),
		'add_new_item'          => __('Add New Work', 'text_domain'),
		'add_new'               => __('Add New Work', 'text_domain'),
		'new_item'              => __('New item', 'text_domain'),
		'edit_item'             => __('Edit item', 'text_domain'),
		'update_item'           => __('Update item', 'text_domain'),
		'view_item'             => __('View item', 'text_domain'),
		'search_items'          => __('Search recentwork', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'items_list'            => __('Items list', 'text_domain'),
		'items_list_navigation' => __('Items list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter items list', 'text_domain'),

	);
	$args = array(
		'label'                 => __('Item', 'text_domain'),
		'description'           => __('Item post type.', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-dashboard',
		'query_var' 			=> true,
		'rewrite' 				=> true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',

	);
	register_post_type('recentwork', $args);
}
add_action('init', 'qtest_recent_work', 1);

function qtest_ourteam()
{
	$labels = array(
		'name'                  => _x('ourteam', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('ourtem', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Our Team', 'text_domain'),
		'name_admin_bar'        => __('ourteam', 'text_domain'),
		'parent_item_colon'     => __('Parent item:', 'text_domain'),
		'all_items'             => __('All members', 'text_domain'),
		'add_new_item'          => __('Add New member', 'text_domain'),
		'add_new'               => __('Add New member', 'text_domain'),
		'new_item'              => __('New member', 'text_domain'),
		'edit_item'             => __('Edit member', 'text_domain'),
		'update_item'           => __('Update member', 'text_domain'),
		'view_item'             => __('View member', 'text_domain'),
		'search_items'          => __('Search members', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'items_list'            => __('Items list', 'text_domain'),
		'items_list_navigation' => __('Items list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter items list', 'text_domain'),

	);
	$args = array(
		'label'                 => __('Item', 'text_domain'),
		'description'           => __('Item post type.', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-dashboard',
		'query_var' 			=> true,
		'rewrite' 				=> true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type('ourteam', $args); //ovde car zeza
}
add_action('init', 'qtest_ourteam', 2);

run_qtest_builder();