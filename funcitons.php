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

//Hier wird die Verbindung zu der Datenbank hergestellt
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
    }
}
?>
