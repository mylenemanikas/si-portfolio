<!DOCTYPE>
<html>
<!--[if lt IE 7]>     <!-- <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>        <!-- <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>        <!-- <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><!-- <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mylène Manikas</title>
    <meta name="description" content="...">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link href='{{asset("assets/bootstrap/css/bootstrap.min.css")}}' rel="stylesheet">
    <link href='{{asset("assets/css/style.css")}}' rel="stylesheet">
    <link href='{{asset("assets/css/stylemylene.css")}}' rel="stylesheet">
    <link href='{{asset("assets/font-awesome/css/font-awesome.min.css")}}' rel="stylesheet">
    <link href='{{asset("assets/css/owl.carousel.css")}}' rel="stylesheet">
    <link href='{{asset("assets/css/animate.css")}}' rel="stylesheet">
    <link href='{{asset("assets/css/magnific-popup.css")}}' rel="stylesheet">


    <!-- Modernizr -->
    <script src='{{asset("assets/js/modernizr-2.6.2.min.js")}}'></script>

    <!-- Google font -->
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type='text/css'>

    <script>
        var mainColor = 'blue';
    </script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="70">
<!--[if lt IE 7]>
<!--<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="wrapper">

    <!-- Home: carousel -->
    <div id="home" class="section carousel slide home-carousel carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item item-1 active">
                <div class="container">
                    <div class="content">
                        <div class="logo wow bounceInDown" data-wow-duration="1s" data-wow-delay=".5s"><div class="wrap"><div>M</div></div></div>
                        <div class="text font-white">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
                                    <h1 class="wow bounceInUp">Mylène Manikas</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item-2 striped-image">
                <div class="container">
                    <div class="content">
                        <div class="logo wow bounceInDown" data-wow-duration="1s" data-wow-delay=".5s"><div class="wrap"><div>M</div>web</div></div>
                        <div class="text font-white">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
                                    <h1 class="wow bounceInRight">Integrateur Web</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item-3 striped-image">
                <div class="container">
                    <div class="content">
                        <div class="logo wow bounceInDown" data-wow-duration="1s" data-wow-delay=".5s"><div class="wrap"><div>M</div>web</div></div>
                        <div class="text font-white">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
                                    <h1 class="wow bounceInDown">Développeur Web</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="item item-4 striped-image">
                <div class="container">
                    <div class="content">
                        <div class="logo wow bounceInDown" data-wow-duration="1s" data-wow-delay=".5s"><div class="wrap"><div>M</div>vidéo</div></div>
                        <div class="text font-white">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
                                    <h1 class="wow bounceInRight">Réalisatrice  Cadreuse Monteuse</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <div class="carousel-controls">
            <div class="carousel-nav">
                <div class="container">
                    <a class="prev carousel-control" href=".home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="next carousel-control" href=".home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>


        <!-- Scroll to the next section -->
        <a class="j-scroll scrollDown" href={{asset("#competences")}}>
            <span class="fa fa-arrow-circle-down"></span>
        </a>
    </div>




    <!-- Header -->
    <header id="header">
        <!-- Static navbar -->
        <div class="navbar navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle visible-xs" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand j-scroll" href="#home">M</a>
                </div>
                <nav class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href={{asset("#home")}} class="j-scroll" title="Home">Accueil</a></li>
                        <li><a href={{asset("#competences")}} class="j-scroll" title="competences">Compétences</a></li>
                        <li><a href={{asset("#portfolio")}} class="j-scroll" title="Portfolio">Curriculum Vitae</a></li>
                        <li><a href={{asset("#blog")}} class="j-scroll" title="Blog">Actualité</a></li>
                        <li><a href={{asset("#team")}} class="j-scroll" title="Our team">Références</a></li>
                        <li><a href={{asset("#contact")}} class="j-scroll" title="Contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Section: Services -->
    <section id="competences">
        <div class="container">
            <!-- Header -->
            <header>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 wow fadeInDown">
                        <h1>Compétences</h1>
                        <div class="dotted-break">
                            <span></span><span></span><span></span><span></span><span></span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <div class="row">
                <div class="col-xs-6 col-sm-6 i wow fadeInLeft animated" data-wow-duration="0.5s" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-0 col-lg-4 icon">
                            <div class="c">
                                <div class="fill">
                                    <img src={{asset("img/code.jpg")}} width="128" height="130">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-7 col-lg-8">
                            <h3>REALISATION DE SITE WEB</h3>
                            <p>Intégrateur / Développeur Web depuis 2015</p>
                            <p>Réalisation de site internet a l'aide d'outil d'integration et de développement: HTML5, CSS3, Javascript, Laravel, Bootstrap,Materialize, PHP, mySQL, JQUERY, Wordpress...
                                Importance accordé au responsive design.  <a href="#" data-toggle="modal" data-target="#modalText">more...</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 i wow fadeInRight animated" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-0 col-lg-4 icon">
                            <div class="c">
                                <div class="fill">
                                    <img src='{{asset("img/multicamera.png")}}' alt="" width="128" height="130">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-7 col-lg-8">
                            <h3>TOURNAGE EN MULTICAMERA</h3>
                            <p>Réalisatrice depuis 2011
                            </p>
                            <p>Réalisation en live pour des sociétés évènementiels et de production. Utilisation de l'anycast et anycast touch de Sony, du logiciel blackmagic, du mélangeur panasonic av-hs400.
                                Utilisation de caméras robotisées Sony BRC-Z330 et d'un panneau de commande à distance pour caméras BRC : Sony RM-IP10.<a href="#" data-toggle="modal" data-target="#modalText">more...</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 i wow fadeInLeft animated" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-0 col-lg-4 icon">
                            <div class="c">
                                <div class="fill">
                                    <img src='{{asset("img/monteur.png")}}' width="128" height="130">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-7 col-lg-8">
                            <h3>MONTEUR</h3>
                            <p>Monteuse depuis 2010
                            </p>
                            <p>Montage sur Final cut pro 7, Final cut pro x et Première pro et en formation sur le logiciel AVID.
                                Réalisation de nombreux reportages journalistique, films d'entreprise, clips, courts métrages, publicité, documentaire, montage en multicaméra.
                                Utilisation des logiciels After effect et photoshop pour l'habillage des vidéos. <a href="#" data-toggle="modal" data-target="#modalText">more...</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 i wow fadeInRight animated" data-wow-duration="0.5s" data-wow-delay="0.4s">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-0 col-lg-4 icon">
                            <div class="c">
                                <div class="fill">
                                    <img src='{{asset("img/cadreur.jpg")}}' alt="" width="128" height="130">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-7 col-lg-8">
                            <h3>CADREUR</h3>
                            <p>Cadreuse depuis 2010
                            </p>
                            <p>Achat: XF100 de Canon,  pieds manfrotto 701 HDV, 2 cartes flash de 32 gigas, EOS 7D - 50 mm, micro main, XLR 5m
                                Caméra utilisé: C100, C300, 5D markIII, XF105, Z5, Z7, EX1, EX3,...
                                Son: Micro HF, table de mixage, micro main
                                Lumière: Madarine, Chimera, Kino Flo, Litepanels, Blonde, Boule chinoise<a href="#" data-toggle="modal" data-target="#modalText">more...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About -->
    <section id="about" >
        <div class="container">
            <!-- Header
            <header class="font-white">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 wow fadeInDown">
                        <h1>About</h1>
                        <div class="dotted-break">
                            <span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h2>Our handy skills</h2>
                        <p>Nulla diam ex, aliquet vel iaculis vitae, consectetur et lectus. Mauris eu scelerisque ligula. Fusce in purus accumsan, faucibus lorem eget, posuere eros. Etiam ultricies vel leo at euismod. Morbi id nisi vitae felis consequat consequat ut non arcu.</p>
                    </div>
                </div>
            </header>-->

            <!-- Content -->
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <!--<img src="img/phone.png" alt="" width="514" height="336" class="img-responsive wow bounceInLeft">-->
                    <ul class="skills">
                        <li><div class="wow animated fadeInLeft" data-wow-duration="1s" data-delay="0.2s" style="width: 80%">FINAL CUT PRO 7 / 90%</div></li>
                        <li><div class="wow animated fadeInLeft" data-wow-duration="1s" data-delay="0.2s" style="width: 80%">HTML5 / 80%</div></li>
                        <li><div class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s" style="width: 80%">CSS3 / 80%</div></li>
                        <li><div class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s" style="width: 80%">BOOTSTRAP / 80%</div></li>
                        <li><div class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.8s" style="width: 65%">PHP / 60%</div></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <ul class="skills">
                        <li><div class="wow animated fadeInLeft" data-wow-duration="1s" data-delay="0.2s" style="width: 50%">JAVASCRIPT / 50%</div></li>
                        <li><div class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s" style="width: 60%">AFTER EFFECT / 60%</div></li>
                        <li><div class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s" style="width: 55%">PHOTOSHOP / 55%</div></li>
                        <li><div class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.8s" style="width: 60%">LARAVEL / 60%</div></li>
                        <li><div class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.8s" style="width: 60%">MySQL / 60%</div></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- cv -->
    <!-- Portfolio -->
    <section id="portfolio">
        <div class="container">
            <!-- Header -->
            <header>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 wow fadeInDown">
                        <h1>Curriculum Vitae</h1>
                        <div class="dotted-break">
                            <span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h2>A propos</h2>
                        <p>Récemment en poste, en tant que cadreuse / monteuse, au sein d’une société de production audiovisuelle, j’ai eu la responsabilité de nombreux projets auprès de clients tels qu’AXA, EDF, CASTORAMA, ARC, HSBC, L'OREAL, RENAULT, LE MONDE, LES ECHOS, IBM, CIC, SFR, ORANGE ...

                            Je souhaite aujourd'hui faire un virage dans ma carrière. C'est pour cela que que j'ai décidé de me former au métier d'intégrateur / développeur web. Mes différentes formations m'ont permis d'acquérir des compétences qui me permettent aujourd'hui de créer des sites internet de A à Z. </p>


                    <p><strong>Si vous souhaitez consulter mon CV au format pdf:</strong></p>

                <a target="_blank" class="btn btn-rounded btn-info btn-block" href='{{asset("assets/download/cvmylenemanikas.pdf")}}'>veuillez cliquer sur ce lien</a>
                    </div>
                    </div>
            </header>
        </div>
    </section>

    <!-- Video -->
    <section class="video">
        <div class="parallax js-video" data-mfp-src="https://vimeo.com/117274595">
            <div class="container content">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
							<span class="icon">
								<i class="fa fa-play"></i>
							</span>
                        <h2>Bande Démo</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- actualite -->
    <section id="blog">
        <div class="container">
            <!-- Header -->
            <header>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 wow fadeInDown">
                        <h1>actualite</h1>
                        <div class="dotted-break">
                            <span></span><span></span><span></span><span></span><span></span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <div class="row articles">

                <!-- Article -->
                <article class="col-xs-6 article wow animated fadeInLeft">

                        <div class="wrap c borderedHover">

                            <img src="img/maquette.png" width="600" height="350" class="img-responsive">
                        </div>

                    <div class="row">
                        <div class="col-lg-2 visible-lg asideArticleInfo">
                            <div class="date">
                                <div class="day"></div>
                                <div class="month">2016</div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <h3><!--<a href="blog-detail.html" title="#">-->Création de site internet: intégration/développement<!--</a>--></h3>

                            <p>Intégration de maquette en HTML 5, CSS3, BOOTSTRAP. Création d'un site réalisé sous le framework LARAVEL: Allomovies et d'un site portfolio.
                            </p>
                            <p>Vous retrouverez mes derniers projets sur github en cliquant sur ce lien <a target="_blank" href="https://github.com/mylenemanikas/"> Github Mylene MANIKAS</a></p>
                        </div>
                    </div>

                </article>

                <!-- Article  -->
                <article class="col-xs-6 article wow animated fadeInRight">

                        <div class="wrap c borderedHover">
                            <img src="img/big.png"  class="img-responsive troiswa">
                        </div>

                    <div class="row">
                        <div class="col-lg-2 visible-lg asideArticleInfo">
                            <div class="date">
                                <div class="day"></div>
                                <div class="month">janvier à mars 2016</div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <h3><!--<a href="actualite-detail.html" title="#">-->FORMATION 3w Academy<!--</a>--></h3>

                            <p> 400 heures de cours répartis sur 57 jours
                                HTML5, CSS3, JavaScript, PHP, MySQL, JQUERY, SASS, LARAVEL,BOOTSTRAP, GITHUB
                                10 % de théorie et 90 % de pratique </p>
                        </div>
                    </div>
                </article>
            </div>

            <!-- More posts -->
            <!--<div class="text-center">
                <a href="actualite-listing.html" title="#" class="btn btn-default btn-lg morePosts"><i class="fa fa-plus"></i> More posts</a>
            </div>-->
        </div>
    </section>

    <!-- references -->
    <section id="team">
        <div class="container">
            <!-- Header -->
            <header>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 wow fadeInDown">
                        <h1>Références</h1>
                        <div class="dotted-break">
                            <span></span><span></span><span></span><span></span><span></span>
                        </div>
                    </div>
                </div>
            </header>

            <div class="row espacementreference">

                <div class="col-xs-6 col-md-3">
                        <img src="tmp/lemonde.jpg" class="thumbnail lemonde">
                </div>

                <div class="col-xs-6 col-md-3">
                    <img src="tmp/axa.jpg" class="thumbnail axa">
                </div>
                <div class="col-xs-6 col-md-3">
                    <img src="tmp/loreal.jpg" class="thumbnail loreal">
                </div>
                <div class="col-xs-6 col-md-3">
                    <img src="tmp/orange.jpg" class="thumbnail orange">
                </div>

            </div>
            <div class="row espacementreference">

                <div class="col-xs-6 col-md-3">
                    <img src="tmp/ARC.jpg" class="thumbnail arc" >
                </div>

                <div class="col-xs-6 col-md-3">
                    <img src="tmp/castorama.png" class="thumbnail castorama">
                </div>
                <div class="col-xs-6 col-md-3">
                    <img src="tmp/cic.jpg" class="thumbnail cic">
                </div>
                <div class="col-xs-6 col-md-3">
                    <img src="tmp/sfr.jpg" class="thumbnail sfr">
                </div>

            </div>
