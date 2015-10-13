<?php get_header(); ?>
  <div class="main-container">
    <?php get_sidebar(); ?>
      <div class="main-container-right clearfix">
        <!--This page shows posts-->
        <section>

         <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	


 	<!-- Display the Title as a link to the Post's permalink. -->
          <?php the_post_thumbnail(array(356, 173)); ?>
 	<h2 class="title-blog"><?php the_title(); ?></h2>
          

 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

 	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


 	<!-- Display the Post's content in a div box. -->

 	<div class="entry">
 		<?php the_content(); ?>
      
      <div class="tags-small">
          <p><?php the_tags(); ?></p> 
      </div>
 	</div>
          
 	<!-- Display a comma separated list of the Post's Categories. -->
            
 	<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
 	<div class="comments-gray"><?php comments_template(); ?> 
      </div>
 	<!-- Stop The Loop (but note the "else:" - see next line). -->

 <?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
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