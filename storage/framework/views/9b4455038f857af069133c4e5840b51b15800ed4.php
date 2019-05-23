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

        <link rel="stylesheet" href="css/historia/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="css/historia/style.css"> <!-- Resource style -->

        <script src="js/modernizr.custom.32033.js"></script>

    </head>

    <body>
        <div id="wrap" class='home'>

            <!-- Fixed navbar -->
           <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!--/.navbar -->

            <section class="well well-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Linha do tempo</h2>
                        </div>
                    </div>
                </div>
            </section>

            <section id="historia">
                <div class="container">
                        <section class="cd-horizontal-timeline">
                        <div class="timeline">
                            <div class="events-wrapper">
                                <div class="events">
                                    <ol>
                                        <li><a href="#0" data-date="23/01/1929" class="selected">1929</a></li>
                                        <li><a href="#0" data-date="26/10/1929">1960</a></li>
                                        <li><a href="#0" data-date="26/04/1930">1980</a></li>
                                        <li><a href="#0" data-date="26/07/1931">2001</a></li>
                                        <li><a href="#0" data-date="26/07/1932">2017</a></li>
                                    </ol>
                                    <span class="filling-line" aria-hidden="true"></span>
                                </div> <!-- .events -->
                            </div> <!-- .events-wrapper -->

                            <ul class="cd-timeline-navigation">
                                <li><a href="#0" class="prev inactive">Prev</a></li>
                                <li><a href="#0" class="next">Next</a></li>
                            </ul> <!-- .cd-timeline-navigation -->
                        </div> <!-- .timeline -->

                        <div class="events-content">
                            <ol>
                                <li class="selected" data-date="23/01/1929">
                                    <h3>A fundação da ACIMM</h3>
                                    <em>23 de Dezembro de 1929</em>
                                    <p style="font-size: ">	
                                        Em 23 de dezembro de 1929, Laurentino Pereira Goulart reuniu em sua residência vários comerciantes para discutir a 
                                        fundação da Associação Comercial de Mogi Mirim. No encontro foi nomeada uma comissão para contatos com a Associação Comercial de 
                                        Campinas, no intuito de viabilizar a proposta de se formar um órgão de representação, orientação e defesa dos interesses da classe 
                                        empresarial.
                                    </p>
                                    <em>29 de Dezembro de 1929</em>
                                    <p>
                                        O trabalho da comissão foi dinâmico e já no dia 29 de dezembro de 1929, na sede da Societá Italiana de Mútuo Soccorso foi realizada Assembléia
                                        Geral e eleita a primeira Diretoria Executiva, o Conselho Consultivo e aprovados os Estatutos Sociais.
                                    <p>
                                        A primeira Diretoria Executiva, composta por seis membros, foi constituída por Laurentino Pereira Goulart - Presidente; Nicolau Jannuzzi - 
                                        Vice-Presidente, Jonas Oliveira Cintra e Manoel Gonçalves - 1º e 2º secretários; Fortunato Badan e Antonio Coppo - 1º e 2º tesoureiros.
                                    <p>
                                        Com doze elementos, o Conselho Consultivo foi formado por Ettore Ceregatti, Salim Chaib, Afonso Finazzi, João Antunes Lima Junior, Jeronymo 
                                        Romanello, João Miguel Finhani, João Vaz de Souza, Antonio Jorge Silveira, Rachid Jorge Baracat, Antonio Guerreiro, Sotter Fernandes e Vitório
                                        Guelfi.  
                                </li>

                                <li data-date="26/10/1929">
                                    <h3>Inclusão da área industrial</h3>
                                    <em>27 de Julho de 1960</em>
                                    <p>	
                                        Em 1960 a prestação de serviços da entidade ganhou novo dinamismo com a inclusão da área industrial e no dia 27 de julho, através de Assembléia Geral,
                                        sua denominação foi modificada para Associação Comercial e Industrial de Mogi Mirim. Dois anos mais tarde a ACIMM foi então declarada de Utilidade 
                                        Pública, pela Lei Municipal nº 416 de 27/6/1962.
                                    </p>
                                </li>

                                <li data-date="26/04/1930">
                                    <h3>Inovação e crescimento</h3>
                                    <em>Décadas de 80 a 90</em>
                                    <p style="font-size: ">	
                                        Durante toda a década de 80 e 90, a ACIMM foi inovando, realizando campanhas promocionais, parcerias com outras entidades para a realização de cursos, palestras, seminários e treinamentos.
                                    </p>
                                </li>
                                <li data-date="26/07/1931">
                                    <h3>Nova sede</h3>
                                    <em>Ano de 2001</em>
                                    <p style="font-size: ">	
                                        No ano de 2001 a ACIMM mudou-se para a nova sede, instalada à Avenida Luiz Gonzaga de Amoedo Campos, em frente ao lago do Complexo Lavapés, onde se encontra até os dias de hoje.
                                    </p>
                                </li>
                                <li data-date="26/07/1932">
                                    <h3>A ACIMM Hoje</h3>
                                    <em>Ano de 2017</em>
                                    <p style="font-size: ">	

                                        Atualmente a entidade conta com aproximadamente 1.350 associados, para os quais são oferecidos os serviços de convênios médicos, odontológicos, psicológicos; desconto de até 50% com diversos profissionais; biblioteca; videoteca; xerocopias; serviço de proteção ao credito (SCPC); certificado de origem; campanhas promocionais; treinamentos; sala para cursos e reuniões. Todo o trabalho é dividido por departamentos: Convênios, Administrativo, SCPC e Comercial.                                    </p>
                                </li>

                            </ol>
                        </div> <!-- .events-content -->
                    </section>
                </div>
            </section>

           <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <!--/wrap-->

        <script src="js/jquery.min.js"></script>
        <script src="js/historia/jquery.mobile.custom.min.js"></script>
        <script src="js/historia/main.js"></script> <!-- Resource jQuery -->
        <script src="js/historia/modernizr.js"></script> <!-- Resource jQuery -->

        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="js/jquery.circliful.min.html"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>
        <script src="js/script.js"></script>
    </body>
</html>