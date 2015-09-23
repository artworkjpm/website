<?php get_header(); ?>
  <div class="main-container">
    <?php get_sidebar(); ?>
      <div class="main-container-right clearfix">
        
       <!-- add blogs page on wp admin, make /blogs page on wp admin
-->
        <section>
          
          Index page

          <div class="blog_titles">Recent blogs
          </div>


          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="blogs">
              <div class="blog_thumb">
                <?php the_post_thumbnail( 'thumbnail' )?>
              </div>
              <div class="blog_snippet">
                <h4><?php the_title(); ?></h4>
                <?php the_excerpt();?>
                  <a href="<?php the_permalink() ?>" class="read">Read more <i class="fa fa-arrow-right"></i>
</a>
              </div>

            </div>
            <?php endwhile; else : ?>
              <p>
                <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
              </p>
              <?php endif; ?>

          
          
        </section>
        
        <?php get_sidebar('right');?>
        <?php get_footer(); ?>

      </div>


  </div>



  <script src="<?php bloginfo('template_directory') ?>/assets/js/js-file.js"></script>

  <?php wp_footer();?>
    </body>

    </html>