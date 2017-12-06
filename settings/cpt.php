<?php

/*Custom Post Types Below */

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
	 * Post Type: Recipes.
	 */

	$labels = array(
		"name" => __( "Recipes", "uncode-child" ),
		"singular_name" => __( "Recipe", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Recipes", "uncode-child" ),
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
		"rewrite" => array( "slug" => "recipes", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 7,
		"menu_icon" => "dashicons-carrot",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "revisions" ),
	);

	register_post_type( "recipes", $args );

	/**
	 * Post Type: Testimonials.
	 */

	$labels = array(
		"name" => __( "Testimonials", "uncode-child" ),
		"singular_name" => __( "Testimonial", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Testimonials", "uncode-child" ),
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
		"rewrite" => array( "slug" => "testimonials", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "author" ),
	);

	register_post_type( "testimonials", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


/*Custom Post Type Taxonomies */

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
	 * Taxonomy: Expired Events.
	 */

	$labels = array(
		"name" => __( "Expired Events", "uncode-child" ),
		"singular_name" => __( "Expired Event", "uncode-child" ),
	);

	$args = array(
		"label" => __( "Expired Events", "uncode-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Expired Events",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'expired', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "expired", array( "events" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );
