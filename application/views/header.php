<!DOCTYPE html>
<html>
    <head>
        <title>Haswell - Responsive HTML5 Template</title>
        <meta charset=utf-8 >
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="robots" content="index, follow" > 
        <meta name="keywords" content="HTML5 Template" > 
        <meta name="description" content="Haswell - Responsive HTML5 Template" > 
        <meta name="author" content="Vladimir Azarushkin">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- FAVICONS -->
        <link rel="shortcut icon" href="<?= ASSET_URL ?>images/favicon/favicon.png">
        <link rel="apple-touch-icon" href="<?= ASSET_URL ?>images/favicon/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= ASSET_URL ?>images/favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= ASSET_URL ?>images/favicon/apple-touch-icon-114x114.png">

        <!-- CSS -->
        <!-- REVOSLIDER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?= ASSET_URL ?>rs-plugin/css/settings.min.css" media="screen" />

        <!--  BOOTSTRAP -->
        <link rel="stylesheet" href="<?= ASSET_URL ?>css/bootstrap.min.css"> 

        <!--  GOOGLE FONT -->		
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>

        <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->		
        <link rel="stylesheet" href="<?= ASSET_URL ?>css/icons-fonts.css" >	

        <!--  CSS THEME -->		
        <link rel="stylesheet" href="<?= ASSET_URL ?>css/style.css" >

        <!-- ANIMATE -->	
        <link rel='stylesheet' href="<?= ASSET_URL ?>css/animate.min.css">

        <!-- IE Warning CSS -->
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie-warning.css" ><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8-fix.css" ><![endif]-->

        <!-- Magnific popup  in style.css	Owl Carousel Assets in style.css -->		

        <!-- CSS end -->

        <!-- JS begin some js files in bottom of file-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Modernizr -->
        <!-- <script src="js/modernizr.js"></script> -->

    </head>
    <body>

        <!-- LOADER -->	
        <div id="loader-overflow">
            <div id="loader3">Please enable JS</div>
        </div>	

        <div id="wrap" class="boxed ">
            <div class="grey-bg"> <!-- Grey BG  -->	

                <!--[if lte IE 8]>
                <div id="ie-container">
                        <div id="ie-cont-close">
                                <a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
                        </div>
                        <div id="ie-cont-content" >
                                <div id="ie-cont-warning">
                                        <img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
                                </div>
                                <div id="ie-cont-text" >
                                        <div id="ie-text-bold">
                                                You are using an outdated browser
                                        </div>
                                        <div id="ie-text">
                                                For a better experience using this site, please upgrade to a modern web browser.
                                        </div>
                                </div>
                                <div id="ie-cont-brows" >
                                        <a href='http://www.firefox.com' target='_blank'><img src='images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
                                        <a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
                                        <a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
                                        <a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
                                </div>
                        </div>
                </div>
                <![endif]-->

                <!-- HEADER -->
                <header id="nav" class="header header-1">
                    <div class="header-wrapper">
                        <div class="container-m-30 clearfix">
                            <div class="logo-row">

                                <!-- LOGO --> 
                                <div class="logo-container-2">
                                    <div class="logo-2">
                                        <a href="index.html" class="clearfix">
                                            <img src="<?= ASSET_URL ?>images/logo.png" class="logo-img" alt="Logo">
                                        </a>
                                    </div>
                                </div>
                                <!-- BUTTON --> 
                                <div class="menu-btn-respons-container">
                                    <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                                        <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- MAIN MENU CONTAINER -->
                        <div class="main-menu-container">

                            <div class="container-m-30 clearfix">	

                                <!-- MAIN MENU -->
                                <div id="main-menu">
                                    <div class="navbar navbar-default" role="navigation">

                                        <!-- MAIN MENU LIST -->
                                        <nav class="collapse collapsing navbar-collapse right-1024">
                                            <ul class="nav navbar-nav">

                                                <!-- MENU ITEM -->
                                                <li class="parent current">
                                                    <a href="#"><div class="main-menu-title">HOME</div></a>
                                                    <ul class="sub">
                                                        <li class="parent">
                                                            <a class="current" href="#">Home - Corporate</a>
                                                            <ul class="sub">
                                                                <li><a class="current" href="index.html">Corporate 1</a></li>
                                                                <li><a href="index2.html">Corporate 2</a></li>
                                                                <li><a href="index3.html">Corporate 3</a></li>
                                                                <li><a href="index4.html">Corporate 4</a></li>
                                                                <li><a href="index5.html">Corporate 5</a></li>
                                                                <li><a href="index6.html">Corporate 6</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="parent">
                                                            <a href="#" >Home - Blog</a>
                                                            <ul class="sub">
                                                                <li><a href="index-blog.html">Blog Layout 1</a></li>
                                                                <li><a href="index-blog-2.html">Blog Layout 2</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="parent">
                                                            <a href="#" >Home - Landing</a>
                                                            <ul class="sub">
                                                                <li><a href="one-page-landing.html">Landing 1</a></li>
                                                                <li><a href="one-page-landing2.html">Landing 2</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="parent">
                                                            <a href="#" >Home - Min Menu</a>
                                                            <ul class="sub">
                                                                <li><a href="index-side-menu.html">Side Menu</a></li>
                                                                <li><a href="index-full-screen-menu.html">Fullscreen Menu</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="index-portfolio.html">Home - Portfolio</a></li>
                                                        <li><a href="index-shop.html">Home - Shop</a></li>
                                                        <li><a href="index-construction.html">Home - Construct</a></li>
                                                        <li><a href="index-construction2.html">Home - Construct 2</a></li>
                                                        <li><a href="index-cars.html">Home - Cars</a></li>
                                                        <li><a href="car-service.html">Home - Car Service</a></li>
                                                        <li><a href="index-photo.html">Home - Photo</a></li>
                                                        <li><a href="one-page-travel.html">Home - Travel</a></li>
                                                        <li><a href="index-magazine.html">Home - Magazine</a></li>
                                                        <li><a href="intro.html#one-pages">Home - One Page</a></li>
                                                        <li class="parent">
                                                            <a href="#" >Home - Static</a>
                                                            <ul class="sub">
                                                                <li><a href="static-image.html">Image</a></li>
                                                                <li><a href="static-parallax.html">Parallax</a></li>
                                                                <li><a href="static-text-rotator.html">Text Rotator</a></li>

                                                                <li><a href="static-video.html">HTML5 Video</a></li>
                                                            </ul>
                                                        </li>

                                                        <li><a href="slider-revo-html5-video.html">Home - Video</a></li>

                                                    </ul>
                                                </li>

                                                <!-- MENU ITEM -->
                                                <li class="parent">
                                                    <a href="#"><div class="main-menu-title">SLIDERS</div></a>
                                                    <ul class="sub">
                                                        <li class="parent">
                                                            <a href="#">Revolution Slider</a>
                                                            <ul class="sub">
                                                                <li><a href="index.html">Full Screen</a></li>
                                                                <li><a href="slider-revo-full-width.html">Full Width</a></li>
                                                                <li><a href="slider-revo-kenburns.html">Kenburns Effect</a></li>
                                                                <li><a href="slider-revo-html5-video.html">HTML5 Video</a></li>
                                                            </ul>
                                                        </li>

                                                        <li><a href="slider-flex.html">Flex Slider</a></li>
                                                        <li class="parent">
                                                            <a href="#" >Static Media</a>
                                                            <ul class="sub">
                                                                <li><a href="static-image.html">Image</a></li>
                                                                <li><a href="static-parallax.html">Parallax</a></li>
                                                                <li><a href="static-text-rotator.html">Text Rotator</a></li>
                                                                <li><a href="static-video.html">HTML5 Video</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <!-- MEGA MENU ITEM -->
                                                <li class="parent megamenu">
                                                    <a href="#"><div class="main-menu-title">PAGES & FEATURES</div></a>
                                                    <ul class="sub">
                                                        <li>

                                                            <div class="menu-sub-container">

                                                                <div class="box col-md-2 nofloat closed">
                                                                    <h5 class="title">HEADERS</h5>
                                                                    <ul>
                                                                        <li><a href="index.html">Header Black Transparent</a></li>
                                                                        <li><a href="index2.html">Header White Transparent</a></li>
                                                                        <li><a href="index3.html">Header White No Transparent</a></li>
                                                                        <li><a href="index-blog-2.html">Header Black No Transparent</a></li>
                                                                        <li><a href="index-shop.html">Header Shop</a></li>
                                                                        <li><a href="index-photo.html">Header Side Menu</a></li>
                                                                        <li><a href="index-side-menu.html">Header Min Menu</a></li>
                                                                        <li><a href="index-full-screen-menu.html">Header Min Menu 2</a></li>
                                                                        <li><a href="coming-soon2.html">Header Black Min Menu 2</a></li>
                                                                        <li><a href="index-construction2.html">Header Top Bar</a></li>
                                                                        <li><a href="index-magazine.html">Header Magazine</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="box col-md-2 nofloat closed">
                                                                    <h5 class="title">FOOTERS</h5>
                                                                    <ul>
                                                                        <li><a href="index2.html#footer1">Footer 1</a></li>
                                                                        <li><a href="index.html#footer2">Footer 2</a></li>
                                                                        <li><a href="index4.html#footer3">Footer 3</a></li>
                                                                        <li><a href="index-cars.html#footer4">Footer 4</a></li>
                                                                        <li><a href="index-side-menu.html#footer5">Footer 5</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="box col-md-3 nofloat closed">
                                                                    <h5 class="title">PAGES SAMPLES 1</h5>
                                                                    <ul>
                                                                        <li><a href="typography.html">Typography</a></li>
                                                                        <li><a href="grid-system.html">Grid System</a></li>
                                                                        <li><a href="layout-full-width.html">Layout Full width</a></li>
                                                                        <li><a href="layout-left-sidebar.html">Layout Left sidebar</a></li>
                                                                        <li><a href="layout-right-sidebar.html">Layout Right sidebar</a></li>
                                                                        <li><a href="under-construction.html">Under construction</a></li>
                                                                        <li><a href="coming-soon2.html">Under construction 2</a></li>
                                                                        <li><a href="maintenance-page.html">Maintenance Page</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="box col-md-3 nofloat closed">
                                                                    <h5 class="title">PAGES SAMPLES 2</h5>
                                                                    <ul>
                                                                        <li><a href="about-us.html">About Us</a></li>
                                                                        <li><a href="about-us-2.html">About Us 2</a></li>
                                                                        <li><a href="about-me.html">About Me</a></li>
                                                                        <li><a href="team.html">Team</a></li>
                                                                        <li><a href="services.html">Services</a></li>
                                                                        <li><a href="faq.html">FAQ</a></li>
                                                                        <li><a href="404.html">404 Error</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="box col-md-2 nofloat closed">
                                                                    <h5 class="title">PAGE TITLES</h5>
                                                                    <ul>
                                                                        <li><a href="page-title-small-grey.html">Small Grey</a></li>
                                                                        <li><a href="page-title-small-white.html">Small White</a></li>
                                                                        <li><a href="page-title-small-dark.html">Small Dark</a></li>
                                                                        <li><a href="page-title-big-grey.html">Big Grey</a></li>
                                                                        <li><a href="page-title-big-white.html">Big White</a></li>
                                                                        <li><a href="page-title-big-dark.html">Big Dark</a></li>
                                                                        <li><a href="page-title-big-img.html">Big Image</a></li>
                                                                        <li><a href="page-title-large-img.html">Large Image</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </li>
                                                    </ul>
                                                </li>					

                                                <!-- MENU ITEM -->
                                                <li class="parent">
                                                    <a href="#"><div class="main-menu-title">PORTFOLIO</div></a>
                                                    <ul class="sub">
                                                        <li><a href="portfolio-grid.html">Portfolio Grid</a></li>
                                                        <li class="parent">
                                                            <a href="#">Boxed</a>
                                                            <ul class="sub">
                                                                <li><a href="portfolio-boxed-2col.html">2 Columns</a></li>
                                                                <li><a href="portfolio-boxed-3col.html">3 Columns</a></li>
                                                                <li><a href="portfolio-boxed-4col.html">4 Columns</a></li>
                                                                <li><a href="portfolio-boxed-5col.html">5 Columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="parent">
                                                            <a href="#">Boxed bordered</a>
                                                            <ul class="sub">
                                                                <li><a href="portfolio-boxed-gut-2col.html">2 Columns</a></li>
                                                                <li><a href="portfolio-boxed-gut-3col.html">3 Columns</a></li>
                                                                <li><a href="portfolio-boxed-gut-4col.html">4 Columns</a></li>

                                                            </ul>
                                                        </li>                        <li class="parent">
                                                            <a href="#">Wide</a>
                                                            <ul class="sub">
                                                                <li><a href="portfolio-wide-2col.html">2 Columns</a></li>
                                                                <li><a href="portfolio-wide-3col.html">3 Columns</a></li>
                                                                <li><a href="portfolio-wide-4col.html">4 Columns</a></li>
                                                                <li><a href="portfolio-wide-5col.html">5 Columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="parent">
                                                            <a href="#">Wide bordered</a>
                                                            <ul class="sub">
                                                                <li><a href="portfolio-wide-gut-2col.html">2 Columns</a></li>
                                                                <li><a href="portfolio-wide-gut-3col.html">3 Columns</a></li>
                                                                <li><a href="portfolio-wide-gut-4col.html">4 Columns</a></li>
                                                                <li><a href="portfolio-wide-gut-5col.html">5 Columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="parent">
                                                            <a href="#">Masonry</a>
                                                            <ul class="sub">
                                                                <li><a href="portfolio-masonry-2col.html">2 Columns</a></li>
                                                                <li><a href="portfolio-masonry-3col.html">3 Columns</a></li>
                                                                <li><a href="portfolio-masonry-4col.html">4 Columns</a></li>
                                                                <li><a href="portfolio-masonry-5col.html">5 Columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="parent">
                                                            <a href="#">Portfolio Single</a>
                                                            <ul class="sub">
                                                                <li><a href="portfolio-single1.html">Single 1</a></li>
                                                                <li><a href="portfolio-single2.html">Single 2</a></li>
                                                                <li><a href="portfolio-single3.html">Single 3</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>					

                                                <!-- MENU ITEM -->
                                                <li class="parent">
                                                    <a href="#"><div class="main-menu-title">BLOG</div></a>
                                                    <ul class="sub">
                                                        <li class="parent">
                                                            <a href="#">Blog Masonry</a>
                                                            <ul class="sub">
                                                                <li><a href="blog-masonry-2col.html">2 Columns</a></li>
                                                                <li><a href="blog-masonry-3col.html">3 Columns</a></li>
                                                                <li><a href="blog-masonry-4col.html">4 Columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="blog-full-width.html">Blog Full Width</a></li>

                                                        <li><a href="blog-small-image.html">Blog Small Image</a></li>
                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                        <li class="parent">
                                                            <a href="#">Blog Single</a>
                                                            <ul class="sub">
                                                                <li><a href="blog-single-disqus.html">Disqus Comments</a></li>
                                                                <li><a href="blog-single-facebook.html">Facebook Comments</a></li>
                                                                <li><a href="blog-single-sidebar-right.html">Right Sidebar</a></li>
                                                                <li><a href="blog-single-sidebar-left.html">Left Sidebar</a></li>
                                                                <li><a href="blog-single-fullwidth.html">Fullwidth</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>	

                                                <!-- MENU ITEM -->
                                                <li class="parent">
                                                    <a href="#"><div class="main-menu-title">SHOP</div></a>
                                                    <ul class="sub">
                                                        <li><a href="index-shop.html">Home - Shop</a></li>
                                                        <li><a href="shop-2-col.html">2 Columns</a></li>
                                                        <li><a href="shop-3-col.html">3 Columns</a></li>
                                                        <li><a href="shop-4-col.html">4 Columns</a></li>
                                                        <li><a href="shop-single.html">Shop Single</a></li>
                                                        <li><a href="shop-shoping-cart.html">Shoping Cart</a></li>
                                                    </ul>
                                                </li>

                                                <!-- MEGA MENU ITEM -->
                                                <li class="parent megamenu">
                                                    <a href="#"><div class="main-menu-title">SHORTCODES</div></a>
                                                    <ul class="sub">
                                                        <li class="clearfix">

                                                            <div class="menu-sub-container">

                                                                <div class="box col-md-3 ">
                                                                    <ul>
                                                                        <li><a href="animations.html"><div class="icon icon-basic-mixer2"></div> ANIMATIONS</a></li>
                                                                        <li><a href="shortcodes.html#accordions"><div class="icon icon-basic-map"></div> ACCORDIONS</a></li>
                                                                        <li><a href="shortcodes.html#buttons"><div class="icon icon-basic-link"></div> BUTTONS</a></li>
                                                                        <li><a href="shortcodes.html#carousels"><div class="icon icon-arrows-expand-horizontal1"></div> CAROUSELS</a></li>
                                                                        <li><a href="shortcodes.html#toggles"><div class="icon icon-arrows-hamburger1"></div>TOGGLES</a></li>
                                                                        <li><a href="shortcodes.html#tabs"><div class="icon icon-basic-folder"></div>TABS</a></li>
                                                                        <li><a href="shortcodes.html#labels"><div class="icon icon-ecommerce-diamond"></div>LABELS</a></li>
                                                                        <li><a href="shortcodes.html#twitter-link"><div class="icon icon-basic-world"></div>TWITTER FEEDS</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="box col-md-3">
                                                                    <ul>
                                                                        <li><a href="icons.html"><div class="icon icon-basic-lightbulb"></div>ICONS</a></li>
                                                                        <li><a href="shortcodes.html#alerts"><div class="icon icon-basic-exclamation"></div>ALERTS</a></li>
                                                                        <li><a href="shortcodes.html#modals"><div class="icon icon-basic-webpage-img-txt"></div>MODALS</a></li>
                                                                        <li><a href="shortcodes.html#pagination"><div class="icon icon-arrows-stretch-horizontal1"></div>PAGINATION</a></li>
                                                                        <li><a href="shortcodes.html#lightbox"><div class="icon icon-basic-webpage-multiple"></div>LIGHTBOX</a></li>
                                                                        <li><a href="shortcodes.html#counters-charts"><div class="icon icon-ecommerce-graph2"></div>COUNTERS & CHARTS</a></li>
                                                                        <li><a href="shortcodes.html#progress-bars"><div class="icon icon-basic-server2"></div>PROGRESS BARS</a></li>
                                                                        <li><a href="shortcodes.html#flickr-link"><div class="icon icon-basic-webpage-multiple"></div>FLICKR FEEDS</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="box col-md-3">
                                                                    <ul>
                                                                        <li><a href="typography.html#heading"><div class="icon icon-arrows-drag-vert"></div> HEADINGS</a></li>
                                                                        <li><a href="typography.html#dropcaps"><div class="icon icon-software-font-smallcaps"></div>DROPCAPS</a></li>
                                                                        <li><a href="typography.html#blockquotes"><div class="icon icon-basic-message-txt"></div>BLOCKQUOTES</a></li>
                                                                        <li><a href="typography.html#testimonials"><div class="icon icon-arrows-keyboard-cmd-29"></div>TESTIMONIALS</a></li>
                                                                        <li><a href="typography.html#pricing-tables"><div class="icon icon-basic-notebook"></div>PRICING TABLES</a></li>
                                                                        <li><a href="typography.html#cd-timeline"><div class="icon icon-arrows-drag-horiz"></div>TIMELINE</a></li>
                                                                        <li><a href="typography.html#tables"><div class="icon icon-arrows-squares"></div>TABLES</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="box col-md-3 ">
                                                                    <ul>
                                                                        <li><a href="typography.html#lists"><div class="icon icon-arrows-check"></div>LISTS</a></li>
                                                                        <li><a href="typography.html#code"><div class="icon icon-basic-webpage-txt"></div>CODE</a></li>
                                                                        <li><a href="typography.html#tooltips"><div class="icon icon-arrows-sign-right"></div>TOOLTIPS</a></li>
                                                                        <li><a href="typography.html#popover"><div class="icon icon-arrows-keyboard-right"></div>POPOVER</a></li>
                                                                        <li><a href="typography.html#highlights"><div class="icon icon-ecommerce-sale"></div>HIGHLIGHTS</a></li>
                                                                        <li><a href="typography.html#dividers"><div class="icon icon-arrows-minus"></div>DIVIDERS</a></li>
                                                                        <li><a href="shortcodes.html#media"><div class="icon icon-music-play-button"></div>MEDIA</a></li>

                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </li>
                                                    </ul>
                                                </li>					

                                                <!-- MENU ITEM -->
                                                <li id="menu-contact-info-big" class="parent megamenu">
                                                    <a href="#"><div class="main-menu-title">CONTACT</div></a>
                                                    <ul class="sub">
                                                        <li class="clearfix" >
                                                            <div class="menu-sub-container">

                                                                <div class="box col-md-3 menu-demo-info closed">
                                                                    <h5 class="title">CONTACT PAGES</h5>
                                                                    <ul>
                                                                        <li><a href="contact.html">Contact Version 1</a></li>
                                                                        <li><a href="contact2.html">Contact Version 2</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col-md-3 menu-contact-info">
                                                                    <ul class="contact-list">
                                                                        <li class="contact-loc clearfix">
                                                                            <div class="loc-icon-container">
                                                                                <span aria-hidden="true" class="icon_pin_alt main-menu-contact-icon"></span>
                                                                            </div>
                                                                            <div class="menu-contact-text-container">555 California str, Suite 100</div>
                                                                        </li>
                                                                        <li class="contact-phone clearfix">
                                                                            <div class="loc-icon-container">
                                                                                <span aria-hidden="true" class="icon_phone main-menu-contact-icon"></span>
                                                                            </div>	
                                                                            <div class="menu-contact-text-container">1-32-312-22, 1-32-112-22</div>
                                                                        </li>
                                                                        <li class="contact-mail clearfix" >
                                                                            <div class="loc-icon-container">
                                                                                <span aria-hidden="true" class="icon_mail_alt main-menu-contact-icon"></span>
                                                                            </div>
                                                                            <div class="menu-contact-text-container">							
                                                                                <a class="a-mail" href="mailto:info@haswell.com">info@haswell.com</a>
                                                                            </div>	
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col-md-6 menu-map-container hide-max-960 ">
                                                                    <!-- Google Maps -->
                                                                    <div class="google-map-container">
                                                                        <img src="<?= ASSET_URL ?>images/map-line.png" alt="alt">
                                                                    </div>
                                                                    <!-- Google Maps / End -->	
                                                                </div>

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>

                                        </nav>

                                    </div>
                                </div>
                                <!-- END main-menu -->

                            </div>
                            <!-- END container-m-30 -->

                        </div>
                        <!-- END main-menu-container -->

                        <!-- SEARCH READ DOCUMENTATION -->
                        <ul class="cd-header-buttons">
                            <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
                        </ul> <!-- cd-header-buttons -->
                        <div id="cd-search" class="cd-search">
                            <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
                                <input type="text" value="" name="q" id="q" placeholder="Search...">
                            </form>
                        </div>

                    </div>
                    <!-- END header-wrapper -->

                </header>
