<?php

/*
Template Name: Home Page Layout
Template Post Type: page
*/

get_header(); ?>

  <!--Hero Image Section-->
  <?php dynamic_sidebar('hero-image'); ?>
  <div class="container">
    <main>
      <!--About Us Section-->
      <div class="row">
        <div class="col-md-12">
          <?php dynamic_sidebar('about-us'); ?>
        </div>
      </div>
    </main>
  </div>

<?php get_footer(); ?>
