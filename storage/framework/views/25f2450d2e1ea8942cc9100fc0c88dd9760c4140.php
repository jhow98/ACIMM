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
                                <h1>Orientação jurídica</h1>
                                <h4>Nossa assessoria jurídica será capaz de trazer soluções rápidas e contundentes para o seu problema.</h4>
                                <span class="divider"></span>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-12 text-center">
                                    <img class="img-responsive" src="<?php echo e(url('img/samples/servicos/orientacao-juridica.jpg')); ?>" alt="Banner Orientação Jurídica">
                                </div>               
                            </div>
                        </div>
                        <h1>Consultoria especializada.</h1>
                        <p>
                            Prestação de acessoria gratuita para associados e disponibilização de informações atuais e preventivas.
                        </p>
                        <p>
                            A assessoria jurídica da ACIMM visa contribuir com a segurança jurídica das relações empresariais, buscando formas
                            de conscientizar e prevenir problemas jurídicos. Seu objetivo também é o de facilitar o esclarecimento de dúvidas
                            apresentadas pelos associados no desempenho de suas atividades e no desenvolvimento de seus serviços e/ou produtos.
                        </p>
                        <h2>Saiba como solicitar</h2>
                        <p>
                            Se você ja é nosso associado, entre em <a href="contato.html">contato</a> e agende um horário.
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
