<?php
add_action('after_setup_theme', 'uncode_language_setup');
function uncode_language_setup()
{
	load_child_theme_textdomain('uncode', get_stylesheet_directory() . '/languages');
}

function theme_enqueue_styles()
{
	$production_mode = ot_get_option('_uncode_production');
	$resources_version = ($production_mode === 'on') ? null : rand();
	$parent_style = 'uncode-style';
	$child_style = array('uncode-custom-style');
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/library/css/style.css', array(), $resources_version);
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', $child_style, $resources_version);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

/*Write here your own functions */

function cptui_register_my_cpts() {

	/**
	 * Post Type: Services.
	 */

	$labels = array(
		"name" => __( "Services", "uncode-child" ),
		"singular_name" => __( "Service", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Services", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "services", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 4,
		"menu_icon" => "dashicons-store",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
		"taxonomies" => array( "service_category" ),
	);

	register_post_type( "services", $args );

	/**
	 * Post Type: Team Members.
	 */

	$labels = array(
		"name" => __( "Team Members", "uncode-child" ),
		"singular_name" => __( "Team Member", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Team Members", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "team", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 4,
		"menu_icon" => "dashicons-groups",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
	);

	register_post_type( "team", $args );

	/**
	 * Post Type: Events.
	 */

	$labels = array(
		"name" => __( "Events", "uncode-child" ),
		"singular_name" => __( "Event", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Events", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "events", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-palmtree",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
	);

	register_post_type( "events", $args );

	/**
	 * Post Type: Special Offers.
	 */

	$labels = array(
		"name" => __( "Special Offers", "uncode-child" ),
		"singular_name" => __( "Special Offer", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Special Offers", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "specials", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 6,
		"menu_icon" => "dashicons-star-filled",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
	);

	register_post_type( "specials", $args );

	/**
	 * Post Type: Recommendations.
	 */

	$labels = array(
		"name" => __( "Recommendations", "uncode-child" ),
		"singular_name" => __( "Recommendation", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Recommendations", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "recommendations", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 7,
		"menu_icon" => "dashicons-tickets-alt",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
	);

	register_post_type( "recommendations", $args );

	/**
	 * Post Type: Press Writeups.
	 */

	$labels = array(
		"name" => __( "Press Writeups", "uncode-child" ),
		"singular_name" => __( "Press Writeup", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Press Writeups", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "press", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 7,
		"menu_icon" => "dashicons-megaphone",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
	);

	register_post_type( "press", $args );

	/**
	 * Post Type: Careers.
	 */

	$labels = array(
		"name" => __( "Careers", "uncode-child" ),
		"singular_name" => __( "Career", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Careers", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "careers", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 8,
		"menu_icon" => "dashicons-businessman",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
	);

	register_post_type( "careers", $args );

	/**
	 * Post Type: Locations.
	 */

	$labels = array(
		"name" => __( "Locations", "uncode-child" ),
		"singular_name" => __( "Location", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Locations", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "locations", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 9,
		"menu_icon" => "dashicons-location",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
	);

	register_post_type( "locations", $args );

	/**
	 * Post Type: Classes.
	 */

	$labels = array(
		"name" => __( "Classes", "uncode-child" ),
		"singular_name" => __( "Class", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Classes", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "classes", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "classes", $args );

	/**
	 * Post Type: Studies.
	 */

	$labels = array(
		"name" => __( "Studies", "uncode-child" ),
		"singular_name" => __( "Study", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Studies", "uncode-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "studies", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "studies", $args );

  	/**
  	 * Post Type: Conditions.
  	 */

  	$labels = array(
  		"name" => __( "Conditions", "uncode" ),
  		"singular_name" => __( "Condition", "uncode" ),
  	);

  	$args = array(
  		"label" => __( "Conditions", "uncode" ),
  		"labels" => $labels,
  		"description" => "",
  		"public" => true,
  		"publicly_queryable" => true,
  		"show_ui" => true,
  		"show_in_rest" => false,
  		"rest_base" => "",
  		"has_archive" => false,
  		"show_in_menu" => true,
  		"exclude_from_search" => false,
  		"capability_type" => "post",
  		"map_meta_cap" => true,
  		"hierarchical" => false,
  		"rewrite" => array( "slug" => "conditions", "with_front" => true ),
  		"query_var" => true,
  		"menu_icon" => "dashicons-plus-alt",
  		"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
  		"taxonomies" => array( "service_category" ),
  	);

  	register_post_type( "conditions", $args );

  add_action( 'init', 'cptui_register_my_cpts_conditions' );
}

add_action( 'init', 'cptui_register_my_cpts' );


function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Service Categories.
	 */

	$labels = array(
		"name" => __( "Service Categories", "uncode-child" ),
		"singular_name" => __( "Service Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Service Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Service Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'service_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "service_category", array( "services" ), $args );

	/**
	 * Taxonomy: Team Member Categories.
	 */

	$labels = array(
		"name" => __( "Team Member Categories", "uncode-child" ),
		"singular_name" => __( "Team Member Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Team Member Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Team Member Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'team_member_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "team_member_category", array( "team" ), $args );

	/**
	 * Taxonomy: Event Categories.
	 */

	$labels = array(
		"name" => __( "Event Categories", "uncode-child" ),
		"singular_name" => __( "Event Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Event Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Event Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'event_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "event_category", array( "events" ), $args );

	/**
	 * Taxonomy: Special Offer Categories.
	 */

	$labels = array(
		"name" => __( "Special Offer Categories", "uncode-child" ),
		"singular_name" => __( "Special Offer Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Special Offer Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Special Offer Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'specials_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "specials_category", array( "specials" ), $args );

	/**
	 * Taxonomy: Recommendation Categories.
	 */

	$labels = array(
		"name" => __( "Recommendation Categories", "uncode-child" ),
		"singular_name" => __( "Recommendation Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Recommendation Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Recommendation Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'recommendation_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "recommendation_category", array( "recommendations" ), $args );

	/**
	 * Taxonomy: Press Writeup Categories.
	 */

	$labels = array(
		"name" => __( "Press Writeup Categories", "uncode-child" ),
		"singular_name" => __( "Press Writeup Categories", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Press Writeup Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Press Writeup Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'press_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "press_category", array( "press" ), $args );

	/**
	 * Taxonomy: Career Categories.
	 */

	$labels = array(
		"name" => __( "Career Categories", "uncode-child" ),
		"singular_name" => __( "Career Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Career Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Career Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'career_categories', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "career_categories", array( "careers" ), $args );

	/**
	 * Taxonomy: Location Categories.
	 */

	$labels = array(
		"name" => __( "Location Categories", "uncode-child" ),
		"singular_name" => __( "Location Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Location Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Location Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'location_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "location_category", array( "locations" ), $args );

	/**
	 * Taxonomy: Class Categories.
	 */

	$labels = array(
		"name" => __( "Class Categories", "uncode-child" ),
		"singular_name" => __( "Class Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Class Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Class Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'class_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "class_category", array( "classes" ), $args );

	/**
	 * Taxonomy: Resource Categories.
	 */

	$labels = array(
		"name" => __( "Resource Categories", "uncode-child" ),
		"singular_name" => __( "Resource Category", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Resource Categories", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Resource Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'resource_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "resource_category", array( "resources" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );
