<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="pt-br" class="no-js">
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <title>ACIMM - CME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" href="favicon.html">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/jquery.easy-pie-chart.css">
        <link rel="stylesheet" href="css/styles.css" title="mainStyle">

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
                                <h1>CME</h1>
                                <h4>O Conselho da Mulher Empreendedora (CME), tem o intuito de fomentar o empreendedorismo feminino, investindo
                                    na capacitação das mulheres.</h4>
                                <span class="divider"></span>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-12 text-center">
                                    <img class="img-responsive" src="img/samples/servicos/cme.jpg" alt="Imagem">
                                </div>               
                            </div>
                        </div>
                        <h1>A mulher no mercado de trabalho</h1>
                        <p>
                            Nessas reuniões, elas discutem sobre o mercado de trabalho, realizam networkings e
                            traçam estratégias para impulsionar os negócios na região.
                        </p>
                        <p>
                            Unir e promover o fortalecimento da mulher empresária e empreendedora; 
                            Incentivar a participação da mulher em atividades empresariais; 
                            Promover a capacitação e o aperfeiçoamento por meio de cursos e palestras
                        </p>
                        <h2>Saiba como participar</h2>
                        <p>
                            Para mais informações, entre em <a href="contato.html">contato</a> e fale com um de nossos atendentes.
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
