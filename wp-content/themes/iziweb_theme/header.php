<!DOCTYPE html>
<!--[if lte IE 6]> <html class="no-js ie  lt-ie10 lt-ie9 lt-ie8 lt-ie7 ancient oldie" lang="en-US"> <![endif]-->
<!--[if IE 7]>     <html class="no-js ie7 lt-ie10 lt-ie9 lt-ie8 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]>     <html class="no-js ie8 lt-ie10 lt-ie9 oldie" lang="en-US"> <![endif]-->
<!--[if IE 9]>     <html class="no-js ie9 lt-ie10 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" dir="ltr" lang="en-US"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <title>Melville – Architect Builder Designer HTML5 Portfolio</title>
        <!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="author" content="ppandp">
        <meta name="Description" content="Melville – Architect Builder Designer HTML5 Portfolio" />
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,300italic,600,700,800' rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
        <link href="<?php echo get_template_directory_uri() ?>/css/reset.css" rel="stylesheet" type="text/css" media="screen" />
        
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo get_template_directory_uri() ?>/css/styles.css" rel="stylesheet" type="text/css" media="screen" />
        
        <link href="<?php echo get_template_directory_uri() ?>/css/contact.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo get_template_directory_uri() ?>/css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
        <!--[if gt IE 8]><!--><link href="<?php echo get_template_directory_uri() ?>/css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" /><!--<![endif]-->
        <!--[if !IE]> <link href="<?php echo get_template_directory_uri() ?>/css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" /> <![endif]-->
        <link href="<?php echo get_template_directory_uri() ?>/css/open-menu.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo get_template_directory_uri() ?>/css/print.css" rel="stylesheet" type="text/css" media="print" />
        
        <script src="<?php echo get_template_directory_uri() ?>/js/modernizr.js" type="text/javascript"></script>
        <script>
            var ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>'
        </script>
        
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('aligned'); ?>>
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="parent">
                    <div class="child">
                        <p class="small">loading</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="wrap">
            <div id="background-color"></div>
            <header id="header">
                <div class="containing-wrapper">
                    <div class="logo-wrapper">
                        <h1 id="logo"><a href="<?php echo home_url(); ?>" style="background: url(<?php echo ot_get_option('iz_logo'); ?>) center no-repeat; background-size: 100% 100%;">Melville</a></h1>
                        <div class="tagline"><span><?php echo ot_get_option('text_logo'); ?></span></div>
                    </div>
                    <div id="menu-button">
                        <div class="centralizer">
                            <div class="cursor">Menu
                                <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header -->
            <!-- start main nav -->
            <div class="containing-wrapper menu">
                <nav id="main-nav">
                    <div id="menu-close-button">&times;</div>
                    <?php if(is_home()){ ?>
                    <ul id="options" class="option-set clearfix" data-option-key="filter">
                        <li class="selected"> <a href="#home">Trang chủ</a> </li>
                        <li> 
                            <a href="#portfolio">Công trình</a> 
                            <ul class="sub-menu sub-portfolio">
                                <li><a href="#noi-that,.menu">Nội thất</a></li>
                                <li><a href="#ngoai-that,.menu">Ngoại thất</a></li>
                            </ul>
                        </li>
                        <li> <a href="#services">Shop Nội Thất</a> </li>
                        <li> <a href="#about">Báo giá</a> </li>
                        <li> <a href="#blog">Blog</a> </li>
                        <li> <a href="#contact">Liên hệ</a> </li>
                    </ul>
                    <?php }else{ ?>
                    <ul id="options" class="option-set clearfix" data-option-key="filter">
                        <li class="selected"> <a href=<?php echo home_url(); ?>"#home">Trang chủ</a> </li>
                        <li> 
                            <a href="<?php echo home_url(); ?>#portfolio">Công trình</a> 
                            <ul class="sub-menu sub-portfolio">
                                <li><a href="<?php echo home_url(); ?>#noi-that,.menu">Nội thất</a></li>
                                <li><a href="<?php echo home_url(); ?>#ngoai-that,.menu">Ngoại thất</a></li>
                            </ul>
                        </li>
                        <li> <a href="<?php echo home_url(); ?>#services">Shop Nội Thất</a> </li>
                        <li> <a href="<?php echo home_url(); ?>#about">Báo giá</a> </li>
                        <li> <a href="<?php echo home_url(); ?>#blog">Blog</a> </li>
                        <li> <a href="<?php echo home_url(); ?>#contact">Liên hệ</a> </li>
                    </ul>
                    <?php } ?>
                    <div class="social-links">
                        <ul class="social-list clearfix">
                            <li> <a href="#" class="pinterest"></a> </li>
                            <li> <a href="#" class="twitter"></a> </li>
                            <li> <a href="#" class="gplus"></a> </li>
                            <li> <a href="#" class="facebook"></a> </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- end main nav -->