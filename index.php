<?php

get_header(); ?>



	<div id="primary" class="site-content">
    <?php do_action( 'cmwsecure_outside_content_open' ); ?>
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->
                <footer class="entry-meta">
                    <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
            </article><!-- #post -->
				 
				
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
        <?php do_action( 'cmwsecure_outside_content_close' ); ?>
	</div><!-- #primary -->


<?php get_sidebar(); ?>



<?php get_footer(); ?>