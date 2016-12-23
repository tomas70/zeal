<<<<<<< HEAD
<footer class="content-info">
  <div class="container-fluid">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
=======
<footer class="footer">
	<div class="menu">
	  <div class="container">
	  	<div class="row">
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
>>>>>>> master
</footer>
