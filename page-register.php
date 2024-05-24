<!--Registrierungs-Seite--!>

<?php get_header(); ?>        

<body>

    
    <section id="top">

    </section>

<!-- Das Erstellend der Register Seite -->
    <nav>
        <div class="logo2">
        <a href="index.html">           <!-- bild einfügen als logo-->
            <img 
            src="<?php echo get_template_directory_uri(); ?>/bildr/tveds.png" 
            alt="Logo tveds.com"/>
        </a>   
      </div>
</nav>

<section id="btn2">
    <button type="submit" class="btn2"><a href="<?php echo home_url(); ?>" id="hrf1">Back  <i class="fa-solid fa-arrow-left"></i></button></a>
    </section>

    
    <div class="headertxt">
        <h1 id="br">Starten wir das Brainstorming</h1>
    </div>
    <section id="txt">
    <div class="hdrbeschr">
    <h4 id="txt1">Herzlich Willkommen bei <b>tveds.com.</b> <br>Wir sind nur ein paar Klicks  davon entfernt, <br>Ihr Markenzeichen von gut auf Unglaublich hochzustufen!<br>
        Erzählen Sie uns mehr über das Produkt <br>und füllen Sie das Formular aus, 
         um sich zu registrieren.
        <br> <b id="b">Dann können wir starten!</b>
    </h4>
    </div>
</section>

    <div class="wrapper">
        <form id="myform" action="code.php" method="POST">
   <section id="form">
    <div class="inputbox1">
        <h2 id="vorname">Vorname:</h2>
        <input type="text" name="vorname" placeholder="Ihr Vorname" id="ip1">    
        <id="myform" action="login.php" methode="get">
    </id>
    </div>
    <div class="inputbox2" >
        <h2 id="nachname">Nachname:</h2>
        <input type="text" name="nachname" placeholder="Ihr Nachname" id="ip2">
    </div>

    <div class="inputbox3" >
        <h2 id="email">E-Mail:</h2>
        <input  type="text" name="email" placeholder="Ihre E-Mail-Adresse" id="ip3">
    </div>

    <div class="inputbox4" >
        <h2 id="story">Erzählen Sie uns wie Ihr Projekt aussehen soll:</h2>
        <textarea placeholder="Erzählen Sie uns was über Ihr Projekt" id="ip4" name="info" rows="5" cols="20>"></textarea>
    </div>
</section>   
    <section id="btn3">
    <button type="submit" name="submitbtn" class="btn3">Send <i class="fa-solid fa-arrow-right"></i></button></a>
</section>
    </form>
    </div>

    <section id="bot">

    </section>


</body>
</html>
