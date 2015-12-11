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
        <section class="header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Bouncy</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#">Hello</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div><!-- /.container-fluid -->
            </nav>

            <div class="container banniere_title">
                <div class="row">
                    <div class="col-xs-6 no-lateral_padding col-xs-offset-3 text-center">
                        <h1>We Are Code Cafe</h1>
                        <p class="white big margin_top_30">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        </p>
                        
                    </div>
                    <div class="col-xs-12 box_angle_down text-center"><i class="fa fa-angle-down active"></i></div>
                </div>
            </div>
        </section>

        <section class="padding_top_80 padding_bottom_80">
            <div class="container">
                <div class="row">
                    <div class="col-xs-5 col-xs-offset-1">
                        <h2 class="margin_bottom_40">This is Bouncy</h2>
                        <p class="margin_bottom_30">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                        </p>
                        <button type="button" class="btn rounded dark">Read More</button>
                    </div>
                    <div class="col-xs-5">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/ipad.jpg" class="pull-right" />
                    </div>
                </div>
            </div>
        </section>

        <section class="grey_bg padding_top_80 padding_bottom_80">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4 text-center">
                        <h2 class="margin_bottom_30">DetailS ABOUT BOUNCY</h2>
                        <p class="margin_bottom_50">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                        <i class="fa fa-heart-o active big margin_right_15"></i>
                        <i class="fa fa-keyboard-o big margin_right_15"></i>
                        <i class="fa fa-lightbulb-o big"></i>

                    </div>
                </div>

                <div class="row margin_top_50">
                    <div class="col-xs-4">
                        <p class="sub_title margin_bottom_20">Creative Ideas</p>
                        <p class="font_16">
                            At <a href="#">vero</a> eos et accusamus et iusto odio dignissimos <strong>ducimus</strong> qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
                        </p>
                    </div>
                    <div class="col-xs-6 col-xs-offset-1">
                        <p class="margin_top_50">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque <strong>corrupti quos</strong> dolores et quas molestias <a href="#">excepturi</a> sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem r
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="padding_top_70 padding_bottom_70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4 text-center">
                        <h2 class="margin_bottom_30">FEATURED PROJECTS</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/jquery.min.js"></script>
        <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/bootstrap.min.js"></script>
        <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/wow.min.js"></script>
        <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/js/main.js"></script>
    <?php wp_footer(); ?>
    </body>
</html>