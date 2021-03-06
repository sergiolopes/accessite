<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />

    <title>Nome do Local - AccesSite</title>

    <!-- Included CSS Files -->
    <link rel="stylesheet" href="stylesheets/app.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <script src="javascripts/foundation/modernizr.foundation.js"></script>

</head>

<body id="page" class="off-canvas hide-extras">
	<div class="container">

		<div class="header-holder">
            <header id="header" class="row">
                <div class="four columns mobile-four">
                    <a href="index.html" class="site-title"><img src="http://placehold.it/238x91&amp;text=Logo" alt="Accessite"></a>
                </div>
                <div class="eight columns phone-two">
                    <nav id="menu" role="navigation" class="right hide-for-small">
                        <ul id="mainNav" class="nav-bar">
                            <li><a href="institucional.html">Institucional</a></li>
                            <li class="current-page"><a href="locais.html">Locais Acessíveis</a></li>
                            <li><a href="noticias.html">Noticias</a></li>
                            <li><a href="eventos.html">Eventos</a></li>
                            <li><a href="parceiros.html">Parceiros</a></li>
                            <li><a href="contato.html">Contato</a></li>
                        </ul>
                    </nav>
                    <p class="show-for-small">
                    <a class='sidebar-button button' id="sidebarButton" href="#sidebar" >Menu</a>
                    </p>
                </div>
                <div class="five columns hide-for-small">
                    <form action="resultado-busca-locais.html" name="form-busca" id="form-busca">
                        <div class="row collapse">
                            <div class="left nine"><input type="search" name="busca" id="busca" placeholder="O que está Procurando?"></div>
                            <div class="right"><input type="submit" value="Buscar" class="postfix button"></div>
                        </div>
                    </form>
                </div>
            </header>
        </div>

		<div class="row">
      		<div role="main">
                <div class="row">
                    <div class="twelve columns">
                        <div class="img-destaque-interna bg-loader mobileimg" data-srcfull="http://placehold.it/994x298&text=[Topo de Noticias]" data-widthfull="994" data-heightfull="298"></div>
                        <span class="hide-for-small"><hr /></span>
                    </div>
                </div>

                <section class="row">

                    <article class="twelve columns">
                        <h1>Nome do Estabelecimento</h1>
                        <h2>Qualificação: 10</h2>

                        <p>Endereço: Rua Lorem Ipsum, Bairro Amet.</p>

                        <h3>O Local</h3>
                        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef. Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

                        <div class="row twelve columns galeria-locais">
                            <div class="three columns"><img src="http://placehold.it/400x300&text=[thumb local]" width="400" height="300"/></div>
                            <div class="three columns"><img src="http://placehold.it/400x300&text=[thumb local]" width="400" height="300"/></div>
                            <div class="three columns"><img src="http://placehold.it/400x300&text=[thumb local]" width="400" height="300"/></div>
                            <div class="three columns"><img src="http://placehold.it/400x300&text=[thumb local]" width="400" height="300"/></div>
                        </div>

                        <h4>Acessibilidade do Local</h4>
                        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef. Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>

                        <div class="twelve left">
                            <?php function data_uri($file, $mime) {
                              $contents=file_get_contents($file);
                              $base64=base64_encode($contents);
                              echo "data:$mime;base64,$base64";
                            }?>
                            <img src="<?php data_uri('images/img-mapa-full.jpg', 'image/jpeg'); ?>" id="testeimg"/>
                        </div>
                    </article>

                </section>
      		</div>

      		<section id="sidebar" role="complementary">
                <nav id="sideMenu" role="navigation">
                    <h3>Paginas</h3>
                    <ul id="sideMainNav" class="nav-bar">
                        <li><a href="index.html"><i class="foundicon-home"></i>Home</a></li>
                        <li class="current-page"><a href="locais.html"><i class="foundicon-location"></i>Locais Acessíveis</a></li>
                        <li><a href="noticias.html"><i class="foundicon-website"></i>Noticias</a></li>
                        <li><a href="contato.html"><i class="foundicon-mail"></i>Contato</a></li>
                        <li><a href="login.html"><i class="foundicon-lock"></i>Login</a></li>
                    </ul>
                    <h3>Categorias</h3>
                    <ul id="sideMainNav" class="nav-bar">
                        <li><a href="#">Alimentação</a></li>
                        <li><a href="#">Cultura</a></li>
                        <li><a href="#">Diversão</a></li>
                        <li><a href="#">Educação</a></li>
                        <li><a href="#">Lazer</a></li>
                        <li><a href="#">Outros</a></li>
                    </ul>
                </nav>
      		</section>

    	</div>

        <div class="footer-holder">
            <footer class="row">
                <div class="twelve columns">
                    <div class="row">
                        <div class="five columns">
                            <img src="images/footer-instituto.png" alt="Instituto Felipe Stelzer">
                        </div>
                        <div class="seven columns menu-mobile-footer">
                            <ul class="link-list right">
                                <li class="mobile-four"><a href="institucional.html">Institucional</a></li>
                                <li class="mobile-four"><a href="index.html">Home</a></li>
                                <li class="mobile-four"><a href="locais.html">Locais Acessíveis</a></li>
                                <li class="mobile-four"><a href="noticias.html">Noticias</a></li>
                                <li class="mobile-four"><a href="eventos.html">Eventos</a></li>
                                <li class="mobile-four"><a href="parceiros.html">Parceiros</a></li>
                                <li class="mobile-four"><a href="contato.html">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Included JS Files -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="javascripts/foundation/jquery.js"><\/script>')</script>
    <script src="javascripts/build.js"></script>
    <script src="javascripts/main.js"></script>
    <!--[if IE]>
    <script src="javascripts/iefix/matchMedia.js"></script>
    <script src="javascripts/iefix/mobileimg_ie.js"></script>
    <![endif]-->

</body>