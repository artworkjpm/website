<?php get_header(); ?>


  <div class="main-container">
    <?php get_sidebar(); ?>
      <div class="main-container-right clearfix">
        <!--THIS IS THE HOME PAGE-->

        <?php get_sidebar('topbanner');?>

          
        
        <section class="home-page">

          <h1>ArtworkJPM is a Front-End Developer</h1>

          <h2>Formerly a Mac Artworker in the print industry, he retrained to become a web designer</h2>
            <p class="bold-p">How did he learn web design?</p>
            <ul>
              <li>College courses at <a href="http://www.ccb.ac.uk/" target="_blank">Brighton City College</a> and <a href="http://www.pitman-training.com/" target="_blank">Pitman Training</a></li>
              <li>Online courses like <a href="https://www.codecademy.com/" target="_blank">CodeAcademy</a> and <a href="https://teamtreehouse.com/" target="_blank">Treehouse</a></li>
              <li>Making sites for small businesses on a freelance basis</li>
              <li>Working in an unpaid internship at <a href="http://www.angelsmedia.co.uk/" target="_blank">Angels Media</a></li>
              <li>Working full time for <a href="http://www.printwell.co.uk/" target="_blank">Printwell</a> and currently <a href="http://15below.com/" target="_blank">15below</a></li>
              
            </ul>                
            
            <h3 class="border-text"><span class="text-inside-left">Web skills</span></h3>
            <div class="cube-container">
              <div class="skill-image">
                <img src="http://www.artworkjpm.biz/wp-content/uploads/2014/09/HTML5_Logo_512.png" alt="HTML" width="80" height="80" />
                <p>HTML</p>
              </div>
              <div class="skill-image">
                <img src="http://www.artworkjpm.biz/wp-content/uploads/2014/09/css3-logo.png" alt="CSS" width="80" height="80" />
                <p>CSS</p>
              </div>
              <div class="skill-image">
                <img src="http://www.artworkjpm.biz/wp-content/uploads/2014/09/javascript_logo_.png" alt="JavaScript" width="80" height="80" />
                <p>JavaScript</p>
              </div>
              <div class="skill-image">
                <img src="http://www.artworkjpm.biz/wp-content/uploads/2014/09/jquery-logo1.jpg" alt="jQuery" width="80" height="80" />
                <p>jQuery</p>
              </div>
              <div class="skill-image">
                <img src="http://www.artworkjpm.biz/wp-content/uploads/2014/09/php_01.png" alt="PHP" width="80" height="80" />
                <p>PHP</p>
              </div>
              <div class="skill-image">
                <img src="http://www.artworkjpm.biz/wp-content/uploads/2014/09/wp.jpg" alt="Wordpress Development" width="80" height="80" />
                <p>Wordpress Development</p>
              </div>
              <div class="skill-image">
                <i class="fa fa-envelope-o"></i>
                <p>Email Design</p>
              </div>
            </div>           
            
             <h3 class="border-text"><span class="text-inside-left">Artwork skills</span></h3>
            <div class="cube-container">

              <div class="skill-image">
                <img src="http://www.artworkjpm.biz/wp-content/uploads/2014/09/pslogo2.jpg" alt="Photoshop" width="80" height="80" />
                <p>Photoshop</p>
              </div>
              <div class="skill-image">
                <img src="http://www.artworkjpm.biz/wp-content/uploads/2014/09/Adobe_Illustrator_Icon_CS6-copy.jpg" alt="Illustrator" width="80" height="80" />
                <p>Illustrator</p>
              </div>
              <div class="skill-image">
                <img src="http://www.artworkjpm.biz/wp-content/uploads/2014/09/indesign.jpg" alt="Indesign" width="80" height="80" />
                <p>Indesign</p>
              </div>
              <div class="skill-image">
                <i class="fa fa-picture-o"></i>
                <p>Logo design</p>
              </div>

            </div>
          
          <?php get_template_part('content', 'hobbies');?>


         
          </section>

          <?php get_sidebar('right');?>

            <?php get_footer(); ?>

      </div>


  </div>



  <script src="<?php bloginfo('template_directory') ?>/assets/js/js-file.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/dancing.js"></script>

  <?php wp_footer();?>
    </body>

    </html>