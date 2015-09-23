<?php /* Template Name: Hobbies */ ?>

  <?php get_header('hobbies'); ?>
    <div class="main-container">
      <?php get_sidebar(); ?>
        <div class="main-container-right clearfix">

          <section>
            <div class="hobbie-box">

              <div class="circle-image">
                <img src="http://localhost/jpmwordpress/wp-content/uploads/2015/09/fa-futbol.png" class="spin-off">
              </div>
               <div class="circle-text">
                <p>Big football fan, sometimes I play...</p>
              </div>
            </div>
            
            <div class="hobbie-box">

              <div class="circle-image">
                <i class="fa fa-music dance-off"></i>
              </div>
               <div class="circle-text">
                <p>I love music, I have played in punk, indie bands...</p>
              </div>
            </div>
            
          
              
            
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