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
		
		<h1 class="header-news-title">BeC3 latest news</h1>
		
		<div class="all-categories">
		
		<?php
			$category_id = get_cat_ID( 'Breaking news' );
			$category_link = get_category_link( $category_id );
		?>
		<a href="<?php echo esc_url( $category_link ); ?>" title="Breaking news">Breaking News</a>
		
		<?php
			$category_id = get_cat_ID( 'Administration' );
			$category_link = get_category_link( $category_id );
		?>
		<a href="<?php echo esc_url( $category_link ); ?>" title="Administration">Administration</a>
		
		</div>
		
		<div class="all-news">
		
		<?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

			  $custom_args = array(
			  						'post_type'      => 'post',
			  						'category_name'  => 'News',
			  						'posts_per_page' => 5,
			  						'paged'          => $paged
			  				 );

			  $custom_query = new WP_Query( $custom_args ); ?>

		<?php if ( $custom_query->have_posts() ) : ?>

	    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
	    
	      <div class="news">
	      	<p class="cat"><?php $category = get_the_category(); echo $category[0]->slug; ?></p>
	      	<p class="time"><?php the_time('F j, Y'); ?></p>
	        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	        <div class="excerpt">
	          <?php the_excerpt(); ?>
	        </div>
	        <p class="read-more"><a href="<?php the_permalink() ?>">Read more +</a></p>
	      </div>
	      
		<?php endwhile; ?>

		
	    <?php
	      //Pagination : check functions.php file
	      if (function_exists(custom_pagination)) {
	        custom_pagination($custom_query->max_num_pages,"",$paged);
	      }
	    ?>

		<?php wp_reset_postdata(); ?>

		<?php else:  ?>
			<p class="no-post"><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
  	
		</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
