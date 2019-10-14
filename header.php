<!DOCTYPE html>
 <html lan="en"> 
<head> 
  <meta charset="utf-8"/> 
  <title><?php bloginfo('name'); ?> </title> 

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /> 

  <?php wp_head();?> 

</head>  
<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h1> <a href="<?php get_home_url();?>"> <?php bloginfo('name');?> </a></h1> 
          <?php } ?>
        </div>
      </div>
    </div>
  </header>
