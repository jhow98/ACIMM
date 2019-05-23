<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="pt-br" class="no-js">
    <!--<![endif]-->
    <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
                                <h1>AC Celular</h1>
                                <h4>Um serviço de telefonia móvel exclusivo para empresários associados.</h4>
                                <span class="divider"></span>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-12 text-center">
                                    <img class="img-responsive" src="<?php echo e(url('img/samples/servicos/ac_logo.jpg')); ?>" alt="Imagem">
                                </div>               
                            </div>
                        </div>
                        <h1>Consultoria especializada.</h1>
                        <p>O ACCelular é um serviço de telefonia móvel que possibilita aos empresários gestão de consumo online, contrato flexível, atendimento personalizado e redução de custos.
                            Seu grande diferencial é o atendimento. Com atendente e consultor à disposição, traz a solução exata para um problema específico e atendimento presencial da ACIMM.
                            Voltado exclusivamente aos associados, o ACCelular pretende desmistificar a fama de mau atendimento que vigora no ramo da telefonia.
                        <p>

                            Ele permite que o usuário saiba exatamente com quem está falando e onde a equipe de atendimento está.
                        <p>


                        <h2>Saiba como solicitar</h2>
                        <p>
                            Mais informações podem ser obtidas com o Departamento Comercial da ACIMM: (19) 3814.5760.
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
<?php echo $__env->make('partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
