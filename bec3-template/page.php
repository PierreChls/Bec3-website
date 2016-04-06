<?php
	
	/* @theme BeC3-Theme */

?>


<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<h1 class="header-news-title"><?php the_title() ?></h1>
		
		<div class="page-content">
			<div class="container">
				<?php 
					
					if ( have_posts() ) : while ( have_posts() ) : the_post();
						
							the_content();
							
						endwhile;
					else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p> <?php
					endif;
				?>
			</div>
		</div>



		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
