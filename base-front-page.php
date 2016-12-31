<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
  <div class="body-wrapper">
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div id="home" class="parallax-background" data-stellar-background-ratio="1.4">
      <div class="container">
        <div class="row">
          <div class="col-md-7 offset-md-5">
            <img class="header-image" src="<?= get_template_directory_uri() . '/dist/images/img-header.jpg' ?>">
          </div>
        </div>
        <div class="row first">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="reveal circle story">
                <div class="content">
                  <img src="<?= get_template_directory_uri() . '/dist/images/icon-story.svg' ?>">
                  <h1>The Story So Far</h1>
                  <p><?php the_field('the_story_so_far'); ?></p>
                  <a href="#our-story">More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="reveal circle culture">
                <div class="content">
                  <img src="<?= get_template_directory_uri() . '/dist/images/icon-culture.svg' ?>">
                  <h1>Culture</h1>
                  <p><?php the_field('culture'); ?></p>
                  <a href="#culture">More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="reveal circle join">
                <div class="content">
                  <img src="<?= get_template_directory_uri() . '/dist/images/icon-join-in.svg' ?>">
                  <h1>Join In</h1>
                  <p><?php the_field('join_in'); ?></p>
                  <a href="#join-in">More</a>
                </div>
              </div>
            </div>
          </div>
        <div class="row second">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="welcome">
              <div class="content">
                <h1>Welcome to our family</h1>
                <?php the_field('welcome_to_our_family'); ?>
                <a href="<?php the_field('video_link'); ?>" class="video"><img src="<?= get_template_directory_uri() . '/dist/images/play-button.svg' ?>"></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <img class="reveal welcome-image" src="<?= get_template_directory_uri() . '/dist/images/img-welcome.jpg' ?>">
          </div>
        </div>
        <div class="row third">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div id="culture" class="reveal culture-and-values">
              <div class="content">
                <h1>Culture & Values </h1>
                <p><?php the_field('culture_and_values'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div id="our-story" class="reveal our-story">
              <div class="content">
                <h1>Our Story</h1>
                <p class="orange"><?php the_field('our_story_orange_text'); ?></p>
                <p><?php the_field('our_story_white_text'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row fourth">
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="reveal yellow family">
              <div class="content">
                <img src="<?= get_template_directory_uri() . '/dist/images/icon-family.svg' ?>">
                  <h1>Family</h1>
                  <p><?php the_field('family'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <img class="culture-image" src="<?= get_template_directory_uri() . '/dist/images/img-culture.jpg' ?>">
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="reveal yellow passion">
              <div class="content">
                <img src="<?= get_template_directory_uri() . '/dist/images/icon-passion.svg' ?>">
                  <h1>Passion</h1>
                  <p><?php the_field('passion'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row fifth">
          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <img class="culture-image2" src="<?= get_template_directory_uri() . '/dist/images/img-culture-2.jpg' ?>">
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <div class="reveal yellow love">
              <div class="content">
                <img src="<?= get_template_directory_uri() . '/dist/images/icon-love.svg' ?>">
                  <h1>Love</h1>
                  <p><?php the_field('love'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div id="join-in" class="reveal contact-form">
              <div class="content">
              <?php echo do_shortcode('[gravityform id=1]'); ?>
              </div>
            <img class="circles-row" src="<?= get_template_directory_uri() . '/dist/images/circles-row.svg' ?>">
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
    </div>
  </body>
</html>
