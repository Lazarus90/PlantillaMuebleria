
<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->

<?php
session_start();
include("conexion.php");
$con = mysqli_connect($host,$user,$pw,$db) or die ("problemas con el servidor");
 ?>
<html lang="es-MX">

    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salas Expo Colón</title>

        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <link rel="stylesheet" type="text/css" href="css/w3.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- login -->
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
        <link rel="stylesheet" href="css/stylelog.css">

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">






    </head>

    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img class="w3-display-topleft" src="images/LogoExpoColon.png" width="80" height="80" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->

                   <!-- <div class="nav-collapse collapse pull-right">-->
                   <div class="nav-collapse collapse w3-display-topmiddleYo">
                        <ul class="nav w3-display-bottomright" id="top-navigation">
                            <li class="active"><a href="#home">Principal</a></li>
                            <li><a href="#service">Nuestra Esencia</a></li>
                            <li><a href="#portfolio">Productos</a></li>
                            <li><a href="#about">¿Quiénes somos?</a></li>
                            <li><a href="#clients">Clientes</a></li>
                            <li><a href="#price">Ofertas</a></li>
                            <li><a href="#contact">Contacto</a></li>
                            <li><a href="#ingresar">Ingresar</a></li>
                            <li><a href="log_out.php">Salir</a></li>
                        </ul>

                    </div>
                  <!-- End main navigation -->
                  <div class="w3-display-topright">Bienvenidodo <?php
                  if(isset($_SESSION['username'])&& !empty($_SESSION['username'])){
                   echo   $_SESSION['username'];} ?></div>

                </div>

            </div>

            <a href="#">
          <span class="glyphicon glyphicon-shopping-cart"></span>
        </a>

        </div>
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <br>
                        <!-- <div class="title"> -->
                        <!-- <div class="container"> -->
                        <h1 class="titulo_principal">Salas Expo Colón</h1>

                        <h2 class="fittext2">Bienvenido</h2>
                        <h4>Recámaras</h4>
                        <p>Salas Expo Colón te ofrece una extensa variedad de recámaras, desde el modelo más conservador a las últimas tendencias</p>
                        <a href="#conocenos" class="da-link button">Ver más</a>
                        <div class="da-img">
                            <img src="images/Slider01.jpg" alt="image01" width="320">
                        </div>
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2>Bienvenido</h2>
                        <h4>Muebles para baño</h4>
                        <p >Salas Expo Colón te ofrece una extensa variedad de muebles para que tu baño tenga una comonidad y apariencia inigualable.</p>
                        <a href="#conocenos" class="da-link button">Ver más</a>
                        <div class="da-img">
                            <img src="images/Slider02.jpg" width="320" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <div class="da-slide">
                        <h2>Bienvenido</h2>
                        <h4>Salas</h4>
                        <p>Salas Expo Colón te ofrece una enorme variedad en inumerables estilos de salas, sofás, sillones y sofá-cama</p>
                        <a href="#conocenos" class="da-link button">Ver más</a>
                        <div class="da-img">
                            <img src="images/Slider03.jpg" width="320" alt="image03">
                        </div>
                    </div>
                    <!-- Start third slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->
        <!-- Service section start -->
        <div class="section primary-section" id="service">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1>Nuestra Esencia</h1>
                    <!-- Section's title goes here -->
                    <p align="justify">El concepto de Muebles Placencia ha evolucionado del mueble al conjunto, así la sala, recamara o comedor se integraban de manera armoniosa, posteriormente para complementar llegaron los accesorios como biombos, tapetes, lámparas cuadros, espejos, mesas, jarrones y demás artículos que recrean los ambientes, pero esto no era suficiente, debido a que ciertamente no todos tenemos la idea clara de la estética, así Placencia integra el Servicio Profesional de Decoración de Interiores sin costo para nuestros clientes.
                    Así es como en nuestra constante búsqueda, Placencia Muebles se centra en los espacios con sello propio, con tal diversidad de modelos, diseño y tendencias para buscar, encontrar y aplicar personalidad única a cada espacio.
                    Hoy por hoy, la esencia consiste en generar las condiciones para recrear “los mejores momentos que en familia o con amigos hacen en casa la vida feliz” así son los momentos Placencia..</p>
                    <!--Simple description for section goes here. -->
                </div>
                <div class="row-fluid">
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="images/Service1.png" alt="service 1">
                            </div>
                            <h3>Diseños Modernos</h3>
                            <p>Siempre estamos siguiendo las últimas tendencias.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="images/Service2.png" alt="service 2" />
                            </div>
                            <h3>Mejores Precios</h3>
                            <p>Nos importa la belleza de tu hogar, pero más nos importa tu economía, por eso contamos con los mejores precios.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="images/Service3.png" alt="service 3">
                            </div>
                            <h3>Contacto Amigable</h3>
                            <p>Nuestros clientes son lo más importante por lo que al visitar nuestra sucursal te sentirás como en casa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service section end -->
        <!-- Portfolio section start -->
        <div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1 id="conocenos">Conoce nuestros productos</h1>
                    <p>Salas Expo Colón tiene una enorme variedad, partiendo desde el estilo más clásico, pasando por los retros hasta llegar a los minimalistas.</p>
                </div>

                <ul class="nav nav-pills">
                    <li class="filter" data-filter="all">
                        <a href="#noAction">Todos</a>
                    </li>
                    <li class="filter" data-filter="web">
                        <a href="#noAction">Salas</a>
                    </li>
                    <li class="filter" data-filter="photo">
                        <a href="#noAction">Recámara</a>
                    </li>
                    <li class="filter" data-filter="identity">
                        <a href="#noAction">Otros</a>
                    </li>
                </ul>
                <!-- Start details for portfolio project 1 -->
                <div id="single-project">
                    <div id="slidingDiv" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Fotos/NatashaTabacoEsquinero.png" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Sala Natasha </h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel" ></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Modelo</span>Natasha</div>
                                    <div>
                                        <span>Estilo</span>Young</div>
                                    <div>
                                        <span>Descr </span>Young: espacions limpios, cómodos y cosmopolitas</div>
                                    <div>
                                        <span>Disp</span>http://examplecomp.com</div>
                                </div>
                                <p>Esta sala es ideal para una casa pequeña o departamento, brinda un aspecto de relajación y visualmente proporciona relajación y limpieza.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 1 -->
                    <!-- Start details for portfolio project 2 -->
                    <div id="slidingDiv1" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Fotos/PragaNaranjaLinoCompleta2.png" alt="project 2">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Sala Praga</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Modelo</span>Praga</div>
                                    <div>
                                        <span>Estilo</span>Minimalista</div>
                                    <div>
                                        <span>Descr </span>Nelly: espacions limpios, cómodos y cosmopolitas</div>
                                    <div>
                                        <span>Disp</span>http://examplecomp.com</div>
                                </div>
                                <p>La recámara Nelly es un concepto ultra moderno.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 2 -->
                    <!-- Start details for portfolio project 3 -->
                    <div id="slidingDiv2" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Fotos/TerranovaEsquineraCafe2.png" alt="project 3">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Sala Terranova</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Modelo</span></div>
                                    <div>
                                        <span>Estilo</span>Moderno</div>
                                    <div>
                                        <span>Descr </span>Orange: inspirada en los frescos árboles de naranja y sus coloridos frutos</div>
                                    <div>
                                        <span>Disp</span>http://examplecomp.com</div>
                                </div>
                                <p>Esto modelo refleja limpieza y frescura a tu hogar.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 3 -->
                   <!-- Start details for portfolio project 4 -->
                    <div id="slidingDiv3" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Fotos/TerranovaVerdeSofa.png" alt="project 4">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Terranova Verde </h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Terranova</span></div>
                                    <div>
                                        <span>Date</span>July 2013</div>
                                    <div>
                                        <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                    <div>
                                        <span>Link</span>http://examplecomp.com</div>
                                </div>
                                <p>What if you gave someone a gift, and they neglected to thank you for it - would you be likely to give them another? Life is the same way. In order to attract more of the blessings that life has to offer, you must truly appreciate what you already have.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 4 -->
					<!-- Start details for portfolio project 5 -->
                    <div id="slidingDiv4" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Fotos/SalaEsquineraGris2.png" alt="project 5">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Terranova Esquinera </h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Terranova Gris</span></div>
                                    <div>
                                        <span>Date</span>July 2013</div>
                                    <div>
                                        <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                    <div>
                                        <span>Link</span>http://examplecomp.com</div>
                                </div>
                                <p>What if you gave someone a gift, and they neglected to thank you for it - would you be likely to give them another? Life is the same way. In order to attract more of the blessings that life has to offer, you must truly appreciate what you already have.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 5 -->
					<!-- Start details for portfolio project 6 -->
                    <div id="slidingDiv5" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Fotos/TerranovaVerdeSofa.png" alt="project 6">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Terranova Verde </h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Terranova</span></div>
                                    <div>
                                        <span>Date</span>July 2013</div>
                                    <div>
                                        <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                    <div>
                                        <span>Link</span>http://examplecomp.com</div>
                                </div>
                                <p>What if you gave someone a gift, and they neglected to thank you for it - would you be likely to give them another? Life is the same way. In order to attract more of the blessings that life has to offer, you must truly appreciate what you already have.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 6 -->
					<!-- Start details for portfolio project 7 -->
                    <div id="slidingDiv6" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Fotos/TerranovaVerdeSofa.png" alt="project 7">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Terranova Verde </h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Terranova</span></div>
                                    <div>
                                        <span>Date</span>July 2013</div>
                                    <div>
                                        <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                    <div>
                                        <span>Link</span>http://examplecomp.com</div>
                                </div>
                                <p>What if you gave someone a gift, and they neglected to thank you for it - would you be likely to give them another? Life is the same way. In order to attract more of the blessings that life has to offer, you must truly appreciate what you already have.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 7 -->
                    <!-- Start details for portfolio project 8 -->
                    <div id="slidingDiv7" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Fotos/TerranovaVerdeSofa.png" alt="project 4">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Terranova Verde </h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Terranova</span></div>
                                    <div>
                                        <span>Date</span>July 2013</div>
                                    <div>
                                        <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                    <div>
                                        <span>Link</span>http://examplecomp.com</div>
                                </div>
                                <p>What if you gave someone a gift, and they neglected to thank you for it - would you be likely to give them another? Life is the same way. In order to attract more of the blessings that life has to offer, you must truly appreciate what you already have.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 8 -->
                    <!-- Start details for portfolio project 9 -->
                    <div id="slidingDiv8" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/Portfolio09.png" alt="project 9">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>Sala Modelo Terranova</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Sala</span>Modelo Terranova</div>
                                    <div>
                                        <span>Date</span>July 2013</div>
                                    <div>
                                        <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                    <div>
                                        <span>Link</span>http://examplecomp.com</div>
                                </div>
                                <p>I learned that we can do anything, but we can't do everything... at least not at the same time. So think of your priorities not in terms of what activities you do, but when you do them. Timing is everything.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 9 -->
                    <ul id="portfolio-grid" class="thumbnails row">
                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="images/Fotos/NatashaTabaco2.png" alt="project 1">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Sala</h3>
                                <p>Modelo Natasha...</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/Fotos/PragaNaranjaLinoCompleta.png" alt="project 2">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv1">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Sala </h3>
                                <p>Modelo Praga...</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="images/Fotos/TerranovaEsquineraCafe.png" alt="project 3">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv2">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Sala</h3>
                                <p> Modelo Terranova Esquinera...</p>
                                <div class="mask"></div>
                            </div>
                        </li>

                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/Fotos/TerranovaVerdeCompleta.png" alt="project 4">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Sala</h3>
                                <p>Modelo Terranova...</p>
                                <div class="mask"></div>
                            </div>
                        </li>

						 <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/Fotos/SalaEsquineraGris2.png" alt="project 5">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Sala</h3>
                                <p>Modelo Terranova...</p>
                                <div class="mask"></div>
                            </div>
                        </li>

						 <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/Fotos/TerranovaVerdeCompleta.png" alt="project 6">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Sala</h3>
                                <p>Modelo Terranova...</p>
                                <div class="mask"></div>
                            </div>
                        </li>

						 <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/Fotos/TerranovaVerdeCompleta.png" alt="project 7">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Sala</h3>
                                <p>Modelo Terranova...</p>
                                <div class="mask"></div>
                            </div>
                        </li>

						 <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/Fotos/TerranovaVerdeCompleta.png" alt="project 8">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Sala</h3>
                                <p>Modelo Terranova...</p>
                                <div class="mask"></div>
                            </div>
                        </li>

						 <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/Fotos/TerranovaVerdeCompleta.png" alt="project 9">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Sala</h3>
                                <p>Modelo Terranova...</p>
                                <div class="mask"></div>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <!-- Portfolio section end -->
        <!-- About us section start -->
        <div class="section primary-section" id="about">
            <div class="triangle"></div>
            <div class="container">
                <div class="title">
                    <h1>¿Quiénes Somos?</h1>
                    <p align="justify">Somos una empresa fabricante de muebles comprometida a enriquecer las vidas y experiencias de cada familia y negocio. trabajamos para que nuestros productos, elaborados artesanalmente, les acompañen siempre mediante una amplia gama de diseños aptos a sus necesidades dentro de los estándares más altos y de calidad.</p>
                </div>
                <div class="row-fluid team">
                    <div class="span4" id="first-person">
                        <div class="thumbnail">
                            <img src="images/Team1.png" alt="team 1">
                            <h3>John Doe</h3>
                            <ul class="social">
                                <li>
                                    <a href="">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Copywriter</h2>
                                <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="second-person">
                        <div class="thumbnail">
                            <img src="images/Team2.png" alt="team 1">
                            <h3>John Doe</h3>
                            <ul class="social">
                                <li>
                                    <a href="">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Designer</h2>
                                <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="third-person">
                        <div class="thumbnail">
                            <img src="images/Team3.png" alt="team 1">
                            <h3>John Doe</h3>
                            <ul class="social">
                                <li>
                                    <a href="">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Photographer</h2>
                                <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-text centered">
                    <h3>Acerca de...</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                </div>
                <h3>Nuestros clientes nos califican nuestras sucursales</h3>
                <div class="row-fluid">
                    <div class="span6">
                        <ul class="skills">
                            <li>
                                <span class="bar" data-width="90%"></span>
                                <h3>Guadalajara</h3>
                            </li>
                            <li>
                                <span class="bar" data-width="95%"></span>
                                <h3>Monterrey</h3>
                            </li>
                            <li>
                                <span class="bar" data-width="89%"></span>
                                <h3>CDMX</h3>
                            </li>
                            <li>
                                <span class="bar" data-width="78%"></span>
                                <h3>Querétaro</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="span6">
                        <div class="highlighted-box center">
                            <h1>Nuestro objetivo</h1>
                            <p>Nuestro principal objetivo es proporcionarte la seguridad de que nuestros productos son duraderos y funcionales, con la innovación y vanguardia que el ramo necesita. Dicho nos han posicionado como empresa líder en el ramo.
                            Enviamos a toda la Republica Mexicana al más bajo costo y personalizamos sus pedidos.Disfrute de la excelencia y calidad al mejor precio....</p>
                            <button class="button button-sp">Join Us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About us section end -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">La elegancia no es la abundancia de la sencillez. Es la ausencia de complejidad..</p>
                <a href="#" class="button">Volver al inicio</a>
            </div>
        </div>
        <!-- Client section start -->
        <!-- Client section start -->
        <div id="clients">
            <div class="section primary-section">
                <div class="triangle"></div>
                <div class="container">
                    <div class="title">
                        <h1>Comentarios de nuestros clientes</h1>
                        <p>Ya vimos las calificaciones por sucursal, pero aquí observamos algunos comentarios hechos por nuestros clientes.</p>
                    </div>
                    <div class="row">
                        <div class="span4">
                            <div class="testimonial">
                                <p>"Excelentes diseño de sus productos y la mejor calidad, sin mencionar los precios tan accesibles en todos sus productos."</p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="images/Client1.png" class="centered" alt="client 1">
                                    <strong>Jen Selter
                                        <small>Cliente</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="testimonial">
                                <p>"La mejor tienda de muebles."</p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="images/Client2.png" class="centered" alt="client 2">
                                    <strong>Maria Sharapova
                                        <small>Client</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="testimonial">
                                <p>"Fui a la sucursal de Guadalajara y es enorme, tienen una gran variedad de muebles para todo el hogar."</p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="images/Client3.png" class="centered" alt="client 3">
                                    <strong>Angelina Jolie
                                        <small>Client</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">
                        "La Perfección Se Logra No Cuando No Hay Nada Más Que Añadir, Pero Cuando No Queda Nada Para Quitar"
                    </p>
                </div>
            </div>
        </div>
        <div class="section third-section">
            <div class="container centered">
                <div class="sub-section">
                    <div class="title clearfix">
                        <div class="pull-left">
                            <h3>Nuestros Clientes</h3>
                        </div>
                        <ul class="client-nav pull-right">
                            <li id="client-prev"></li>
                            <li id="client-next"></li>
                        </ul>
                    </div>
                    <ul class="row client-slider" id="clint-slider">
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo01.png" alt="client logo 1">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo02.png" alt="client logo 2">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo03.png" alt="client logo 3">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo04.png" alt="client logo 4">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo05.png" alt="client logo 5">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo02.png" alt="client logo 6">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="images/clients/ClientLogo04.png" alt="client logo 7">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Price section start -->
        <div id="price" class="section secondary-section">
            <div class="container">
                <div class="title">
                    <h1>Ofertas</h1>
                    <p>Contamos con descuentos desde 10% a 50%, además de 12 meses sin intereses con tarjetas participantes.</p>

                </div>
                <div class="price-table row-fluid">
                    <div class="span4 price-column">
                        <h3>Sala Calibri</h3>
                        <ul class="list">
                            <li class="price">$19,99</li>
                            <li><strong>Minimalista</strong> Modern</li>
                            <li><strong>12 meses</strong> sin intereses</li>
                            <li><strong>20% adicional</strong> contado</li>
                        </ul>
                        <a href="#" class="button button-ps">Comprar</a>
                    </div>
                    <div class="span4 price-column">
                        <h3>Recámara Paul</h3>
                        <ul class="list">
                            <li class="price">$39,99</li>
                            <li><strong>Clásico</strong>Vanguardista</li>
                            <li><strong>12 meses</strong> sin intereses</li>
                            <li><strong>10%</strong> contado</li>
                        </ul>
                        <a href="#" class="button button-ps">Comprar</a>
                    </div>
                    <div class="span4 price-column">
                        <h3>Sillón Vie</h3>
                        <ul class="list">
                            <li class="price">$79,99</li>
                            <li><strong>Vintage</strong> Out</li>
                            <li><strong>6 meses</strong> sin intereses</li>
                            <li><strong>Cojines</strong> de regalo</li>
                        </ul>
                        <a href="#" class="button button-ps">Comprar</a>
                    </div>
                </div>
                <div class="centered">
                    <p class="price-text">Contáctanos para conocer otras ofertas.</p>
                    <a href="#contact" class="button">Contactanos</a>
                </div>
            </div>
        </div>
        <!-- Price section end -->
        <!-- Newsletter section start -->
        <div class="section third-section">
            <div class="container newsletter">
                <div class="sub-section">
                    <div class="title clearfix">
                        <div class="pull-left">
                            <h3>¿Deseas recibir información de nuestras promociones?</h3>
                        </div>
                    </div>
                </div>
                <div id="success-subscribe" class="alert alert-success invisible">
                    <strong>Listo!</strong>Suscripción satisfactoria.</div>
                <div class="row-fluid">
                    <div class="span5">
                        <p>Si te interesa recibir información acerca de nuestras promociones y lanzamientos de productos, déjanos tu e-mail.</p>
                    </div>
                    <div class="span7">
                        <form class="inline-form">
                            <input type="email" name="email" id="nlmail" class="span8" placeholder="Ingresa tu email" required />
                            <button id="subscribe" class="button button-sp">Suscribirme</button>
                        </form>
                        <div id="err-subscribe" class="error centered">Por favor ingresa una dirección de email válida.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter section end -->
        <!-- Contact section start -->
        <div id="contact" class="contact">
            <div class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1>Contáctanos</h1>
                        <p>Muebles Expo Colón siempre cerca de tu hogar.</p>
                    </div>
                </div>
                <div class="map-wrapper">
                    <div class="map-canvas" id="map-canvas">Cargando mapa...</div>
                    <div class="container">
                        <div class="row-fluid">
                            <div class="span5 contact-form centered">
                                <h3>Hola</h3>
                                <div id="successSend" class="alert alert-success invisible">
                                    <strong>Listo!</strong>Tu mensaje se ha enviado.</div>
                                <div id="errorSend" class="alert alert-error invisible">Ocurrió un error.</div>
                                <form id="contact-form" action="php/mail.php">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="text" id="name" name="name" placeholder="* Tu nombre..." />
                                            <div class="error left-align" id="err-name">Ingresa tu nombre.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="email" name="email" id="email" placeholder="* Tu email..." />
                                            <div class="error left-align" id="err-email">Por favor ingresa una dirección de email válida.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span12" name="comment" id="comment" placeholder="* Comentarios..."></textarea>
                                            <div class="error left-align" id="err-comment">Por favor ingresa tu comentario.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="send-mail" class="message-btn">Enviar mensaje</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<!-- __________________________________________________ Ingresar-->

