<?php

/*
Template Name: Home Page Layout
Template Post Type: page
*/

get_header(); ?>

  <div class="container">
    <main>
      <!--Hero Image Section-->

      <div class="row"
        <div class="col-md-12">
          <?php dynamic_sidebar('hero-image'); ?>
        </div>
      </div>

      <!--About Us Section-->

      <div class="row"
        <div class="col-md-12">
          <?php dynamic_sidebar('about-us'); ?>
        </div>
      </div>

    </main>
  </div>

<?php get_footer(); ?>
