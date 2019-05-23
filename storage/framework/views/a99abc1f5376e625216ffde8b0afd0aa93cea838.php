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
                                <h1>Revista ACIMM</h1>
                                <h4>Fique por dentro dos principais eventos do mês, além de conheçer histórias de sucesso e saber mais sobre nossos parceiros.</h4>
                                <span class="divider"></span>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-12 text-center sp-effect5 animated fadeInUp">
                                    <img class="img-responsive img-rounded" src="<?php echo e(url('img/samples/servicos/banner-revista.jpg')); ?>" alt="Imagem">
                                </div>               
                            </div>
                        </div>
                        <h1>Conteúdo construtivo.</h1>
                        <p>
                           A revista é um veículo de divulgação de ações da ACIMM e de notícias de interesse do empresário.
                        </p>
                        <p>
                            Esta publicação leva até os associados, informações sobre serviços, novos produtos e campanhas. Também coloca o associado em evidência,
                            destacando soluções inovadoras de empreendedores de diversos setores, sendo um importante canal de
                            divulga-ção de produtos em seu espaço publicitário, com tiragem de 2 mil exemplares, e distribuição em Mogi Mirim e
                            região.
                        </p>
                        <h2>Solicite a divulgação do seu negócio</h2>
                        <p>
                            Oferecemos preços diferenciados para associados, entre em <a href="contato.html">contato</a> através do telefone 3814-5762 e saiba mais.
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