<div id="ingresar">

  <form action="verificar.php" method = "post" name="form">
<div class="login-wrap">
<div class="login-html">
<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
<div class="login-form">
<div class="sign-in-htm">
<!--  -->
  <div class="group">
    <label for="user" class="label">Username</label>
    <input id="usuario" type="text" name="usuario" class="input">
<!--    <input type="text" class="form-control" placeholder="Ingresa tu usuario" name="usuario" id="usuario" >  -->
  </div>
  <div class="group">
    <label for="pass" class="label">Password</label>
    <input id="contra" type="password" name="pw" class="input" data-type="password">
  </div>
  <div class="group">
    <input id="check" type="checkbox" class="check" checked>
    <label for="check"><span class="icon"></span> Keep me Signed in</label>
  </div>

  <div class="group">
    <input type="submit" class="button" value="Sign In">
      <!--   <button type="submit" style="margin-top: 5px;"  id = "boton" onclick="return vlid()" class="btn btn-primary">Iniciar sesion</button>  -->
  </div>
</form>
  <div class="hr"></div>

    <form action="registar.php" method = "post" name="form">
  <div class="foot-lnk">
    <a href="#forgot">Forgot Password?</a>
  </div>
</div>
<div class="sign-up-htm">
  <div class="group">
    <label for="user" class="label">Username</label>
    <input id="user" type="text" class="input">
  </div>
  <div class="group">
    <label for="pass" class="label">Password</label>
    <input id="pass" type="password" class="input" data-type="password">
  </div>
  <div class="group">
    <label for="pass" class="label">Repeat Password</label>
    <input id="pass" type="password" class="input" data-type="password">
  </div>
  <div class="group">
    <label for="pass" class="label">Email Address</label>
    <input id="pass" type="text" class="input">
  </div>
  <div class="group">
    <input type="submit" class="button" value="Sign Up">
  </div>
  <div class="hr"></div>
  <div class="foot-lnk">
    <label for="tab-1">Already Member?</a>
  </div>
</div>
</form>
</div>
</div>
</div>

</div>

<!-- __________________________________________________________________ -->

                <div class="container">
                    <div class="span9 center contact-info">
                        <p >Av. Colón #1457, Col. Colón,C.P. 11000</p>
                        <p class="info-mail">contacto@expocolon.com</p>
                        <p>+33 36 33 44 55 66</p>

                        <div class="title">
                            <h3>Búscanos en la red social de tu preferencia</h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-pinterest-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section edn -->
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; Proyecto Final Programación Web, <a href="http://goo.gl/NM84K2">2017-A By Graphberry.</a></p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <!--<script async="" defer="" type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>-->
        <script async type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>


        <script src="js/ingresar.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<!--        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
    </body>
</html>
