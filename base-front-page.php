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
              <div class="reveal circle story">
                <div class="content">
                  <img src="<?= get_template_directory_uri() . '/dist/images/icon-story.svg' ?>">
                  <h1>The Story So Far</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a>More</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="reveal circle culture">
                <div class="content">
                  <img src="<?= get_template_directory_uri() . '/dist/images/icon-culture.svg' ?>">
                  <h1>Culture</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a>More</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="reveal circle join">
                <div class="content">
                  <img src="<?= get_template_directory_uri() . '/dist/images/icon-join-in.svg' ?>">
                  <h1>The Story So Far</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a>More</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="yellow-circles">
      <div class="container-fluid">
        <div class="row second">
          <div class="col-md-6">
            <div class="welcome">
              <div class="content">
                <h1>Welcome to our family</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis, quam non elementum finibus, tellus quam ornare ipsum, eu pharetra massa massa a augue.</p>
                <p>Pellentesque egestas accumsan tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis enim ac tortor pulvinar, in gravida ex faucibus.</p>
                <p>Morbi fringilla erat quis sapien dapibus, eget ornare dolor vehicula. Aliquam erat volutpat. Fusce pellentesque tellus ipsum, quis dapibus tortor rutrum quis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
          <img class="reveal welcome-image" src="<?= get_template_directory_uri() . '/dist/images/img-welcome.jpg' ?>">
          </div>
        </div>
        <div class="row third">
          <div class="col-md-6">
            <div class="reveal culture-and-values">
              <div class="content">
                <h1>Culture & Values </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="reveal our-story">
              <div class="content">
                <h1>Our Story</h1>
                <p class="orange">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row fourth">
          <div class="col-md-4">
            <div class="reveal yellow family">
              <div class="content">
                <img src="<?= get_template_directory_uri() . '/dist/images/icon-family.svg' ?>">
                  <h1>Family</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
          <img class="culture-image" src="<?= get_template_directory_uri() . '/dist/images/img-culture.jpg' ?>">
          </div>
          <div class="col-md-4">
            <div class="reveal yellow passion">
              <div class="content">
                <img src="<?= get_template_directory_uri() . '/dist/images/icon-passion.svg' ?>">
                  <h1>Passion</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row fifth">
          <div class="col-md-3">
            <img class="culture-image2" src="<?= get_template_directory_uri() . '/dist/images/img-culture-2.jpg' ?>">
          </div>
          <div class="col-md-3">
            <div class="reveal yellow love">
              <div class="content">
                <img src="<?= get_template_directory_uri() . '/dist/images/icon-love.svg' ?>">
                  <h1>Love</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="reveal contact-form">
              <div class="content">
              </div>
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
