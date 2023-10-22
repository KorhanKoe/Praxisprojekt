<?php
// adding the CSS and JS files
//Versionnummer muss bei jeder Änderung actualisiert werden, es kann stattdessen microtime() während der Entwicklung genutzt werden, was die Versions-Nummer bei jedem Aufruf ändert.
function tv_setup() {
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime()); //1. parameter ist der Name der Datei 2. parameter zum übernehmen des Stylesheets, 3. Die Dependencies, 4. Version Nummer
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'),NULL, microtime(), true);   //dasselbe für javascript
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap');   //die fonts vont html übernehmen
    wp_enqueue_style('fontawesome','https://kit.fontawesome.com/15d7c529f1.js');    

}

add_action('wp_enqueue_scripts', 'tv_setup');       //Hier wird festgelegt, wann die Funktion ausgeführt werden soll und wie die Funktion heißt

// html theme support
function tv_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');      // für die Tab Schrift
    add_theme_support('html5',
        array('comment-list', 'comment-form','search-form')     //hier soll html5 implementiert werden
    );
}

add_action('after-setup_theme', 'tv-init');

//projects post type

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
            'has_archive' => true,      //ermöglicht das Nutzen von archives
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
            )
            );
}

add_action('init', 'tv_custom_post_type');      //um die Function zu starten

if(isset($_POST['submitbtn'])) {        //checked den submit button
    $data = array(                      //falls ja, werden diese Dateien abgerufen
        'vorname' => $_POST['vorname'],
        'nachname' => $_POST['nachname'],
        'email' => $_POST['email'],
        'info' => $_POST['info'],
    );

    $table_name ='kundentv';           //ziel Tabell in der Datenbank, die die Daten bekommt

    $result = $wpdb->insert($table_name, $data, $format=NULL);

    if ($result==1) {
        echo "<script>alert('Sie haben sich erfolgreich registriert! Checken Sie Ihren Mail-Ordner');</script>";
    }else{
        echo "<script>alert('Keine Registrierung möglich.');</script>";
        wp_redirect('https://www.google.de/');
        wp_die();
    }

?>
