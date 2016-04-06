<?php
	
	/* @theme BeC3-Theme */

?>

<?php get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<div class="post-content">
		
			<?php while ( have_posts() ) : the_post(); ?>
	
				<h1 class="header-post-title"><?php the_title(); ?> </h1>
				
				<div class="post-info">
					<p class="cat"><?php $category = get_the_category(); echo $category[0]->slug; ?></p>
					<p class="time"><?php the_time('F j, Y'); ?></p>
					<p class="author"> <?php echo get_the_author(); ?> </p>
				</div>
				
				<div class="content container">
					<?php the_content(); ?>
				</div>
	
				<?php 
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
	
	
			endwhile; ?>
		
		</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
