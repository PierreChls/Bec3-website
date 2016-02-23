<?php get_header(); ?>

		<header>
	      <div class="container">
	      	<div class="menu">
		        <div class="row">
		          <div class="col-xs-6">
		            <a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="Logo"></a>
		          </div>
		          <div class="col-xs-6 signin text-right navbar-nav">
		          	<?php
		          	
		          		$defaults = array(
						    'menu' => 'main-menu-index',
						    'menu_id' => 'main-menu-index',
						    'menu_class'        => false, 
						    'echo'            => false,
						    'fallback_cb'     => false,
						    'depth'           => 0,
						    'items_wrap'        => '%3$s', 
						    'container'         => false,
						    'container_class'   => false,
						    'container_id'      => false,
						    'before'            => false,
						    'after'             => false
						);

						echo strip_tags( wp_nav_menu($defaults) , '<a>');
						
					?>
		          </div>
		        </div>
	      	</div>
	        
	        <div class="row header-info">
	          <div class="col-sm-10 col-sm-offset-1 text-center">
	            
	            <?php
					$the_slug = 'header-info';
					$args=array(
						'name'           => $the_slug,
						'post_type'      => 'post',
						'post_status'    => 'publish',
						'posts_per_page' => 1
					);
					$my_posts = get_posts( $args );
					if( $my_posts ) {
					  echo $my_posts[0]->post_content; // to print the content
					}
				?>
	              
	            <div class="row">
	              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
	                <div class="row">
	                  <div class="col-xs-6 text-right">
	                    <a href="#bec-what" class="btn btn-secondary btn-lg scroll">Learn</a>
	                  </div>
	                  <div class="col-xs-6 text-left">
	                    <a href="#invite" class="btn btn-primary btn-lg scroll">MyBeC3</a>
	                  </div>
	                </div>
	              </div>
	            </div>
	            
	          </div>
	        </div>
	      </div>
	    </header>
	    
	    <div class="mouse-icon hidden-xs">
			<div class="scroll"></div>
		</div>
	    
	    <section id="bec-what" class="pad-xl">
	      <div class="container">
	        <div class="row">
	          <div class="col-sm-8 col-sm-offset-2 text-center margin-30">
	          	<?php
					$the_slug = 'bec-what';
					$args=array(
						'name'           => $the_slug,
						'post_type'      => 'post',
						'post_status'    => 'publish',
						'posts_per_page' => 1
					);
					$my_posts = get_posts( $args );
					if( $my_posts ) { ?>
						<h2><?php echo $my_posts[0]->post_title ?></h2>
						<p class="lead"><?php echo $my_posts[0]->post_content ?></p>
					<?php						
					}
				?>
	          </div>
	        </div>
	        
	        <div class="screen">
		        <img src="<?php bloginfo('template_directory'); ?>/img/screen.png">
	        </div>
	      </div>
	    </section>
	    
	    <section id="main-info" class="pad-xl">
		    <div class="container">
			    <div class="row">
			    	<?php
						$the_slug = 'bec3-what-categories';
						$args=array(
							'name'           => $the_slug,
							'post_type'      => 'post',
							'post_status'    => 'publish',
							'posts_per_page' => 1
						);
						$my_posts = get_posts( $args );
						if( $my_posts ) {
							echo $my_posts[0]->post_content;			
						}
					?>
			    </div>
		    </div>
	    </section>
	    
	    <!--Learn-->
	    <section id="learn" class="pad-lg">
	      <div class="container">
	        <div class="row margin-40">
	          <div class="col-sm-8 col-sm-offset-2 text-center">
	          	<?php
					$the_slug = 'learn';
					$args=array(
						'name'           => $the_slug,
						'post_type'      => 'post',
						'post_status'    => 'publish',
						'posts_per_page' => 1
					);
					$my_posts = get_posts( $args );
					if( $my_posts ) { ?>	
						<h2 class="white"><?php echo $my_posts[0]->post_title ?></h2>
						<p class="white"><?php echo $my_posts[0]->post_content ?></p>		
					<?php
					}
				?>
	          </div>
	        </div>
	        
	        <div class="row margin-50">
	        	<div class="section group">
					<?php echo do_shortcode("[huge_it_videogallery id='1']"); ?>
				</div>
	        </div>
	        
	      </div>
	    </section>
	    
	    <section id="bec3-lib" class="pad-lg">
	      <div class="container">
	        <div class="row margin-40">
	          <div class="col-sm-8 col-sm-offset-2 text-center">
	            <h2>BeC3-lib</h2>
	            <p>A very easy C++ Library to interact with objects connected on Bec3.</p>
	          </div>
	        </div>
	        
	        <div class="browser-window">
			<div class="top-bar">
				<div class="circles"></div>
				<div class="circles"></div>
				<div class="circles"></div>
			</div>
			<div class="window-content">
				<pre><code><span class="type">int</span> <span class="function">main</span>(int argc, const char **argv) {
    <span class="bec3">Bec3</span> mySession("assets/conf/Bec3.json");
    <span class="function">while</span>(done){
    	<span class="bec3">mySession.updateObjects();</span>
    	
    	<span class="function">if</span>( <span class="bec3">mySession.getObjectState( "My" ).getBool()</span> == true ){
    		<span class="comment">/*Do something*/</span>
    	}
    }
    return 0;
}</code></pre>
			</div>
			
	        </div>
	        
	        <div class="row">
	              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
	                <div class="row">
	                  <div class="col-xs-6 text-right">
	                    <a href="#" class="btn btn-secondary btn-lg scroll">Download on Github</a>
	                  </div>
	                  <div class="col-xs-6 text-left">
	                    <a href="#invite" class="btn btn-secondary btn-lg scroll">See documentation</a>
	                  </div>
	                </div><!--End Button Row-->  
	              </div>
	            </div>
			
	      </div>
	    </section>
	    
	    
	    <section id="contact" class="pad-lg light-gray-bg">
	      <div class="container">
	        <div class="row">
	          <div class="col-sm-8 col-sm-offset-2 text-center">
	            <img src="<?php bloginfo('template_directory'); ?>/img/contact-msg.svg" width="100" height="100"/>
	            <?php
					$the_slug = 'contact';
					$args=array(
						'name'           => $the_slug,
						'post_type'      => 'post',
						'post_status'    => 'publish',
						'posts_per_page' => 1
					);
					$my_posts = get_posts( $args );
					if( $my_posts ) { ?>	
						<h2><?php echo $my_posts[0]->post_title ?></h2>
						<br />
						<p class="black"><?php echo $my_posts[0]->post_content ?></p>	
						<br />	
					<?php
					}
				?>
	            <div class="row">
	              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
	                <form role="form">
	                  <a href="mailto:contact@bec3.com" class="btn btn-primary btn-lg">SEND MAIL</a>
	                </form>
	              </div>
	            </div><!--End Form row-->
	
	          </div>
	        </div>
	      </div>
	    </section>

<?php get_footer(); ?>
