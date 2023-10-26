 <?php get_header(); ?>  <!--sucht nach einer Datei mit dem Namen header.php -->

<body>
    <nav>
            <img 
            src="<?php echo get_template_directory_uri(); ?>/bildr/tveds.png"      
            alt="Logo tveds.com"/>
        </a>   


<div id="dropdown">
</div>
<ul>
    <!--echo site_url ist für Verlinkungen auf andere Seiten gedacht -->
    <li><a href="<?php echo site_url('/register'); ?>" id="start2"><span>Start a Project</span></a></li>
    <li><a href="<?php echo site_url('/login'); ?>" 
    <?php if(is_page('index')) echo 'class="active"' ?> target="_blank" id="login2"><span>Login</span></a></li>
</ul>
</nav>
<main>



<a href="<?php echo home_url(); ?>">
<br>
<h2 class="section-heading5" id="three">tveds.com</h2>
</a>
<!-- Text Eins -->


<div class="text-eins" id="texteins">

</div>
<br>

<!-- Section 1 -->
<section id="all">
<section id="sec1">
    <div class="card-descritpion" id="des1">
          <h3 id="svr">Service</h3>
        </a>
        <p id="d1">
          Unser Service umfasst das erstellen oder verbessern Ihrer Marke im Internet. Wir haben uns darauf fokussiert, Produkte weiter zu entwicklen und auszubessern.
          Der Service umfasst alles, was vermarktet werden soll. Sie können nach einer erfolgreichen Registrierung sich bei unserem Portal anmelden und dann mit einem unserer
          Mitarbeiter in Kontakt treten. Nach einer kurzen Absprache ist dieser dann in der Lage, Ihnen einen Preisvorschlag für die gewünschten Änderungen oder aber die neu gestaltung
          Ihrer Webseite zu geben. Mit zahlreichen Kunden auf der ganzen Welt sind wir ein vertrauenswürdiges Unternehmen, das vor allem auf ein beeindruckendes Ergebnis setzt.
          Sei es ein einfaches, schlichtes aber eindrucksvolles Design oder aber auch etwas aussergewöhnliches, extravagantes, wir haben für jeden Geschmack was dabei. Registrieren Sie sich jetzt unter <a href="<?php echo site_url('/register'); ?>"> <b>Start-a-Project.</b></a> 
        </p>
    </div>
</div>
</section>

<!-- Section 2 -->
<section id="sec2">


    <div class="card-descritpion">
        <h3 id="knt">Kontakt</h3>
      </a> 
            <p id="d2">
              Gerne treten wir mit Ihnen in Kontakt. Gehen sie dazu nur auf den folgenden Link <a href="<?php echo site_url('/register'); ?>"> <b>Start-a-Project</b> </a>
              und registrieren sich bei uns. Gerne können sie uns auch per E-Mail Kontaktieren unter: <b>kundendialog@tveds.com.</b></a>
              </p>
          </div>
    </div>
</section>
<!-- Section 3 -->


<section id="sec3">

<div class="card-descritpion">
            <h3 id="abt">About</h3>
        </a>
        <p id="d3">
            Gegründet im Jahr 2023 ist unser Unternehmen darauf spezialisiert, Ihr Unternehmen zu verbessern. Wir sind ein Anbieter für digitale Dienstleistungen und setzen auf gute Qualität und eindrucksvolles
            Design. Wir stehen in stetigem Dialog mit unseren Kunden und gehen auf jeden Wunsch ein, der uns vorgestellt wird. Gerne beraten wir Sie bezüglich Ihrer Idee
            und stellen Ihnen unsere Erfahrung im Bereich Webdesign und unsere Kompetenzen zur Verfügung.
        </p>
    </div>
    </div>
</section>
<br>


<section id="sec4">

<div class="card-descritpion">
            <h3 id="tm">Das Team</h3>
        </a>
        <p id="d4">
            Unser Team besteht aus zahlreichen Entwicklern, die alle in stetigem Kontakt zueinander stehen und sich gegenseitig Unterstützen.
            Unser Unternehmen baut auf Gemeinsamkeit auf und ist nicht geleitet von einigen wenige Einzelgängern. Durch ständiges Austauschen und einen 
            freundlichen Umgang haben wir eine besondere Team-Chemie hergestellt, die es uns erlaubt, jeden Kundenwunsch optimal zu erfüllen.
        </p>
    </div>
    </div>
</section>
<br>


<section id="sec5">


<div class="card-descritpion">
            <h3 id="gmnsm">Gemeinsam</h3>
        </a>
        <p id="d5">
            Gemeinsam mit unseren Kunden schaffen wir es, ein Produkt auf den Markt zu bringen, das seines gleichen noch nicht kennt. Durch stetige Kommunikation und
            das hinterfragen jeglicher Ideen mit professionellen Vorschlägen zur Umsetzung schaffen wir es, die Pläne so umzusetzen, wie Sie es sich vorgestellt haben.
            Gerne beraten wir Sie nach einer Erfolgreichen Registrierung über das weitere Vorgehen.
            Hier <a href="<?php echo site_url('/register'); ?>"> <b>registrieren</b>  </a>
        </p>
    </div>
    </div>
</section>
<br>

<section id="sec6">

<div class="card-descritpion">
            <h3 id="prdkt">Produkte</h3>
        </a>
        <p id="d6">
            Wir haben so einige Webseiten bereits gestaltet und sehr viele sehr Zufriedene Kunden gewonnen. Über den folgenden Link können sie
            einige unserer stolzesten Kunden sehen und Ihre Webseiten betrachten: <a href="#"><b> Link</b> </a>
        </p>
    </div>
    </div>
</section>
<br>


<section id="sec7">

<div class="card-descritpion">
            <h3 id="idee">Ideen</h3>
        </a>
        <p id="d7">
       Sie möchten Ihr Produkt verbessern? Sie wollen aus der großen Masse herausstechen? Kein Problem!
            Über <b>Kundendialog@tveds.com</b> können Sie einen unserer freundlichen Mitarbeiter vorab kennenlernen, oder aber Sie 
            registrieren sich direkt über <a href="<?php echo site_url('/register'); ?>"> <b>Start-a-Project.</b> </a>
        </p>
    </div>
    </div>
</section>
<br>

<br>
</main>

  
  </body>
  </html>

  <?php get_footer(); ?>
