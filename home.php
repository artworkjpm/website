<?php get_header(); ?>
  <div class="main-container">
    <?php get_sidebar(); ?>
      <div class="main-container-right clearfix">

        <section>
        <!-- THIS IS THE BLOG INDEX PAGE-->
          
          <h2 class="page-title page-blogs">All blogs</h2>
          
          <?php get_sidebar('dropdown');?>
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="blogs">
              <div class="blog_thumb">
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'thumbnail' )?></a>
              </div>
              <div class="blog_snippet">
                <a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>
                <?php the_excerpt();?>
                  
              </div>

            </div>
          
          
            <?php endwhile; else : ?>
          
          
            <p>
              <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
            </p>
            <?php endif; ?>

          <div class="center-div">

        <div class="btn bold-link alignleft ">
          <?php previous_posts_link( '<i class="fa fa-arrow-left"></i> Previous Posts' ); ?>
        </div>
          
      <div class="align-center">  
        
<?php echo paginate_links( array(

    'prev_text'          => __(''),
	'next_text'          => __(''),
    'show_all'           => true

) ); ?>
          </div>

        <div class="btn bold-link alignright ">
          <?php next_posts_link( 'More Posts <i class="fa fa-arrow-right"></i>' ); ?></div>

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