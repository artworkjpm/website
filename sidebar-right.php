 

<aside class="search-bar">
<?php if( !dynamic_sidebar( 'search' ) ): ?>

		<h2 class="module-heading">Sidebar Setup</h2>
		<p>Please add widgets via the admin area!</p>

	<?php endif; ?>

</aside> 


<aside class="testimonial">
   <div class="blog_titles">Testimonials</div>
   <?php if( !dynamic_sidebar( 'page' ) ): ?>

		<h2 class="module-heading">Sidebar Setup</h2>
		<p>Please add widgets via the admin area!</p>

	<?php endif; ?>
</aside>

<aside>
          <div class="blog_titles">Recent blogs
          </div>

          <?php query_posts('post_status=publish&posts_per_page=5&post_type=post');?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="blogs">
              <div class="blog_thumb">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
              </div>
              <div class="blog_snippet">
                <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
                <?php the_excerpt();?>
                  
              </div>
              
             
                
            </div>
            <?php endwhile; else : ?>
              <p>
                <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
              </p>
              <?php endif; ?>
   
       
   
        </aside>