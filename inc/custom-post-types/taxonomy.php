<?php
// custom post type categories
function register_drug_taxonomy() {
  $labels = array(
      'name'              => _x( 'Kategorija droge', 'taxonomy general name', 'text_domain' ),
      'singular_name'     => _x( 'Kategorija droge', 'taxonomy singular name', 'text_domain' ),
      'search_items'      => __( 'Search Drug Categories', 'text_domain' ),
      'all_items'         => __( 'All Drug Categories', 'text_domain' ),
      'parent_item'       => __( 'Parent Drug Category', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Drug Category:', 'text_domain' ),
      'edit_item'         => __( 'Edit Drug Category', 'text_domain' ),
      'update_item'       => __( 'Update Drug Category', 'text_domain' ),
      'add_new_item'      => __( 'Add New Drug Category', 'text_domain' ),
      'new_item_name'     => __( 'New Drug Category Name', 'text_domain' ),
      'menu_name'         => __( 'Kategorija droge', 'text_domain' ),
  );

  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array( 'slug' => 'kategorija-droge' ),
  );

  register_taxonomy( 'drug_category', array( 'drug' ), $args );
}
add_action( 'init', 'register_drug_taxonomy', 0 );

function register_drugdsub_taxonomy() {
  $labels = array(
      'name'              => _x( 'Kategorija', 'taxonomy general name', 'text_domain' ),
      'singular_name'     => _x( 'Kategorija', 'taxonomy singular name', 'text_domain' ),
      'search_items'      => __( 'Search Kategorija', 'text_domain' ),
      'all_items'         => __( 'All Kategorija', 'text_domain' ),
      'parent_item'       => __( 'Parent Kategorija', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Kategorija:', 'text_domain' ),
      'edit_item'         => __( 'Edit Kategorija', 'text_domain' ),
      'update_item'       => __( 'Update Kategorija', 'text_domain' ),
      'add_new_item'      => __( 'Add New Kategorija', 'text_domain' ),
      'new_item_name'     => __( 'New Kategorija Name', 'text_domain' ),
      'menu_name'         => __( 'Kategorija', 'text_domain' ),
  );

  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array( 'slug' => 'drug-desc' ),
  );

  register_taxonomy( 'drugs_sub', array( 'drugs' ), $args );
}
add_action( 'init', 'register_drugdsub_taxonomy', 0 );

// Team
function register_team_taxonomy() {
  $labels = array(
      'name'              => _x( 'Team Categories', 'taxonomy general name', 'text_domain' ),
      'singular_name'     => _x( 'Team Category', 'taxonomy singular name', 'text_domain' ),
      'search_items'      => __( 'Search Team Categories', 'text_domain' ),
      'all_items'         => __( 'All Team Categories', 'text_domain' ),
      'parent_item'       => __( 'Parent Team Category', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Team Category:', 'text_domain' ),
      'edit_item'         => __( 'Edit Team Category', 'text_domain' ),
      'update_item'       => __( 'Update Team Category', 'text_domain' ),
      'add_new_item'      => __( 'Add New Team Category', 'text_domain' ),
      'new_item_name'     => __( 'New Team Category Name', 'text_domain' ),
      'menu_name'         => __( 'Team Category', 'text_domain' ),
  );

  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array( 'slug' => 'kategorija-ekipa' ),
  );

  register_taxonomy( 'team_category', array( 'team' ), $args );
}
add_action( 'init', 'register_team_taxonomy', 0 );

