<?php
function cptui_register_my_cpts_celeb()
{

    /**
     * Post Type: Celebs.
     */

    $labels = [
        "name" => __("Celebs", "understrap-child"),
        "singular_name" => __("Celeb", "understrap-child"),
    ];

    $args = [
        "label" => __("Celebs", "understrap-child"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "celeb", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor", "thumbnail"],
        "show_in_graphql" => false,
    ];

    register_post_type("celeb", $args);
}

add_action('init', 'cptui_register_my_cpts_celeb');
