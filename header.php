<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head();?>
</head>

<body>
  
  <div class="container">

    <div class="blog-header">
      <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
    </div>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Journal</a>
          <a class="blog-nav-item" href="https://twitter.com/alfred_lua"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-logo.png" alt="Twitter" width="25px" height="25px"></a>
          <a class="blog-nav-item" href="https://www.linkedin.com/in/alfredlua/"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-logo.png" alt="LinkedIn" width="25px" height="25px"></a>
        </nav>
      </div>
    </div>

    <div class="clear"></div>