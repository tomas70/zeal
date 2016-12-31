<footer class="footer">
	<div class="menu">
	  <div class="container">
	  	<div class="row">
	  		<div class="col-md-12 whats-on">
		  		<h1>What's On?</h1>
		  		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod lacus a metus maximus mattis. Nunc eu hendrerit dolor, nec feugiat risus.</p>

		  		<?php if( have_rows('events') ): ?>
				 
				    <?php while( have_rows('events') ): the_row(); ?>

				    	<div class="col-md-4">

					  		<div class="event">
					 
						        <img src="<?php the_sub_field('image'); ?>">

						        <div class="description">

							        <h1><?php the_sub_field('name'); ?></h1>
							        <p><?php the_sub_field('date'); ?> @ <?php the_sub_field('location'); ?></p>
							        <p><?php the_sub_field('description'); ?></p>

						        </div>

					        </div>

				        </div>
				        
				    <?php endwhile; ?>
				 
				<?php endif; ?>

			</div>
	  		<div class="col-md-12">
			     <nav class="nav-primary">
			      <?php
			      if (has_nav_menu('primary_navigation')) :
			        wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']);
			      endif;
			      ?>
		    	</nav>
		    </div>
		    <div class="col-md-12">
		    <div class="social-icons">
		    		<a href="#"><img src="<?= get_template_directory_uri() . '/dist/images/icon-facebook.svg' ?>"></a>
		    		<a href="#"><img src="<?= get_template_directory_uri() . '/dist/images/icon-twitter.svg' ?>"></a>
		    </div>
		    	<p>Zeal Church, 77 Kingsleigh Road, Heaton Moor, SK4 3PH • 0734213790</p>
		    	<p class="charity">UK REGISTERED CHARITY NUMBER: 1166925</p>
		    </div>
		    </div>
	    </div>
	  </div>
	</div>
	<div class="credits">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Website by Design Lobby</p>
					<p>©  2016 Zeal Church. All rights reserved.</p>
				</div>
			</div>
		</div>
	</div>
</footer>
