<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="blue-circles">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7 offset-md-5">
            <img class="header-image" src="<?= get_template_directory_uri() . '/dist/images/img-header.jpg' ?>">
          </div>
        </div>
        <div class="row first">
            <div class="col-md-4">
              <div class="circle story">
              </div>
            </div>
            <div class="col-md-4">
              <div class="circle culture">
              </div>
            </div>
            <div class="col-md-4">
              <div class="circle join">
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="orange-circles">
      <div class="container-fluid">
        <div class="row second">
          <div class="col-md-6">
            <div class="welcome">
            </div>
          </div>
          <div class="col-md-6">
          <img class="welcome-image" src="<?= get_template_directory_uri() . '/dist/images/img-welcome.jpg' ?>">
          </div>
        </div>
      </div>
    </div>
    <div class="yellow-circles">
      <div class="container-fluid">
        <div class="row third">
          <div class="col-md-6">
            <div class="culture-and-values">
            </div>
          </div>
          <div class="col-md-6">
            <div class="our-story">
            </div>
          </div>
        </div>
        <div class="row fourth">
          <div class="col-md-4">
            <div class="yellow family">
            </div>
          </div>
          <div class="col-md-4">
          <img class="culture-image" src="<?= get_template_directory_uri() . '/dist/images/img-culture.jpg' ?>">
          </div>
          <div class="col-md-4">
            <div class="yellow passion">
            </div>
          </div>
        </div>
        <div class="row fifth">
          <div class="col-md-3">
            <img class="culture-image2" src="<?= get_template_directory_uri() . '/dist/images/img-culture-2.jpg' ?>">
          </div>
          <div class="col-md-3">
            <div class="yellow love">
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
