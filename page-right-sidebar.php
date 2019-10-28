<?php
/*
Template Name: Right Sidebar
Template Post Type: page, post      >>we only want this to show up on our pages
*/

get_header(); ?>

  <div class="container">
    <main>
      <div class="row"
        <div class="col-md-9">
          <?php
            if(have_posts()){
              while(have_posts()){
                the_post(); ?>

                <h2 class="entry-title"><?php the_title(); ?></h2>

                <?php the_content(); ?>
              <?php } //ends while loops
            } //ends if statement
          ?>
        </div>
      </div>
    </main>

    <aside class="col-md-3">
      <?php get_sidebar(); ?>
    </aside>
  </div>

<?php get_footer(); ?>
