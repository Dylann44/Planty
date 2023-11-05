<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(),
   filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
function add_admin_button_to_menu($items, $args) {
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        $admin_url = admin_url();
        $admin_button = '<li id="admin-button" class="menu-item"><a href="' . $admin_url . '">Admin</a></li>';
        
        $menu_items = explode('</li>', $items);
        $middle_position = floor(count($menu_items) / 2);

        array_splice($menu_items, $middle_position, 0, $admin_button);

        $items = implode('</li>', $menu_items);
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'add_admin_button_to_menu', 10, 2);
