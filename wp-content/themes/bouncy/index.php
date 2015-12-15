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

        <!--Section This is bouncy -->
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

        <!--Section Details about bouncy -->
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

        <!--Section Featured projects -->
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

        <!--Section works -->
        <section>
            <div class="work js-work">
                <img src="/wp-content/themes/bouncy/assets_dist/img/work1.jpg" />
                <div class="work-content js-work-content opacity-content">
                    <h2 class="white">Vintage</h2>
                </div>
            </div>
            <div class="work js-work">
                <img src="/wp-content/themes/bouncy/assets_dist/img/work1.jpg" />
                <div class="work-content js-work-content opacity-content">
                    <h2 class="white">Vintage</h2>
                </div>
            </div>
            <div class="work js-work ajustement">
                <img src="/wp-content/themes/bouncy/assets_dist/img/work1.jpg" />
                <div class="work-content js-work-content opacity-content">
                    <h2 class="white">Vintage</h2>
                </div>
            </div>
            <div class="works_footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-11">
                            <p class="sub_title white alignement">At vero eos et <strong>accusamus</strong> et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>

                        <div class="col-xs-1">
                            <button type="button" class="btn rounded">Submit now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Section Our services -->
        <section class="padding_top_80 padding_bottom_80 grey_bg">
            <div class="container">
                <div class="row">
                    <h2 class="text-center margin_bottom_30">Our Services</h2>
                    <p class="text-center margin_bottom_40">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis<br /> praesentium</p>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="col-xs-2">
                            <i class="fa fa-cogs big margin_bottom_15"></i>
                            <i class="fa fa-paint-brush active big margin_bottom_15"></i>
                            <i class="fa fa-gamepad big margin_bottom_15"></i>
                            <i class="fa fa-plug big margin_bottom_15"></i>
                        </div>

                        <div class="col-xs-8">
                            <p class="sub_title margin_bottom_30">Graphic Design</p>
                            <p class="margin_bottom_30">At vero eos et accusamus et <a href="#">iusto</a> odio dignissimos <strong>ducimus</strong> qui blanditiis praesentium voluptatum deleniti</p>
                            <p>quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, <a href="#">similique</a> sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
                        </div>

                    </div>
                    <div class="col-xs-5 col-xs-offset-1 pull-right">
                        <div class="circle js-circle_80 margin_right_15">
                            <strong></strong>
                        </div>

                        <div class="circle js-circle_75 margin_right_15">
                            <strong></strong>
                        </div>

                        <div class="circle js-circle_60">
                            <strong></strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Section Impressed -->
        <section class="padding_top_40 wrapper_impressed grey_bg">
            <div class="impressed padding_top_70">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-8 padding_right_20">
                            <h2 class="white margin_bottom_40">Impressed ?</h2>
                            <p class="white big margin_bottom_20">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
                            <p class="white uppercase">- <strong>Abdullah Noman</strong><br />Creatice Director, <a href="#">Code Cafe</a></p>
                        </div>
                        <div class="col-xs-4">
                            <img src="/wp-content/themes/bouncy/assets_dist/img/ecran.png" class="pull-right" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Sectio portfolio -->
        <section class="padding_top_80 grey_bg">
            <div class="container">
                <div class="row">
                    <h2 class="text-center margin_bottom_30">THE PORTFOLIO</h2>
                    <p class="text-center margin_bottom_80"> vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis<br />praesentium</p>
                    <div class="filter_wrapper">
                        <ul class="filter_portfolio text-center margin_bottom_80">
                            <li data-filter="*" class="is-checked"><a href="#">All works</a></li>
                            <li data-filter=".print"><a href="#">Print</a></li>
                            <li data-filter=".identity"><a href="#">Identity</a></li>
                            <li data-filter=".branding"><a href="#">Branding</a></li>
                            <li data-filter=".web"><a href="#">Web</a></li>
                            <li data-filter=".html"><a href="#">HTML</a></li>
                            <li data-filter=".wordpress"><a href="#">Wordpress</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="grey_bg padding_bottom_80">
            <div class="container margin_bottom_40">
                <div class="row grid">
                    <div class="col-xs-3 grid-item identity">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/sac.jpg" class="img-responsive">
                    </div>
                    <div class="col-xs-3 grid-item print">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/red_book.jpg" class="img-responsive">
                    </div>
                    <div class="col-xs-3 grid-item print">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/yellow_book.jpg" class="img-responsive">
                    </div>
                    <div class="col-xs-3 grid-item branding">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/garbeo.jpg" class="img-responsive">
                    </div>

                    <div class="col-xs-3 grid-item branding">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/baby_foot.jpg" class="img-responsive">
                    </div>
                    <div class="col-xs-3 grid-item branding">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/desk.jpg" class="img-responsive">
                    </div>
                    <div class="col-xs-3 grid-item wordpress">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/bottle.jpg" class="img-responsive">
                    </div>
                    
                    <div class="col-xs-3 grid-item html">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/toursy.jpg" class="img-responsive">
                    </div>

                    <div class="col-xs-3 grid-item identity">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/beer.jpg" class="img-responsive">
                    </div>
                    <div class="col-xs-3 grid-item web">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/open_book.jpg" class="img-responsive">
                    </div>
                    <div class="col-xs-3 grid-item wordpress">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/table.jpg" class="img-responsive">
                    </div>
                    <div class="col-xs-3 grid-item html">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/tablet.jpg" class="img-responsive">
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 start_project">
                        <div class="wrapper">
                            <p class="sub_title white margin_bottom_30">At vero eos et accusamus et iusto odio <strong>dignissimos</strong> ducimus qui blanditiis </p>
                            <button type="button" class="btn rounded">Start project</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section the team -->
        <section class="padding_top_80 padding_bottom_80">
            <div class="container">
                <div class="row">
                    <h2 class="h2 text-center margin_bottom_30">THE TEAM</h2>
                    <p class="text-center margin_bottom_50">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis <br />praesentium
                </div>

                <div class="row js-wrapper_homme">
                    <div class="col-xs-6">
                        <img src="/wp-content/themes/bouncy/assets_dist/img/homme.jpg" />
                    </div>

                    <div class="col-xs-4 col-xs-offset-2">
                        <div class="homme pull-right">
                            <p class="sub_title"><strong>Abdullah Noman</strong></p>
                            <p class="uppercase homme_poste"><i>Creative Director, Code Cafe</i></p>
                        </div>
                        <div class="clearfix"></div>
                        <p class="pull-right text-right margin_bottom_30">At vero eos et accusamus et iusto odio dignissimos<br /> ducimus qui blanditiis praesentium</p>
                        <div class="clearfix"></div>
                        <div class="progress_bar_wrapper  margin_bottom_20">
                            <p class="uppercase pull-left">branding</p>
                            <p class="pull-right js-percent_80">80%</p>
                            <div class="progress_bar js-progress_bar">
                                <div class="green_progress_bar wow fadeInLeft js-green_progress_bar_80"></div>
                            </div>
                        </div>

                        <div class="progress_bar_wrapper margin_bottom_20">
                            <p class=" uppercase pull-left">branding</p>
                            <p class=" pull-right js-percent_65">65%</p>
                            <div class="progress_bar js-progress_bar">
                                <div class="green_progress_bar wow fadeInLeft js-green_progress_bar_65"></div>
                            </div>
                        </div>

                        <div class="progress_bar_wrapper">
                            <p class="uppercase pull-left">branding</p>
                            <p class="pull-right js-percent_75">75%</p>
                            <div class="progress_bar js-progress_bar">
                                <div class="green_progress_bar wow fadeInLeft js-green_progress_bar_75"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/jquery.min.js"></script>
        <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/bootstrap.min.js"></script>
        <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/wow.min.js"></script>
        <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/masonry.js"></script>
        <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/isotope.js"></script>
        <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/circle-progress.js"></script>
        <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/js/main.js"></script>
    <?php wp_footer(); ?>
    </body>
</html>