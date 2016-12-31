<header class="banner">
  <div class="container">
    <!-- .navbar -->
    <nav class="navbar navbar-full">
      <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">
      &#9776;
      </button>
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img class="logo" src="<?= get_template_directory_uri() . '/dist/images/logo.png' ?>"></a>
      <div class="collapse navbar-toggleable-md" id="mainNavbarCollapse">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
      </div>
    </nav>
    <!-- /.navbar -->
  </div>
</header>
