<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>PetsFinder Costa Rica</title>   

<meta name="description" content="Busca y encuentra tus mascotas" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>


<body>

<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div>

    <div class="slider-text">
    	<div id="slidecaption"></div>
    </div>   
	
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        
        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
    <div class="span">
    <img src="_include/img/work/logo.png" width="180" height="90">
</div>
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
    	<nav id="menu">
        	<ul id="menu-nav">
            	<li class="current"><a href="index.php" class = "external">Inicio</a></li>
                <li><a href="registrarPersona.php" class = "external">Registrar Usuario</a></li>
                <li><a href="sesion.php" class="external">Iniciar Sesión</a></li>
          </ul>
      </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<div id="work" class="page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">PetsFinder</h2>
                   <!-- <h3 class="title-description">Check Out Our Projects on <a href="#">Dribbble</a>.</h3>-->
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Portfolio Projects -->
        <div class="row">
        	<div class="span3">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work">Opciones</li>
                        <li><a href="#filter" data-option-value="*" class="selected">Galeria</a></li>
                        <li><a href="#filter" data-option-value=".perro">Perros</a></li>
                        <li><a href="#filter" data-option-value=".gato">Gatos</a></li>
                        <li><a href="#filter" data-option-value=".otro">Otros</a></li>
                        <li></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>
            
            <div class="span9">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">
                        
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 perro">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="  " href="_include/img/work/full/1-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/1.jpg" alt="nk">
                            </li>
                        	<!-- End Item Project -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 gato">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="  " href="_include/img/work/full/4-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/4.jpg" alt="  ">
                            </li>
                            <!-- End Item Project -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 otro">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="  " href="_include/img/work/full/7-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/7.jpg" alt="  ">
                            </li>
                            <!-- End Item Project -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 otro">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="  " href="_include/img/work/full/8-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/8.jpg" alt="  ">
                            </li>
                            <!-- End Item Project -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 perro">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="  " href="_include/img/work/full/2-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/2.jpg" alt="  ">
                            </li>
                            <!-- End Item Project -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 gato">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="  " href="_include/img/work/full/5-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/5.jpg" alt="  ">
                            </li>
                            <!-- End Item Project -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 gato">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="  " href="_include/img/work/full/6-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/6.jpg" alt=" ">
                            </li>
                            <!-- End Item Project -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 perro">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="  " href="_include/img/work/full/3-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/3.jpg" alt="  ">
                            </li>
                            <!-- End Item Project -->
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 otro">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="  " href="_include/img/work/full/9-full.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/9.jpg" alt="  ">
                            </li>
                            <!-- End Item Project -->
							
                        </ul>
                    </section>
                    
                </div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- Footer -->
<footer>
    <p class="credits">&copy;2014  <a href="http://themes.alessioatzeni.com/html/brushed/" title="Brushed | Responsive One Page Template">Pets Finder Costa Rica</a> by Emmanuel Rosales y Luis Serrano</a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
    <i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->

</body>
</html>