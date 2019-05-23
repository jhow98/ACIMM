<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="pt-br" class="no-js">
    <!--<![endif]-->


    <head>
        <meta charset="UTF-8">
        <title>ACIMM - Blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" href="favicon.html">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/styles.css" title="mainStyle">

        <script src="js/modernizr.custom.32033.js"></script>

    </head>

    <body>
        <div id="wrap" class="home">

            <!-- Fixed navbar -->
       <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!--/.navbar -->

            <section class="well well-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>blog</h2>
                        </div>
                    </div>
                </div>
            </section>

            <section id="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="article">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-sm-1 col-xs-2">
                                            <div class="row">
                                                <div class="type">
                                                    <i class="fa fa-picture-o fa-2x"></i>
                                                </div>
                                                <div class="date">
                                                    31<span>AGO</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-11 col-xs-10">
                                            <div class="preview">
                                                <img src="img/Blog/blog_1.jpg" alt="Foto dos ganhadores" class="img-responsive">
                                            </div>
                                            <h3><a href="#">Ganhadores do Sorteio do Dia dos Pais</a></h3>
                                            <div class="article-details">
                                                <div class="author">
                                                    <a href="#"><i class="fa fa-user"></i> Autor da matéria</a>
                                                </div>
                                            </div>
                                            <p class="article-data">A Associação Comercial e Industrial de Mogi Mirim (ACIMM) entregou na última quarta-feira, 30, 
                                                a premiação alusiva a Campanha do Dia dos Pais, que integra o Festival de Prêmios 2017. A entrega ocorreu na sede da 
                                                propria entidade, na presença de diretores. </p>
                                            <div class="quote">
                                                Larissa Tartarini recebeu a motocicleta zero quilômetro e a vendedora Vânia 
                                                Zaniboni da loja Nelcinda Tecidos, garantiu um smartphone.
                                            </div>

                                            <div class="share-post">
                                                <span>Compartilhe nas redes sociais</span>
                                                <a href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </div>

                                            <span class="divider"></span>
                                            <h4>Os comentários ainda não estão disponíveis.</h4>
                                            <div class="comments hidden">
                                                <h4>Commentários (4)</h4>
                                                <div class="media media-comments">
                                                    <a class="pull-left" href="#">
                                                        <img src="http://lorempixel.com/70/70/" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Media heading <span><a href="#">Reply</a></span></h5>
                                                        <p class="date">May 30th, 2014</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa.</p>
                                                    </div>
                                                </div>
                                                <div class="media media-comments reply">
                                                    <a class="pull-left" href="#">
                                                        <img src="http://lorempixel.com/70/70/" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Media heading <span><a href="#">Reply</a></span></h5>
                                                        <p class="date">May 30th, 2014</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa.</p>
                                                    </div>
                                                </div>
                                                <div class="media media-comments">
                                                    <a class="pull-left" href="#">
                                                        <img src="http://lorempixel.com/70/70/" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Media heading <span><a href="#">Reply</a></span></h5>
                                                        <p class="date">May 30th, 2014</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa.</p>
                                                    </div>
                                                </div>
                                                <div class="media media-comments">
                                                    <a class="pull-left" href="#">
                                                        <img src="http://lorempixel.com/70/70/" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Media heading <span><a href="#">Reply</a></span></h5>
                                                        <p class="date">May 30th, 2014</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa.</p>
                                                    </div>
                                                </div>
                                                <span class="divider"></span>
                                            </div>
                                            <div class="comment-form">
                                                <form>
                                                    <div class="form-group has-feedback left">
                                                        <input type="text" class="form-control" placeholder="Nome">
                                                        <i class="fa fa-user form-control-feedback"></i>
                                                    </div>
                                                    <div class="form-group has-feedback left">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                        <i class="fa fa-envelope-o form-control-feedback"></i>
                                                    </div>
                                                    <div class="form-group has-feedback left">
                                                        <textarea class="form-control" rows="7" placeholder="Comentário"></textarea>
                                                        <i class="fa fa-pencil-square-o form-control-feedback"></i>
                                                    </div>
                                                    <button class="btn btn-primary btn-lg pull-right" type="submit">Enviar comentário</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="side-block search">
                                <h4>Procure por algo</h4>
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Insira sua pesquisa aqui">
                                    <button type="submit"><i class="fa fa-search form-control-feedback"></i></button>
                                </div>
                                <span class="divider"></span>
                            </div>
                            <div class="side-block">
                                <h4>Últimos Posts</h4>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://lorempixel.com/60/60/" alt="...">
                                    </a> 
                                    <div class="media-body">
                                        Jantar dos Empresários : Uma Noite em Hollywood
                                        <a href="#">17/08/2017</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://lorempixel.com/60/60/" alt="...">
                                    </a>
                                    <div class="media-body">
                                        Café com Negócios
                                        <a href="#">25/07</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://lorempixel.com/60/60/" alt="...">
                                    </a>
                                    <div class="media-body">
                                        Curso Como Vender mais com o Facebook
                                        <a href="#">24/07/2017</a>
                                    </div>
                                </div>
                                <span class="divider"></span>
                            </div>
                            <div class="side-block">
                                <h4>Fique por dentro</h4>
                                <div id="slider-promo" class="carousel slide pull-right" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators vertical pull-right">
                                        <li data-target="#slider-promo" data-slide-to="0" class="active"></li>
                                        <li data-target="#slider-promo" data-slide-to="1"></li>
                                        <li data-target="#slider-promo" data-slide-to="2"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner pull-right">
                                        <div class="item active">
                                            <img src="img/samples/600-300/2.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="img/samples/600-300/3.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="img/samples/600-300/1.jpg" alt="">
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
        <!--/wrap-->

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="js/jquery.circliful.min.html"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>
        <script src="js/script.js"></script>
    </body>
</html>