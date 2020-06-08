<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
</head>

<body>
  <div class="blog-masthead">
    <div class="main_logo"></div>
    <div class="container">
      <nav class="blog-nav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'my-custom-menu',
          'container_class' => 'custom-menu-class'
        ));
        ?>
      </nav>
    </div>
  </div>
  <div class="go-to-top" id="goto" onclick="goTop()">
    <svg class="arrow" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="76.95px" height="44.84px" viewBox="0 0 76.95 44.84" style="overflow:visible;enable-background:new 0 0 76.95 44.84;" xml:space="preserve">
      <style type="text/css">
        .stz {
          fill: none;
          stroke: #FFFFFF;
          stroke-width: 12;
          stroke-miterlimit: 10;
          z-index: 100;
        }
      </style>
      <defs>
      </defs>
      <polyline class="stz" points="73.77,41.66 38.48,6.36 3.18,41.66 " />
    </svg>
  </div>