</section>

<!-- Contact -->
<section id="contact" >
    <div class="container">
        <!-- Header -->
        <header class="font-white">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 wow fadeInDown">
                    <h1>Contact</h1>
                    <div class="dotted-break">
                        <span></span><span></span><span></span><span></span><span></span>
                    </div>
                    <h2>Mylène MANIKAS</h2>
                </div>
            </div>
        </header>

        <!-- Content -->
        <div class="row">
            <div class="col-xs-12 info">
               <!-- <span class="wow fadeInRight" data-wow-delay="0.2s"><i class="fa fa-location-arrow icon"></i> 9532 Lexington Ave, New York, NY 10021</span>-->
                <span class="wow fadeInRight" data-wow-delay="0.4s"><i class="fa fa-envelope-o icon"></i>mylene.manikas@gmail.com</span>
                <span class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-phone icon"></i>+33649060588</span>
            </div>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <form role="form" method="post" data-parsley-validate action="{{route('formulaire')}}">
                    {{csrf_field()}}
                    <input  name="nom" type="text" class="form-control wow fadeInLeft" data-wow-delay="0.2s" placeholder="Nom" required data-parsley-error-message="Entrer nom">
                    <input name="prenom" type="text" class="form-control wow fadeInLeft" data-wow-delay="0.2s" placeholder="Prenom" required data-parsley-error-message="Entrer prenom">
                    <input name="email" type="email" class="form-control wow fadeInLeft" data-wow-delay="0.4s" placeholder="Email" required data-parsley-error-message="Entrer email">
                    <textarea name="message"class="form-control wow fadeInLeft" data-wow-delay="0.6s" rows="6" placeholder="Message" required data-parsley-error-message="Entrer message"></textarea>
                    <button type="submit" class="btn btn-lg wow fadeInUp" data-wow-delay="1s">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>
 <!-- Google map -->
