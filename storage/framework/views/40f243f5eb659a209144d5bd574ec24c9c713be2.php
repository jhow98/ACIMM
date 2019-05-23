<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="pt-br" class="no-js">
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <title>ACIMM - Orientação Jurídica</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" href="favicon.html">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/jquery.easy-pie-chart.css">
        <link rel="stylesheet" href="css/styles.css" title="mainStyle">

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

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
                            <h2>Missão, Visão e Valores</h2>
                        </div>
                    </div>
                </div>
            </section>

            <section id="services">
                <div class="container">
                    <div class="row">
                       <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 scrollpoint sp-effect4">
                                    <img src="img/samples" class="img-responsive img-center" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="media vertical scrollpoint sp-effect5">
                                        <a href="#">
                                            <img class="media-object" src="img/icons/icone-missao.png">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Missão</h4>
                                            <p>Defender o empresariado e o empreendedorismo, através do associativismo, da prestação de serviços,
                                                da capacitação da equipe de gestão, contribuindo para o desenvolvimento e fortalecimento do nosso município.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="media vertical scrollpoint sp-effect5">
                                        <a href="#">
                                            <img class="media-object" src="img/icons/icone-visao.png">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Visão</h4>
                                            <p>Ser uma organização associativa com referência nacional em empreendedorismo e integração no comércio, indústria e prestadores de serviço.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="media vertical scrollpoint sp-effect5">
                                        <a href="#">
                                            <img class="media-object" src="img/icons/icone-valores.png">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Valores</h4>
                                            <p>Excelência na conduta de suas atividades sociais e empresariais. Integridade, ética, trabalho e desenvolvimento;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
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
