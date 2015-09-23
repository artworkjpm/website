<?php get_header(); ?>


  <div class="main-container">
    <?php get_sidebar(); ?>
      <div class="main-container-right clearfix">
        <!--THIS IS THE HOME PAGE-->
        <section class="home-page">
          <!--<h1>Welcome</h1>
          <h2>ArtworkJPM is an experienced Front-End web guy</h2>
          <h3>He has skills in:</h3>-->
          <div class="cube-container">
            <div class="skill-image">
            <img src="http://localhost/jpmwordpress/wp-content/uploads/2014/09/HTML5_Logo_512.png" alt="HTML" width="80" height="80" /><p>HTML</p>
            </div>
            <div class="skill-image">
            <img src="http://localhost/jpmwordpress/wp-content/uploads/2014/09/css3-logo.png" alt="CSS" width="80" height="80" /><p>CSS</p>
            </div>
            <div class="skill-image">
            <img src="http://localhost/jpmwordpress/wp-content/uploads/2014/09/javascript_logo_.png" alt="JavaScript" width="80" height="80" /><p>JavaScript</p>
            </div>
            <div class="skill-image">
            <img src="http://localhost/jpmwordpress/wp-content/uploads/2014/09/jquery-logo1.jpg" alt="jQuery" width="80" height="80" /><p>jQuery</p>
            </div>
            <div class="skill-image">
            <img src="http://localhost/jpmwordpress/wp-content/uploads/2014/09/php_01.png" alt="PHP" width="80" height="80" /><p>PHP</p>
            </div>
            <div class="skill-image">
            <img src="http://localhost/jpmwordpress/wp-content/uploads/2014/09/wp.jpg" alt="Wordpress Development" width="80" height="80" />
              <p>Wordpress Development</p>
            </div>
            <div class="skill-image">
            <i class="fa fa-envelope-o"></i>
              <p>Email Design</p>
            </div>
            
          
          </div>
          
          <hr>
          <!--<h3>He also has skills in:</h3>-->
          <div class="cube-container">
            
           
            
            <div class="skill-image">
            <img src="http://localhost/jpmwordpress/wp-content/uploads/2014/09/pslogo2.jpg" alt="Photshop" width="80" height="80" />
              <p>Photoshop</p>
            </div>
            <div class="skill-image">
            <img src="http://localhost/jpmwordpress/wp-content/uploads/2014/09/Adobe_Illustrator_Icon_CS6-copy.jpg" alt="Illustrator" width="80" height="80" />
              <p>Illustrator</p>
            </div>
            <div class="skill-image">
            <img src="http://localhost/jpmwordpress/wp-content/uploads/2014/09/indesign.jpg" alt="Indesign" width="80" height="80" />
              <p>Indesign</p>
            </div>
             <div class="skill-image">
            <i class="fa fa-picture-o"></i>
              <p>Logo design</p>
            </div>
            
          </div>
          
          
        </section>
        
        <?php get_sidebar('right');?>

        <?php get_footer(); ?>

      </div>


  </div>



  <script src="<?php bloginfo('template_directory') ?>/assets/js/js-file.js"></script>

  <?php wp_footer();?>
    </body>

    </html>