<!--<div class="googleMapWrap">
    <div id="googleMap" class="wow flipInX" data-lat="40.712784" data-lng="-74.005941"></div>
</div>-->

<footer id="footer">
    <div class="social">

        <a target="_blank" href="https://twitter.com/mylenemanikas" title="#" class="icon"><i class="fa fa-twitter"></i></a>
        <a target="_blank" href="https://www.linkedin.com/in/mylene-manikas-2132852b" title="#" class="icon"><i class="fa fa-linkedin"></i></a>
        <a target="_blank" href="#" title="#" class="icon"><i class="fa fa-viadeo"></i></a>
    </div>

    <div>© 2016 Mylène MANIKAS</div>
</footer>

</div>

<!-- Modals -->
<div class="modal fade" id="modalText" tabindex="-1" role="dialog" aria-labelledby="modalText" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-times"></span></button>
                <h4 class="modal-title" id="myModalLabel">This might be a detail of simple article</h4>
                <div class="info subtitle"><span class="fa fa-calendar"></span> 26th march 2014  |  <span class="fa fa-user"></span> John Doe</div>
            </div>
            <p class="intro">Nulla diam ex, aliquet vel iaculis vitae, consectetur et lectus. Mauris eu scelerisque ligula. Fusce in purus accumsan, faucibus lorem eget, posuere eros. Etiam ultricies vel leo at euismod. Morbi id nisi vitae felis consequat consequat ut non arcu. Vestibu lum sit amet imperdiet tellus.</p>
            <div class="modal-body">
                <img src="tmp/340x255-1.jpg" alt="#" width="340" height="255" class="img-responsive pull-right">
                <p>Nulla diam ex, aliquet vel iaculis vitae, consectetur et lectus. Mauris eu scelerisque ligula. Fusce in purus accumsan, faucibus lorem eget, posuere eros. Etiam ultricies vel leo at euismod.</p>
                <p>Morbi id nisi vitae felis consequat consequat ut non arcu. Vestibu lum sit amet imperdiet tellus. eget, posuere eros. Etiam ultricies vel leo at euismod. Nulla diam ex, aliquet vel iaculis vitae, consectetur et lectus. Mauris eu scelerisque ligula. Fusce in purus accumsan, faucibus lorem eget, posuere eros.</p>
                <p>Nulla diam ex, aliquet vel iaculis vitae, consectetur et lectus. Mauris eu scelerisque ligula. Fusce in purus accumsan, faucibus lorem eget, posuere eros. Etiam ultricies vel leo at euismod. Morbi id nisi vitae felis consequat consequat ut non arcu. Vestibu lum sit amet imperdiet tellus. eget, posuere eros. Etiam ultricies vel leo at euismod.</p>
            </div>
        </div>
    </div>
