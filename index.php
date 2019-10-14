<?php get_header(); ?>  

<!-- Wordpress Loop -->  
<div class="container">
	<div class="row">
		<?php
		If(have_posts()){
			While(have_posts()){
				The_post(); ?>
				<div class="col-md-3">
          <h3><?php the_title(); ?></h3>

          <p><?php echo "Published: " . Get_the_date(); echo " | "; echo "Written by: " . Get_the_author(); ?></p>

          <?php the_excerpt(); ?>

          <a class="btn btn-primary btn-small" href="<?php the_permalink(); ?>">Read More</a>
        </div>
      <?php } //end while loops
    } //end if PDOStatement
    ?>
  </div>
</div>



      <?php get_footer(); ?>
