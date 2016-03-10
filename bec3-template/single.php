<?php get_header(); ?>
	
	<header class="page">
	      <div class="container">
	      	<div class="menu">
		        <div class="row">
		          <div class="col-xs-6">
		            <a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="Logo"></a>
		          </div>
		          <div class="col-xs-6 signin text-right navbar-nav">
		          	<?php
		          	
		          		$defaults = array(
						    'menu' => 'main-menu-page',
						    'menu_id' => 'main-menu-page',
						    'menu_class'        => false, 
						    'echo'            => false,
						    'fallback_cb'     => false,
						    'depth'           => 0,
						    'items_wrap'        => '%3$s', 
						    'container'         => false,
						    'container_class'   => false,
						    'container_id'      => false,
						    'before'            => false,
						    'after'             => false,
						);

						echo strip_tags( wp_nav_menu($defaults) , '<a>');
						
					?>
		          </div>
		        </div>
	      	</div>
	    </header>
	
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
				
				<div class="content">
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
