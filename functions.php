<?php
/**
 * Author: Karadaras
 * Uri: http://karadaras.com
 */
add_theme_support('post-formats', array('aside', 'gallery'));
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
register_nav_menus(array(
    'header-menu'  => 'Основное меню в заголовке',
    'sidebar-menu' => 'Меню в сайдбаре'
));

// Регистрируем картинки в хедере.
register_default_headers(array());

register_sidebar(array(
    'name' => 'Бокс виджета для меню',
    'id'   => 'menu-widget-area',
    'description'   => '',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
));

register_sidebar(array(
    'name' => 'Бокс виджета №1',
    'id'   => 'widget-1',
    'description'   => '',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
));

$custom_header_support = array(
    // The default header text color.
    'default-text-color' => '000',
    // The height and width of our custom header.
    'width' => 940,
    'height' => 383,
    // Support flexible heights.
    'flex-height' => true,
    // Random image rotation by default.
    'random-default' => true,
    // Callback for styling the header.
    'wp-head-callback' => 'header_style',
    // Callback for styling the header preview in the admin.
    'admin-head-callback' => 'admin_header_style',
    // Callback used to display the header preview in the admin.
    'admin-preview-callback' => 'admin_header_image',
);

add_theme_support( 'custom-header', $custom_header_support );

function header_style()
{

}

function admin_header_style()
{

}

function admin_header_image()
{

}