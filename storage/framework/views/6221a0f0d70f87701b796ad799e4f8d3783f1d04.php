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
                <img src="<?php echo e(url('img/logo/logo_acimm.gif')); ?>" class="animated fadeInDown" alt="">
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
                                <h1>Cursos e Palestras</h1>
                                <h4>Uma agenda repleta de eventos com os mais diversos temas para aprimorar seu enriquecimento pessoal e profissional.</h4>
                                <span class="divider"></span>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-12 text-center sp-effect5 animated fadeInUp">
                                    <img class="img-responsive img-rounded" src="<?php echo e(url('img/samples/servicos/palestras.jpg')); ?>" alt="Imagem">
                                </div>               
                            </div>
                        </div>
                        <h1>O conhecmento não tem limites.</h1>
                        <p>
                           A ACIMM atenta ao aprimoramento exigido pelo mercado profissional, que está em constante mutação devido as novas tecnologias e atualizações.
                           Por isso, trazemos sempre grandes nomes para ministrar curss e palestras, com uma programação enriquecedora durante todo o ano.
                        </p>
                        <p>
                            Esses eventos vão desde motivação quanto ao crescimento pessoal/profissional quanto abusca peo sucesso nos negócios.
                        </p>
                        <h2>Fique por dentro</h2>
                        <p>
                            Clique <a href="contato.html">aqui</a> e veja nossa agenda semanal completa.
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
