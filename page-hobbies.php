<?php /* Template Name: Hobbies */ ?>

  <?php get_header(); ?>
    <div class="main-container">
      <?php get_sidebar(); ?>
        <div class="main-container-right clearfix">

          <section>
            
            <h2 class="page-title">Hobbies</h2>
            <button type="button" class="btn toggle-effects">Turn off effects</button>
            <div class="hobbie-container">
            
            <div class="hobbie-box">
              <div class="circle-image">
                <img src="http://localhost/jpmwordpress/wp-content/uploads/2015/09/fa-futbol.png" id="spin" class="spin" >
              </div>
               <div class="circle-text">
                <p>Big football fan, sometimes I play...</p>
              </div>
            </div>
            
            <div class="hobbie-box">
              <div class="circle-image">
                <i id="dance" class="fa fa-music dance"></i>
              </div>
               <div class="circle-text">
                <p>I love music, I have played in punk, indie bands...</p>
              </div>
            </div>
              
             
              
              <div class="hobbie-box">
              <div class="circle-image">
                <i id="film" class="fa fa-film highlight"></i>
              </div>
               <div class="circle-text">
                <p>Fan of film and tv, Amazon Prime and Netflix subscriber</p>
                
              </div>
            </div>
              
               <div class="hobbie-box extra-wide">
              <div class="circle-image">
                <i id="slide-in" class="fa fa-bicycle slide-in"></i>
              </div>
               <div class="circle-text">
                <p>I cycle to work everyday, I also cycle on weekends:</p>
                 <ul class="cycle">
                  <li>My <a href="http://artworkjpm.biz/cycling">cycleblog</a></li>
                  <li>My <a href="#">Strava</a> profile</li>
                 </ul>
              </div>
            </div>
              
              <div class="hobbie-box">
              <div class="circle-image">
                <i id="travel" class="fa fa-plane fly"></i>
                

              </div>
               <div class="circle-text">
                <p>I love travelling and working in the travel industry</p>
                
              </div>
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