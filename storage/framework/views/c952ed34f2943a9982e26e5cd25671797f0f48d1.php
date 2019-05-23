<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="pt-br" class="no-js">
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <title>ACIMM - Locação de Ambientes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" href="img/icons/acimm.ico">

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/jquery.easy-pie-chart.css">
        <link rel="stylesheet" href="css/styles.css" title="mainStyle">

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=1246780258742239";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <script src="js/modernizr.custom.32033.js"></script>

        <!--[if IE]><script type="text/javascript" src="js/excanvas.compiled.js"></script><![endif]-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <div class="pre-loader">
            <div class="load-con">
                <img src="img/logo/logo_acimm.gif" class="animated fadeInDown" alt="">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
        <!-- Wrap all page content here -->
        <div id="wrap" class="home">
            <header>
                <!-- Fixed navbar -->
                <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!--/.navbar -->
            </header>
            <section class="well well-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Serviços para você</h2>
                        </div>
                    </div>
                </div>
            </section>

            <section id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-push-2 clearfix">
                            <div class="section-heading scrollpoint sp-effect3">
                                <h1>Locação de Ambientes</h1>
                                <h4>Espaços exclusivos com muito conforto e comodidade para seu evento.</h4>

                                <span class="divider"></span>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-12 text-center sp-effect5 animated fadeInUp">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators vertical">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="img/salas/1.jpg" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="img/salas/2.jpg" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="img/salas/3.jpg" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="img/salas/4.jpg" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="img/salas/5.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>               
                            </div>
                        </div>
                        <h1>Estrutura e conforto.</h1>
                        <p>
                            <img src="img/icons/bullet-bl.png" alt=""> Completa infraestrututura que combina sofisticação, conforto e funcionalidade, a ACIMM disponibiliza espaços privilegiados para locação, de acordo com a necessidade de seu evento. Amplos, arejados e equipados, os ambientes estão preparados  para receber as mais variadas ocasiões profissionais.
                        </p>
                        <p>
                            <img src="img/icons/bullet-bl.png" alt=""> Contamos também com uma sala para reuniões com capacidade para até 10 pessoas que é oferecida como cortesia para nossos associados (consultar condições e disponibilidade)
                        </p>
                        <h2>Saiba como solicitar.   </h2>
                        <p>
                            <img src="img/icons/bullet-bl.png" alt=""> Oferecemos preços diferenciados para associados, para mais informações, entre em <a href="contato.html">contato</a> através do telefone 3814-5762 e saiba mais.
                        </p>
                    </div>
                </div>
            </section>
           
          <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>

        <div class="modal fade" id="modalSCPC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Entrar no SCPC</h1><br>
                    <form>
                        <input type="text" name="cod" placeholder="Código de associado">
                        <input type="password" name="pass" placeholder="Senha">
                        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
        <!--/wrap-->

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>

        <!-- jQuery REVOLUTION Slider  -->
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <script src="js/waypoints.min.js"></script>

        <script src="js/script.js"></script>

        <script>
            $("#openModalSCPC").click(function () {
                $('#modalSCPC').modal();
            });
            $(document).ready(function () {
                appMaster.preLoader();
                appMaster.smoothScroll();
                appMaster.animateScript();
                appMaster.navSpy();
                appMaster.revSlider();
                appMaster.stellar();
                appMaster.skillsChart();
                appMaster.maps();
                appMaster.isoTop();
                appMaster.canvasHack();

                $('.home-ad .close').on('click', function () {
                    $(this).parent().toggle('fast');
                });
            });
        </script>
    </body>
</html>
