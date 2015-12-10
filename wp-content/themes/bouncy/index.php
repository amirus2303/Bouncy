<!DOCTYPE html>
<html lang="en">
  <!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	    <meta charset="<?php bloginfo("charset"); ?>">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title><?php bloginfo("title"); ?></title>

	    <!-- Bootstrap -->
	    <link href="<?php bloginfo("stylesheet_url"); ?>" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <?php wp_head(); ?>
    </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/jquery.min.js"></script>
    <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/bootstrap.min.js"></script>
    <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/wow.min.js"></script>
    <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/js/main.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>