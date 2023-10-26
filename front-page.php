<?php get_header(); ?>      <!-- Wordpress Funktion zum Aufrufen des Headers -->

<body>


<!-- Logo -->
  <nav>
  <img 
        src="<?php echo get_template_directory_uri(); ?>/bildr/tveds.png"
        alt="Logo tveds.com"/>
      
        <!-- Navigation -->

        <input type="checkbox" id="toggle_button">      
            <label for="toggle_button" class="toggle_button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </label>
                  
        <ul>
            <li id="start"><a href="<?php echo site_url('/register'); ?>"
                    <?php if(is_page('register')) echo 'class="active"' ?> target="_blank" id="register"><span id="one">Start a Project</span></a></li>
            <li id="exp" class="expandable_li">
                <input type="checkbox" id="contact_checkbox" id="check" onclick="check()">
                <label for="contact_checkbox" id="cont"><span id="one">Menu  </span><i class="fa fa-bars"></i></label>
                <ul class="dropdown" id="drop">
                <li id="service"><a href="<?php echo site_url('/info#svr'); ?>"
                    target="_parent" id="service">Services</a></li>
                <li id="about"><a href="<?php echo site_url('/info#abt'); ?>" 
                     target="_parent" id="about">About</a></li>
                <li id="contact"><a href="<?php echo site_url('/info#knt'); ?>" 
                     target="_parent" id="contact">Contact</a></li>
            <li><a href="<?php echo site_url('/login'); ?>" 
                   target="_blank" id="login">Login</a></li>
        </li>
        </ul>
    </nav>

<main>
    <!-- Der Banner auf der Titelseite -->
    <div class="banner" id="banner">
        <div class="banner-text" id="banner-text">
            <h2>Wir helfen Ihnen!</h2> 
            <div class="text-wrapper">
                <div class="box b1">Branding</div>
                <div class="box b2">Product</div>
                <div class="box b3">Apps</div>
                <div class="box b4">Services</div>
                <div class="box b5">Ideas</div>
            </div>
          </div>
      </div>

      <!-- Titel-Bild -->
      <div id="haende"> 
        <img
        src="<?php echo get_template_directory_uri(); ?>/bildr/haende.svg"  vspace="75"  align="left"
        alt="haende, schuetteln, neon"
        class="haende"
        />
      </div>
    
      <!-- Titel-Text -->
        <br>
        <h2 class="section-heading" id="one">All Services</h2>
      </a>
        <h2 class="section-heading3" id="two">tveds.com</h2>
      </a>
      <!-- Text Eins -->
      <div class="text-eins" id="texteins">
            <h2 class="section-heading2"><br>
                Unser Unternhemen für Ihre Zukunft!
                Lassen Sie sich ein auf eine spannende Reise mit unserer Agentur für die Beihilfe bei der Webentwicklung und weiteren IT-Bezogenen Themen.
                Wir begleiten Sie gerne auf Ihrem Weg zur Informativen-Unabhängigkeit im Bereich World Wide Web.<br>
              </h2>
        </div>
        <br>

        <!-- Section 1 -->
        <div class="all">
        <section id="sec1">
            <div class="card">
                <div class="card-image" id="cardimage1">
                        <img src="<?php echo get_template_directory_uri(); ?>/bildr/group1.jpg" 
                        id="group1"
                        alt="Card-Image1"
                        />
                    </a>  
                  </div>
          

            <div class="card-descritpion" id="des1">
            <a href="<?php echo site_url('/info#tm'); ?>">
                  <h2>Das Team</h2>
                </a>
                <p>
                  Unser Team bestehend aus gut asugebildeten Experten hilft Ihnen dabei, Ihren Traum der Internet-Präsenz zu verwirklichen. 
                  Mit unserem guten können und jahrelanger Erfahrung bietne wir Ihrem Unternehmen das Know-How an, das Sie an die Spitze treibt.
     
                  <a href="<?php echo site_url('/info#tm'); ?>" class="btn-readmore">Read more...</a>

                </p>
            </div>
        </div>
        </section>

        <!-- Section 2 -->
        <section id="sec2">

            <div class="card">
                <div class="card-image" id="cardimage2">
                      <img src="<?php echo get_template_directory_uri(); ?>/bildr/work2.jpg" 
                      alt="Card-Image2"
                      /> 
          
                    </a>
                
                </div>

            <div class="card-descritpion">
            <a href="<?php echo site_url('/info#gmnsm'); ?>">
                <h2>Gemeinsam</h2>
              </a> 
                    <p>
                      Gemeinsam schaffen wir den Grundstein für eine unangefochtene Internet-Präsenz Ihres Unternehmens.
                      Unsere Branding Abteilung verschafft Ihnen die Vorteile, die andere nicht haben.
                    </p>
                    <a href="<?php echo site_url('/info#gmnsm'); ?>" class="btn-readmore">Read more...</a>
                  </p>
                  </div>
            </div>

        </section>
        <!-- Section 3 -->
        <section id="sec3">
            <div class="card">
                <div class="card-image" id="cardimage3">
                        <img src="<?php echo get_template_directory_uri(); ?>/bildr/domor.jpg"
                        alt="Card-image3">
                    </a>
                </div>

            <div class="card-descritpion">
                <a href="<?php echo site_url('/info#prdkt'); ?>">
                    <h2>Produkte</h2>
                </a>
                <p>
                    Ihre Produkte könnten ein neues Image vertragen? Da sind wir genau die richtigen Ansprechpartner für Ihr Problem! Mit der jugendhaften Frische unseres Unternehmens bieten wir Ihnen die Möglichkeit, erneut in das Auge Ihrer Kunden zu springen und Eindruck zu hinterlassen.
                    <a href="<?php echo site_url('/info#prdkt'); ?>" class="btn-readmore">Read more...</a>
                </p>
            </div>
            </div>
        </section>

        <section id="sec4">
          <div class="card">
              <div class="card-image" id="cardimage4">
                      <img src="<?php echo get_template_directory_uri(); ?>/bildr/kugel.jpg"
                      alt="Card-image4">
                  </a>
              </div>

          <div class="card-descritpion">
          <a href="<?php echo site_url('/info#idee'); ?>">
                  <h2>Ideen</h2>
              </a>
              <p>
               Bringen wir die Sache ins Rollen! Die Ideen, die für Ihr Internet-Empire benötigt werden, warten bei uns nur darauf, verwendet zu werden. Worauf warten Sie?
                  <a href="<?php echo site_url('/info#idee'); ?>" class="btn-readmore">Read more...</a>
</p>   
          </div>
          </div>
      </section>
      <br>
      </section>
    </div>
</main>

<?php get_footer(); ?>