// Team
function register_bookstore_taxonomy() {
  $labels = array(
      'name'              => _x( 'Knjižnica Categories', 'taxonomy general name', 'text_domain' ),
      'singular_name'     => _x( 'Knjižnica Category', 'taxonomy singular name', 'text_domain' ),
      'search_items'      => __( 'Search Knjižnica Categories', 'text_domain' ),
      'all_items'         => __( 'All Knjižnica Categories', 'text_domain' ),
      'parent_item'       => __( 'Parent Knjižnica Category', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Knjižnica Category:', 'text_domain' ),
      'edit_item'         => __( 'Edit Knjižnica Category', 'text_domain' ),
      'update_item'       => __( 'Update Knjižnica Category', 'text_domain' ),
      'add_new_item'      => __( 'Add New Knjižnica Category', 'text_domain' ),
      'new_item_name'     => __( 'New Knjižnica Category Name', 'text_domain' ),
      'menu_name'         => __( 'Knjižnica Category', 'text_domain' ),
  );

  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array( 'slug' => 'kategorija-knjižnica' ),
  );

  register_taxonomy( 'bookstore_category', array( 'bookstore' ), $args );
}
add_action( 'init', 'register_bookstore_taxonomy', 0 );



// Music
function register_music_taxonomy() {
  $labels = array(
      'name'              => _x( 'Music Categories', 'taxonomy general name', 'text_domain' ),
      'singular_name'     => _x( 'Music Category', 'taxonomy singular name', 'text_domain' ),
      'search_items'      => __( 'Search Music Categories', 'text_domain' ),
      'all_items'         => __( 'All Music Categories', 'text_domain' ),
      'parent_item'       => __( 'Parent Music Category', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Music Category:', 'text_domain' ),
      'edit_item'         => __( 'Edit Music Category', 'text_domain' ),
      'update_item'       => __( 'Update Music Category', 'text_domain' ),
      'add_new_item'      => __( 'Add New Music Category', 'text_domain' ),
      'new_item_name'     => __( 'New Music Category Name', 'text_domain' ),
      'menu_name'         => __( 'Music Category', 'text_domain' ),
  );

  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array( 'slug' => 'kategorija-glasba' ),
  );

  register_taxonomy( 'music_category', array( 'music' ), $args );
}
add_action( 'init', 'register_music_taxonomy', 0 );

// results
function register_results_taxonomy() {
  $labels = array(
      'name'              => _x( 'Results Categories', 'taxonomy general name', 'text_domain' ),
      'singular_name'     => _x( 'Results Category', 'taxonomy singular name', 'text_domain' ),
      'search_items'      => __( 'Search Results Categories', 'text_domain' ),
      'all_items'         => __( 'All Results Categories', 'text_domain' ),
      'parent_item'       => __( 'Parent Results Category', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Results Category:', 'text_domain' ),
      'edit_item'         => __( 'Edit Results Category', 'text_domain' ),
      'update_item'       => __( 'Update Results Category', 'text_domain' ),
      'add_new_item'      => __( 'Add New Results Category', 'text_domain' ),
      'new_item_name'     => __( 'New Results Category Name', 'text_domain' ),
      'menu_name'         => __( 'Results Category', 'text_domain' ),
  );

  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array( 'slug' => 'kategorija-rezultati' ),
  );

  register_taxonomy( 'results_category', array( 'results' ), $args );
}
add_action( 'init', 'register_results_taxonomy', 0 );

// risk
function register_risk_taxonomy() {
  $labels = array(
      'name'              => _x( 'Risk Categories', 'taxonomy general name', 'text_domain' ),
      'singular_name'     => _x( 'Risk Category', 'taxonomy singular name', 'text_domain' ),
      'search_items'      => __( 'Search Risk Categories', 'text_domain' ),
      'all_items'         => __( 'All Risk Categories', 'text_domain' ),
      'parent_item'       => __( 'Parent Risk Category', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Risk Category:', 'text_domain' ),
      'edit_item'         => __( 'Edit Risk Category', 'text_domain' ),
      'update_item'       => __( 'Update Risk Category', 'text_domain' ),
      'add_new_item'      => __( 'Add New Risk Category', 'text_domain' ),
      'new_item_name'     => __( 'New Risk Category Name', 'text_domain' ),
      'menu_name'         => __( 'Risk Category', 'text_domain' ),
  );

  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array( 'slug' => 'kategorija-tveganja' ),
  );

  register_taxonomy( 'risk_category', array( 'risk' ), $args );
}