</div>
        <!--<div class="options hidden-xs">
            <div class="more closed">
                <i class="fa fa-cog"></i>
            </div>
            <div class="colors">
                <p>Selectionner la couleure du site</p>
                <a href="#" title="#" class="blue"></a>
                <a href="#" title="#" class="red"></a>
                <a href="#" title="#" class="green"></a>
                <a href="#" title="#" class="orange"></a>
                <a href="#" title="#" class="violet"></a>
                <a href="#" title="#" class="mint"></a>
                <a href="#" title="#" class="yellow"></a>
                <a href="#" title="#" class="pink"></a>
            </div>
        </div>-->

<!-- jQuery and Bootstrap JS -->
<script src='{{asset("https://code.jquery.com/jquery-1.10.2.min.js")}}'></script>
<script src='{{asset("assets/bootstrap/js/bootstrap.min.js")}}'></script>
<script src='{{asset("assets/js/jquery.easing.1.3.js")}}'></script>
<script src='{{asset("assets/js/owl.carousel.min.js")}}'></script>
<script src='{{asset("assets/js/parsley.min.js")}}'></script>
<script src='{{asset("assets/js/jquery.shuffle.min.js")}}'></script>
<script src='{{asset("assets/js/wow.min.js")}}'></script>
<script src='{{asset("assets/js/jquery.easypiechart.min.js")}}'></script>
<script src='{{asset("assets/js/jquery.countTo.js")}}'></script>
<script src='{{asset("assets/js/waypoints.min.js")}}'></script>
<script src='{{asset("assets/js/jquery.magnific-popup.min.js")}}'></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script>

<!-- Custom JS -->
<script src={{asset("assets/js/portfolio.js")}}></script>
<script src={{asset("assets/js/script.min.js")}}></script>

<!-- Options (demo only) -->
<script src='{{asset("assets/js/options.js")}}'></script>
<link rel="stylesheet" href='{{asset("assets/css/options.css")}}'>





</body>
</html>