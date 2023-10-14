<?php
//2. parameter zum übernehmen des Stylesheets, 3. Die Dependencies, 4. Version Nummer, 5.
//Versionnummer muss bei jeder Änderung actualisiert werden, es kann stattdessen microtime() während der Entwicklung genutzt werden, was die Versions-Nummer bei jedem Aufruf ändert.
function tv_setup() {
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'),NULL, microtime(), true);
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap');
    wp_enqueue_style('fontawesome','https://kit.fontawesome.com/15d7c529f1.js');

}

add_action('wp_enqueue_scripts', 'tv_setup');       //Hier wird festgelegt, wann die Funktion ausgeführt werden soll und wie die Funktion heißt

// html theme support
function tv_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form','search-form')
    );
}

add_action('after-setup_theme', 'gt-init');

function tv_custom_post_type() {
    register_post_type('project',
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                    'name'=>'Projects',
                    'singular_name'=> 'Project',
                    'add_new_item' => 'Add New Project',
                    'edit-item' => 'Edit Project'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
            )
            );
}

add_action('init', 'tv_custom_post_type');

