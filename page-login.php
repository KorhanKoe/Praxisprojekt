<!--Login-Seite für WordPress--!>
<?php get_header(); ?>

<body>
<!-- Für den oberen Balken -->
    <section id="top2">
    </section>

    <nav>
    <!-- Einfügen des Logos-->
            <img 
            src="<?php echo get_template_directory_uri(); ?>/bildr/tveds.png" 
            alt="Logo tveds.com"/>     
    </nav>

<!-- Das Erstellen der Login Seite. -->
<div class="headertxt2">
    <h1 id="br2">Anmelden</h1>
</div>
<div class="hdrbeschr2">
<h4 id="txt2">Herzlich Willkommen bei tveds.com. Bitte geben Sie <br>Ihre Zugangsdaten ein.</h4>
</div>


    <div id="pic">
    <img
    src="<?php echo get_template_directory_uri(); ?>/bildr/Glühbirne.jpg"
    alt="glühbirne, hand"
    class="birne"
    />
    </div>

    <div class="wrapper2">
        <form action="">
        <form id="myform" action="login.php" methode="get">
            
    <div class="inputbox1">
        <input type="text" placeholder="E-Mail" id="ip5">    
        <id="myform" action="login.php" methode="get">
    </div>
            
    <div class="inputbox2" >
        <input id="ip6" type="password" id="password" name="password" placeholder="Passwort" >
        <id="myform" action="login.php" methode="get">
    </div>

    <section id="btn">
    <button type="submit" class="btn4">Anmelden</button>
    <button type="submit"  class="btn5"><a href="<?php echo home_url(); ?>" id="abbr">Abbrechen</button></a>

<!--Die zusätzlichen Verlinkungen auf der Login-Seite -->
    <div class="registerlink">
        <a href="<?php echo site_url('/register'); ?>">Noch kein Kundenkonto? Hier registrieren.</a>
        <br>
        <br>
        <a href="<?php echo site_url('/info#svr'); ?>">Infos zu unserem Service.</a>
    </section>    
    </div>
<!--Für den unteren Balken -->
    <section id="border"></section>
        
</body>
</html>
