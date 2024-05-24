<!-- Footer-Sektion: Erstellen einer Footer-Klasse mit dem Inhalt des Footers -->
<footer class="footer"> 
    <div class="container">
      <div class="row">
        <!-- Company-Sektion: Informationen über das Unternehmen -->
        <div class="footer-col">
          <h4>company</h4>      
          <ul>
            <li><a href="<?php echo site_url('/info#abt'); ?>">about us</a></li>
            <li><a href="<?php echo site_url('/info#svr'); ?>">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>     
        </div>
        <!-- Get Help-Sektion: Unterstützungsinformationen und Links -->
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href=""<?php echo home_url(); ?>"">Start</a></li>
            <li><a href="<?php echo site_url('/info#knt'); ?>">Kontakt</a></li>
            <li><a href="#">Jobs</a></li>
          </ul>     
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-xing"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>
 
  </footer>        

  <?php wp_footer(); ?>     <!-- wordpress Funktion zum speichern und aufrufen des footers -->
</body>
</html>
