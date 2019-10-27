<?php

/*
Template Name: Home Page Layout
Template Post Type: page
*/

get_header(); ?>

  <main>
    <!--Hero Image Section-->

    <div class="row"
      <div class="col-md-12">
        <?php dynamic_sidebar('hero-image'); ?>
      </div>
    </div>

    <div class="container">
      <!--About Us Section-->

      <div class="row"
        <div class="col-md-12">
          <?php dynamic_sidebar('about-us'); ?>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
