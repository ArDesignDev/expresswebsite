<?php

require get_template_directory() . '/inc/custom-post-types/taxonomy.php';
require get_template_directory() . '/inc/custom-post-types/custom-admin-nav.php';

/////////////
// MAP
/////////////

// 1 DRUG POST TYPES
// - droge
// - risk
// - legislation
// - complications
// - drug description

// 2 ABOUT US POST TYPE
// - team
// - projects
// - bookstore


// 3 PARTY POST TYPE
// - music

// 4 SEKS POST TYPE
// - advicesex


// 5 TEST POST TYPES
// - results


//////////////////////////////
////// 1 Drugs post types
/////////////////////////////

// Register Custom Post Type - Vrste drog
function create_drugs_post_type() {
  $labels = array(
      'name' => _x( 'Vrste drog', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Vrste drog', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Vrste drog', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Drug:', 'text_domain' ),
      'all_items' => __( 'Vrste drog', 'text_domain' ),
      'view_item' => __( 'View Drug', 'text_domain' ),
      'add_new_item' => __( 'Add New Drug', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Drug', 'text_domain' ),
      'update_item' => __( 'Update Drug', 'text_domain' ),
      'search_items' => __( 'Search Drugs', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );
  
  $args = array(
    'label' => __( 'Drug', 'text_domain' ),
    'description' => __( 'Post type for drugs', 'text_domain' ),
    'labels' => $labels,
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'tags'),
    'taxonomies' => array( 'drug_category', 'category', 'post_tag'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => 'my-posts',
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'show_in_rest' => true,
    'rewrite' => array( 'slug' => 'droge' ), // url link
  );
  register_post_type( 'droge', $args );
}
add_action( 'init', 'create_drugs_post_type', 0 );


// Register Custom Post Type - Zdravstveni zapleti
function create_risk_post_type() {
  $labels = array(
      'name' => _x( 'Zmanjšanje tveganj', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Zmanjšanje tveganj', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Zmanjšanje tveganj', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Zmanjšanje tveganj:', 'text_domain' ),
      'all_items' => __( 'Zmanjšanje tveganj', 'text_domain' ),
      'view_item' => __( 'View Zmanjšanje tveganj', 'text_domain' ),
      'add_new_item' => __( 'Add New Zmanjšanje tveganj', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Zmanjšanje tveganj', 'text_domain' ),
      'update_item' => __( 'Update Zmanjšanje tveganj', 'text_domain' ),
      'search_items' => __( 'Search Zmanjšanje tveganjs', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );

  $args = array(
      'label' => __( 'risk', 'text_domain' ),
      'description' => __( 'Post type for Risks', 'text_domain' ),
      'labels' => $labels,
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
      'taxonomies' => array( 'category', 'post_tag'), 
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => 'my-posts', // Parent menu slug
      'menu_position' => 5,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
      'can_export' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'publicly_queryable' => true,
      'capability_type' => 'post',
      'show_in_rest' => true, // Enables Gutenberg builder support
      'rewrite' => array( 'slug' => 'zmanjsanje-tveganj' ), // url link
  );
  register_post_type( 'risk', $args );
}
add_action( 'init', 'create_risk_post_type', 0 );



// Register Custom Post Type - legislation
function create_legislation_post_type() {
  $labels = array(
      'name' => _x( 'Zakonodaja', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Zakonodaja', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Zakonodaja', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Zakonodaja:', 'text_domain' ),
      'all_items' => __( 'Zakonodaja', 'text_domain' ),
      'view_item' => __( 'View Zakonodaja', 'text_domain' ),
      'add_new_item' => __( 'Add New Zakonodaja', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Zakonodaja', 'text_domain' ),
      'update_item' => __( 'Update Zakonodaja', 'text_domain' ),
      'search_items' => __( 'Search Zakonodaja', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );

  $args = array(
      'label' => __( 'legislation', 'text_domain' ),
      'description' => __( 'Post type for Legislations', 'text_domain' ),
      'labels' => $labels,
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
      'taxonomies' => array( 'category', 'post_tag'), 
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => 'my-posts', // Parent menu slug
      'menu_position' => 5,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
      'can_export' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'publicly_queryable' => true,
      'capability_type' => 'post',
      'show_in_rest' => true, // Enables Gutenberg builder support
      'rewrite' => array( 'slug' => 'zakonodaja' ), // url link
  );
  register_post_type( 'legislation', $args );
}
add_action( 'init', 'create_legislation_post_type', 0 );


// Register Custom Post Type - complications
function create_complications_post_type() {
  $labels = array(
      'name' => _x( 'Zdravstveni zapleti', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Zdravstveni zapleti', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Zdravstveni zapleti', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Zdravstveni zapleti:', 'text_domain' ),
      'all_items' => __( 'Zdravstveni zapleti', 'text_domain' ),
      'view_item' => __( 'View Zdravstveni zapleti', 'text_domain' ),
      'add_new_item' => __( 'Add New Zdravstveni zapleti', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Zdravstveni zapleti', 'text_domain' ),
      'update_item' => __( 'Update Zdravstveni zapleti', 'text_domain' ),
      'search_items' => __( 'Search Zdravstveni zapleti', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );

  $args = array(
      'label' => __( 'complications', 'text_domain' ),
      'description' => __( 'Post type for complicationss', 'text_domain' ),
      'labels' => $labels,
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
      'taxonomies' => array( 'category', 'post_tag'), 
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => 'my-posts', // Parent menu slug
      'menu_position' => 5,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
      'can_export' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'publicly_queryable' => true,
      'capability_type' => 'post',
      'show_in_rest' => true, // Enables Gutenberg builder support
      'rewrite' => array( 'slug' => 'zdravstveni-zapleti' ), // url link
  );
  register_post_type( 'complications', $args );
}
add_action( 'init', 'create_complications_post_type', 0 );


// Register Custom Post Type - drug description
function create_drugdescriptio_post_type() {
  $labels = array(
      'name' => _x( 'Opisi podstrani', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Opisi', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Opisi podstrani', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Opisi:', 'text_domain' ),
      'all_items' => __( 'Opisi', 'text_domain' ),
      'view_item' => __( 'View Opisi', 'text_domain' ),
      'add_new_item' => __( 'Add New Opisi', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Opisi', 'text_domain' ),
      'update_item' => __( 'Update Opisi', 'text_domain' ),
      'search_items' => __( 'Search Opisi', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );

  $args = array(
      'label' => __( 'drugdescription', 'text_domain' ),
      'description' => __( 'Post type for Drug Description', 'text_domain' ),
      'labels' => $labels,
      'supports' => array( 'title', 'editor', 'revisions' ),
      'taxonomies' => array( 'drugs_sub'), 
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true, // Parent menu slug
      'menu_position' => 24,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
      'can_export' => true,
      'has_archive' => false,
      'exclude_from_search' => false,
      'publicly_queryable' => false,
      'capability_type' => 'post',
      'show_in_rest' => true, // Enables Gutenberg builder support
      'rewrite' => array( 'slug' => 'drug-description' ), // url link
  );
  register_post_type( 'drugdescription', $args );
}
add_action( 'init', 'create_drugdescriptio_post_type', 0 );


//////////////////////////////
////// 2 ABOUT US POST TYPES
/////////////////////////////


// Register Custom Post Type - Team
function create_team_post_type() {
  $labels = array(
      'name' => _x( 'Ekipa', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Ekipa', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Ekipa', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Ekipa:', 'text_domain' ),
      'all_items' => __( 'Ekipa', 'text_domain' ),
      'view_item' => __( 'View Ekipa', 'text_domain' ),
      'add_new_item' => __( 'Add New Ekipa', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Ekipa', 'text_domain' ),
      'update_item' => __( 'Update Ekipa', 'text_domain' ),
      'search_items' => __( 'Search Ekipa', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );
  
  $args = array(
    'label' => __( 'Ekipa', 'text_domain' ),
    'description' => __( 'Post type for Ekipa', 'text_domain' ),
    'labels' => $labels,
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'tags'),
    'taxonomies' => array( 'team_category', 'category', 'post_tag'), 
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => 'about_nav',
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'show_in_rest' => true,
    'rewrite' => array( 'slug' => 'ekipa' ), // url link
  );
  register_post_type( 'team', $args );
}
add_action( 'init', 'create_team_post_type', 0 );

// Register Custom Post Type - Programi in projekti
function create_projects_post_type() {
  $labels = array(
      'name' => _x( 'Programi in projekti', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Programi in projekti', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Programi in projekti', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Programi in projekti:', 'text_domain' ),
      'all_items' => __( 'Programi in projekti', 'text_domain' ),
      'view_item' => __( 'View Programi in projekti', 'text_domain' ),
      'add_new_item' => __( 'Add New Programi in projekti', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Programi in projekti', 'text_domain' ),
      'update_item' => __( 'Update Programi in projekti', 'text_domain' ),
      'search_items' => __( 'Search Programi in projekti', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );
  
  $args = array(
    'label' => __( 'Programi in projekti', 'text_domain' ),
    'description' => __( 'Post type for Programi in projekti', 'text_domain' ),
    'labels' => $labels,
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'tags'),
    'taxonomies' => array(), 
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => 'about_nav',
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'show_in_rest' => true,
    'rewrite' => array( 'slug' => 'programi-in-projekti' ), // url link
  );
  register_post_type( 'projects', $args );
}
add_action( 'init', 'create_projects_post_type', 0 );


// Register Custom Post Type - Knjižnica
function create_bookstore_post_type() {
  $labels = array(
      'name' => _x( 'Knjižnica', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Knjižnica', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Knjižnica', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Knjižnica:', 'text_domain' ),
      'all_items' => __( 'Knjižnica', 'text_domain' ),
      'view_item' => __( 'View Knjižnica', 'text_domain' ),
      'add_new_item' => __( 'Add New Knjižnica', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Knjižnica', 'text_domain' ),
      'update_item' => __( 'Update Knjižnica', 'text_domain' ),
      'search_items' => __( 'Search Knjižnica', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );
  
  $args = array(
    'label' => __( 'Knjižnica', 'text_domain' ),
    'description' => __( 'Post type for Knjižnica', 'text_domain' ),
    'labels' => $labels,
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'tags'),
    'taxonomies' => array( 'bookstore_category', 'category', 'post_tag'), 
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => 'about_nav',
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'show_in_rest' => true,
    'rewrite' => array( 'slug' => 'knjižnica' ), // url link
  );
  register_post_type( 'bookstore', $args );
}
add_action( 'init', 'create_bookstore_post_type', 0 );

//////////////////////////////
////// 3 PARTY POST TYPES
/////////////////////////////


// Register Custom Post Type - music
function create_music_post_type() {
  $labels = array(
      'name' => _x( 'Glasba', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Glasba', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Glasba', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Glasba:', 'text_domain' ),
      'all_items' => __( 'Glasba', 'text_domain' ),
      'view_item' => __( 'View Glasba', 'text_domain' ),
      'add_new_item' => __( 'Add New Glasba', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Glasba', 'text_domain' ),
      'update_item' => __( 'Update Glasba', 'text_domain' ),
      'search_items' => __( 'Search Glasba', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );
  
  $args = array(
    'label' => __( 'Glasba', 'text_domain' ),
    'description' => __( 'Post type for Glasba', 'text_domain' ),
    'labels' => $labels,
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'tags'),
    'taxonomies' => array( 'music_category', 'category', 'post_tag'), 
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => 'party_nav',
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'show_in_rest' => true,
    'rewrite' => array( 'slug' => 'glasba' ), // url link
  );
  register_post_type( 'music', $args );
}
add_action( 'init', 'create_music_post_type', 0 );


// Register Custom Post Type - experiences
function create_experiences_post_type() {
  $labels = array(
      'name' => _x( 'Izkušnje uporabnikov', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Izkušnje uporabnikov', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Izkušnje uporabnikov', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Izkušnje uporabnikov:', 'text_domain' ),
      'all_items' => __( 'Izkušnje uporabnikov', 'text_domain' ),
      'view_item' => __( 'View Izkušnje uporabnikov', 'text_domain' ),
      'add_new_item' => __( 'Add New Izkušnje uporabnikov', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Izkušnje uporabnikov', 'text_domain' ),
      'update_item' => __( 'Update Izkušnje uporabnikov', 'text_domain' ),
      'search_items' => __( 'Search Izkušnje uporabnikov', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );
  
  $args = array(
    'label' => __( 'Izkušnje uporabnikov', 'text_domain' ),
    'description' => __( 'Post type for Izkušnje uporabnikov', 'text_domain' ),
    'labels' => $labels,
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'tags'),
    'taxonomies' => array( 'experiences_category', 'category', 'post_tag'), 
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => 'party_nav',
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'show_in_rest' => true,
    'rewrite' => array( 'slug' => 'izkusnje-uporabnikov' ), // url link
  );
  register_post_type( 'experiences', $args );
}
add_action( 'init', 'create_experiences_post_type', 0 );

// Register Custom Post Type - lessrisk
function create_lessrisk_post_type() {
  $labels = array(
      'name' => _x( 'Manj tvegana zabava', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Manj tvegana zabava', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Manj tvegana zabava', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Manj tvegana zabava:', 'text_domain' ),
      'all_items' => __( 'Manj tvegana zabava', 'text_domain' ),
      'view_item' => __( 'View Manj tvegana zabava', 'text_domain' ),
      'add_new_item' => __( 'Add New Manj tvegana zabava', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Manj tvegana zabava', 'text_domain' ),
      'update_item' => __( 'Update Manj tvegana zabava', 'text_domain' ),
      'search_items' => __( 'Search Manj tvegana zabava', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );
  
  $args = array(
    'label' => __( 'Manj tvegana zabava', 'text_domain' ),
    'description' => __( 'Post type for Manj tvegana zabava', 'text_domain' ),
    'labels' => $labels,
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'tags'),
    'taxonomies' => array('category', 'post_tag'), 
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => 'party_nav',
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'show_in_rest' => true,
    'rewrite' => array( 'slug' => 'manj-tvegana-zabava' ), // url link
  );
  register_post_type( 'lessrisk', $args );
}
add_action( 'init', 'create_lessrisk_post_type', 0 );




//////////////////////////////
////// 4 SEX POST TYPES
/////////////////////////////


// Register Custom Post Type - advicesex
function create_advicesex_post_type() {
  $labels = array(
      'name' => _x( 'Seks nasveti', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Seks nasveti', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Seks nasveti', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Seks nasveti:', 'text_domain' ),
      'all_items' => __( 'Seks nasveti', 'text_domain' ),
      'view_item' => __( 'View Seks nasveti', 'text_domain' ),
      'add_new_item' => __( 'Add New Seks nasveti', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Seks nasveti', 'text_domain' ),
      'update_item' => __( 'Update Seks nasveti', 'text_domain' ),
      'search_items' => __( 'Search Seks nasveti', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );
  
  $args = array(
    'label' => __( 'Seks nasveti', 'text_domain' ),
    'description' => __( 'Post type for Seks nasveti', 'text_domain' ),
    'labels' => $labels,
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'tags'),
    'taxonomies' => array('category', 'post_tag'), 
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => 'seks_nav',
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'show_in_rest' => true,
    'rewrite' => array( 'slug' => 'nasveti-za-varen-seks' ), // url link
  );
  register_post_type( 'advicesex', $args );
}
add_action( 'init', 'create_advicesex_post_type', 0 );


//////////////////////////////
////// 5 TEST POST TYPES
/////////////////////////////

// Register Custom Post Type - results
function create_results_post_type() {
  $labels = array(
      'name' => _x( 'Rezultati & opozorila', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Rezultati & opozorila', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Rezultati & opozorila', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Rezultati & opozorila:', 'text_domain' ),
      'all_items' => __( 'Rezultati & opozorila', 'text_domain' ),
      'view_item' => __( 'View Rezultati & opozorila', 'text_domain' ),
      'add_new_item' => __( 'Add New Rezultati & opozorila', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Rezultati & opozorila', 'text_domain' ),
      'update_item' => __( 'Update Rezultati & opozorila', 'text_domain' ),
      'search_items' => __( 'Search Rezultati & opozorila', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );
  
  $args = array(
    'label' => __( 'Rezultati & opozorila', 'text_domain' ),
    'description' => __( 'Post type for Rezultati & opozorila', 'text_domain' ),
    'labels' => $labels,
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'tags'),
    'taxonomies' => array('results_category'), 
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => 'testiranje_nav',
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'show_in_rest' => true,
    'rewrite' => array( 'slug' => 'rezultati-in-opozorila' ), // url link
  );

  register_post_type( 'results', $args );
}

add_action( 'init', 'create_results_post_type', 0 );


//////////////////////////////
////// 6 Counseling POST TYPES
/////////////////////////////


// Register Custom Post Type - counseling
function create_counseling_post_type() {
  $labels = array(
      'name' => _x( 'Svetovanje', 'Post Type General Name', 'text_domain' ),
      'singular_name' => _x( 'Svetovanje', 'Post Type Singular Name', 'text_domain' ),
      'menu_name' => __( 'Svetovanje', 'text_domain' ),
      'parent_item_colon' => __( 'Parent Svetovanje:', 'text_domain' ),
      'all_items' => __( 'Svetovanje', 'text_domain' ),
      'view_item' => __( 'View Svetovanje', 'text_domain' ),
      'add_new_item' => __( 'Add New Svetovanje', 'text_domain' ),
      'add_new' => __( 'Add New', 'text_domain' ),
      'edit_item' => __( 'Edit Svetovanje', 'text_domain' ),
      'update_item' => __( 'Update Svetovanje', 'text_domain' ),
      'search_items' => __( 'Search Svetovanje', 'text_domain' ),
      'not_found' => __( 'Not found', 'text_domain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
  );
  
  $args = array(
    'label' => __( 'Svetovanje', 'text_domain' ),
    'description' => __( 'Post type for Svetovanje', 'text_domain' ),
    'labels' => $labels,
    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'tags'),
    'taxonomies' => array( 'counseling_category', 'category', 'post_tag'), 
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => 'svetovanje_nav',
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'show_in_rest' => true,
    'rewrite' => array( 'slug' => 'svetovanje' ), // url link
  );
  register_post_type( 'counseling', $args );
}
add_action( 'init', 'create_counseling_post_type', 0 );