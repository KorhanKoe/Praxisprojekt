<!--Diese Seite erscheint, wenn der Kunde sich erfolgreich registriert hat. Der Grund für den Namen index.php ist die Hierarchie, in der Wordpress arbeitet. Die Verlinkung geschieht an dieser Stelle auf die default seite, nicht auf die Homepage, welche etwas anders aussieht. -->
<!-- Über diese Default Seite kann dann zurück auf die Homepage gelangt werden -->
<?php get_header(); ?>
<section id="top">      <!--Für den Balken oben -->

</section>
<a href="<?php echo home_url(); ?>">    <!-- //Verlinkung zur Hauptseite nach Registrierung -->
<img 
    src="<?php echo get_template_directory_uri(); ?>/bildr/tveds.png"       
    alt="Logo tveds.com"/>
    </a>

<h3 id=txt7>Wechseln Sie <a href="<?php echo home_url(); ?>"> hier</a> zurück zur Homepage<br>
</h3>