add_action( 'init', 'register_risk_taxonomy', 0 );


// experiences
function register_experiences_taxonomy() {
  $labels = array(
      'name'              => _x( 'Izkušnje Categories', 'taxonomy general name', 'text_domain' ),
      'singular_name'     => _x( 'Izkušnje Category', 'taxonomy singular name', 'text_domain' ),
      'search_items'      => __( 'Search Izkušnje Categories', 'text_domain' ),
      'all_items'         => __( 'All Izkušnje Categories', 'text_domain' ),
      'parent_item'       => __( 'Parent Izkušnje Category', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Izkušnje Category:', 'text_domain' ),
      'edit_item'         => __( 'Edit Izkušnje Category', 'text_domain' ),
      'update_item'       => __( 'Update Izkušnje Category', 'text_domain' ),
      'add_new_item'      => __( 'Add New Izkušnje Category', 'text_domain' ),
      'new_item_name'     => __( 'New Izkušnje Category Name', 'text_domain' ),
      'menu_name'         => __( 'Izkušnje Category', 'text_domain' ),
  );

  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array( 'slug' => 'kategorija-izkusnje' ),
  );

  register_taxonomy( 'experiences_category', array( 'experiences' ), $args );
}

add_action( 'init', 'register_experiences_taxonomy', 0 );



// counseling
function register_counseling_taxonomy() {
  $labels = array(
      'name'              => _x( 'Svetovanje Categories', 'taxonomy general name', 'text_domain' ),
      'singular_name'     => _x( 'Svetovanje Category', 'taxonomy singular name', 'text_domain' ),
      'search_items'      => __( 'Search Svetovanje Categories', 'text_domain' ),
      'all_items'         => __( 'All Svetovanje Categories', 'text_domain' ),
      'parent_item'       => __( 'Parent Svetovanje Category', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Svetovanje Category:', 'text_domain' ),
      'edit_item'         => __( 'Edit Svetovanje Category', 'text_domain' ),
      'update_item'       => __( 'Update Svetovanje Category', 'text_domain' ),
      'add_new_item'      => __( 'Add New Svetovanje Category', 'text_domain' ),
      'new_item_name'     => __( 'New Svetovanje Category Name', 'text_domain' ),
      'menu_name'         => __( 'Svetovanje Category', 'text_domain' ),
  );

  $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array( 'slug' => 'kategorija-svetovanje' ),
  );

  register_taxonomy( 'counseling_category', array( 'counseling' ), $args );
}

add_action( 'init', 'register_counseling_taxonomy', 0 );





// Register Custom Taxonomy - for now I don't need it
/*
function custom_post_type_tags() {
  $labels = array(
      'name'                       => 'Tags',
      'singular_name'              => 'Tag',
      'menu_name'                  => 'Tags',
      'all_items'                  => 'All Tags',
      'parent_item'                => 'Parent Tag',
      'parent_item_colon'          => 'Parent Tag:',
      'new_item_name'              => 'New Tag Name',
      'add_new_item'               => 'Add New Tag',
      'edit_item'                  => 'Edit Tag',
      'update_item'                => 'Update Tag',
      'view_item'                  => 'View Tag',
      'separate_items_with_commas' => 'Separate tags with commas',
      'add_or_remove_items'        => 'Add or remove tags',
      'choose_from_most_used'      => 'Choose from the most used tags',
      'popular_items'              => 'Popular Tags',
      'search_items'               => 'Search Tags',
      'not_found'                  => 'No tags found',
      'no_terms'                   => 'No tags',
      'items_list'                 => 'Tags list',
      'items_list_navigation'      => 'Tags list navigation',
  );
  $args = array(
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
  );
  register_taxonomy( 'custom_tags', array( 'droge' ), $args ); // Replace 'your_custom_post_type' with the slug of your custom post type
}
add_action( 'init', 'custom_post_type_tags', 0 );
*/