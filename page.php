<?php get_header(); ?>
  <div class="main-container">
    <?php get_sidebar(); ?>
      <div class="main-container-right clearfix">

        <section>
         
         <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	


 	<!-- Display the Title as a link to the Post's permalink. -->
          
 	      <h2 class="page-title"><?php the_title(); ?></h2>


 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

 	


 	<!-- Display the Post's content in a div box. -->

 	<div class="entry">
 		<?php the_content(); ?>
 	</div>



 	<!-- Stop The Loop (but note the "else:" - see next line). -->

 <?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no pages matched your criteria.' ); ?></p>


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