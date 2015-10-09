<?php /* Template Name: introduction */ ?>

  <?php get_header(); ?>
    <div class="main-container">
      <?php get_sidebar(); ?>
        <div class="main-container-right clearfix">

          <section>
            
            <h2 class="page-title">Introduction</h2>
            
            
            <div class="blogs">
              <div class="blog_thumb">
                <img class="wp-image-635 size-thumbnail" src="http://www.artworkjpm.biz/wp-content/uploads/2014/09/london-me1-150x150.jpg" alt="" width="150" height="150" />
              </div>
              <div class="blog_snippet intro">
                <p><strong>Hi, I'm John Paul Moran</strong> - <i>AKA ArtworkJPM</i></p>
                <p>In 2006 I started working full time as a Mac Artworker in the print industry. After learning all about creating and amending artwork I decided to progress into web design. After attending several college courses, online courses, I landed an internship as a junior web designer. In 2013 I started working full time in Web design and finally started getting paid!</p>

                <p><strong>What is my ideal job?</strong></p>
   <p> I love working with HTML, CSS, JS and I love to learn new things. I am currently working in the travel industry and would like to carry on in this industry - however if a job came up to work for an interesting company in a different industry I'd be interested. I love creating graphics and working in a team.</p>
 
              </div>

            </div>
            


<h1 class="entry-title">Work history gallery:</h1>
<p class="no-bottom">(hover mouse for description)</p>
<?php echo do_shortcode('[gallery type="rectangular" columns="1" ids="230,169,231,232,175,174,177,233,181,234"]');?>
            
            
          </section>

          <?php get_sidebar('right');?>
            <?php get_footer(); ?>

        </div>


    </div>



    <script src="<?php bloginfo('template_directory') ?>/assets/js/js-file.js"></script>


    <?php wp_footer();?>
      </body>

      </html>