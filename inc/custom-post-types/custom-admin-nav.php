<?php 

function custom_post_types_admin_menu() {
  // Add a new top-level menu
  add_menu_page(
      'Droge',
      'Droge',
      'manage_options',
      'my-posts',
      '',
      'dashicons-smiley',
      20
  );

  // Add submenu for 'Drug Categories'
 /*
  add_submenu_page(
      'my-posts',
      'Drugsub-DEV',
      'Drugsub-DEV',
      'manage_options',
      'edit-tags.php?taxonomy=drugs_sub'
  );
*/
/*
  // Add submenu for 'Risk Categories'
  add_submenu_page(
      'my-posts',
      'Risk Categories',
      'Risk Categories',
      'manage_options',
      'edit-tags.php?taxonomy=risk_category'
  );
  */
  
}

add_action('admin_menu', 'custom_post_types_admin_menu');


function custom_post_types_admin_menu_party() {
  // Add a new top-level menu
  add_menu_page(
      'Party',
      'Party',
      'manage_options',
      'party_nav',
      '',
      'dashicons-buddicons-groups',
      20
  );

}

add_action('admin_menu', 'custom_post_types_admin_menu_party');

function custom_post_types_admin_menu_seks() {
  // Add a new top-level menu
  add_menu_page(
      'Seks',
      'Seks',
      'manage_options',
      'seks_nav',
      '',
      'dashicons-heart',
      20
  );

}

add_action('admin_menu', 'custom_post_types_admin_menu_seks');


function custom_post_types_admin_menu_svetovanje() {
  // Add a new top-level menu
  add_menu_page(
      'Svetovanje',
      'Svetovanje',
      'manage_options',
      'svetovanje_nav',
      '',
      'dashicons-lightbulb',
      20
  );

}

add_action('admin_menu', 'custom_post_types_admin_menu_svetovanje');

function custom_post_types_admin_menu_testiranje() {
  // Add a new top-level menu
  add_menu_page(
      'Testiranje',
      'Testiranje',
      'manage_options',
      'testiranje_nav',
      '',
      'dashicons-color-picker',
      20
  );

}

add_action('admin_menu', 'custom_post_types_admin_menu_testiranje');

function custom_post_types_admin_menu_about() {
  // Add a new top-level menu
  add_menu_page(
      'O nas',
      'O nas',
      'manage_options',
      'about_nav',
      '',
      'dashicons-id',
      20
  );

  // Add submenu for 'Drug Categories'
  /*
  add_submenu_page(
      'about_nav',
      'Drugsub-DEV2',
      'Drugsub-DEV2',
      'manage_options',
      'edit-tags.php?taxonomy=drugs_sub'
  );
 */ 
}

add_action('admin_menu', 'custom_post_types_admin_menu_about');
