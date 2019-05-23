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
                                <h1>Certificado Digital</h1>
                                <h4>O certificado digital é um documento eletrônico que identidica seguramente pessoas, empresas, sistemas e informações do mundo digital.</h4>
                                <span class="divider"></span>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-12 text-center">
                                    <img class="img-responsive" src="<?php echo e(url('img/samples/servicos/certificado-digital.jpg')); ?>" alt="Imagem">
                                </div>               
                            </div>
                        </div>
                        <h1>Vantagens para você</h1>
                        <p>
                            Uma ferramenta fndamental nos dias de hoje, época em que as pessoas buscam qualidade de vida e e precisam lidar
                            com os afazeres cotidianos de firmar comppromissos, assinar documentos e identificar-se oerante
                            instituições que exigem comprovação inequívoca da sua identidade.
                        </p>
                        <p>
                            As principais vantagens do uso do certificado digital estão nas suas propriedades tecnológicas e legais, atribuinda segurança digital e validade jurídica em documentos assinados eletronicamento.

                        <div class="col-md-4">
                            <ul>
                                <li> Reduz custos e simplifica seu dia a dia;</li>
                                <li> Reduz fraudes na comunicação digital;</li>
                                <li> Aumenta a confiança em transações eletrônicas;</li>
                                <li> Dispensa o reconhecimento de rma em cartório;</li>
                                <li> Diminui a burocracia;</li>
                                <li> Atribui validade jurídica a documentos eletrônicos;</li>
                                <li> Garante autenticidade às informações digitais;</li>
                                <li> Garante privacidade.</li>
                            </ul>                       
                        </div>
                        <div class="col-md-2">
                            <div class="thumbnail">
                                <img src="<?php echo e(url('img/icons/2.jpg')); ?>" alt="E-CPF">
                                <div class="caption">
                                    <h3>E-CPF</h3>
                                    <p>Certificados ICP-Brasil para Pessoa Física</p>
                                    <p> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="thumbnail">
                                <img src="<?php echo e(url('img/icons/1.jpg')); ?>" alt="E-CPF">
                                <div class="caption">
                                    <h3>E-CNPJ</h3>
                                    <p>Certificados ICP-Brasil para Pessoa Jurídica</p>
                                    <p> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="thumbnail">
                                <img src="<?php echo e(url('img/icons/3.jpg')); ?>" alt="E-CPF">
                                <div class="caption">
                                    <h3>NF-E</h3>
                                    <p>Certificados ICP-Brasil para Notal Fiscal Eletrônica</p>
                                    <p> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="thumbnail">
                                <img src="<?php echo e(url('img/icons/4.jpg')); ?>" alt="E-CPF">
                                <div class="caption">
                                    <h3>ICP</h3>
                                    <p>Certificados ICP-Brasil para Conectividade Social</p>
                                    <p> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <h2>Saiba como solicitar</h2>
                            <p>
                                Associados ACIMM tem descontos especiais!<br>
                                Entre em <a href="contato.html">contato</a> através do telefone 3814-5768 e fale com Bruna Martinez, ou através do E-mail <a href="mailto:certificadodigital@acimm.com.br">certificadodigital@acimm.com.br</a>.
                            </p>

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

<?php echo $__env->make('partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
