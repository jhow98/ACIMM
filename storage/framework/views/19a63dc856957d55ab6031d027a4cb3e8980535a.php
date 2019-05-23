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
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

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
                            <h2>Agenda ACIMM</h2>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                     <?php if(Auth::Check()): ?>
                                     <a href="<?php echo e(url('sair')); ?>"> Logout </a>
                                     <?php else: ?>
                                     <a href="<?php echo e(url('login')); ?>"> Login </a>
                                     <?php endif; ?>
                                     
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">

                <div class="row">
                    <div class="col col-md-2"></div>
                    <div class="col col-md-8">
              <?php if(Auth::Check()): ?>
                        <div class="col-md-6">
                            <?php echo Form::open(['url' => 'eventos/store',
                            'enctype' => 'multipart/form-data'
                            ]); ?>

                            <?php echo $__env->make('event._create', ['submitButton' => 'Criar Evento'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo Form::close(); ?>

                        </div>
              <?php endif; ?>
                    </div>
                    <div class="col col-md-2"></div>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Agenda de Eventos</div>


                            <div class="panel-body">
                                <?php echo $calendar->calendar(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <!--/wrap-->

        <script src="js/jquery.min.js"></script>
        <script src="js/historia/jquery.mobile.custom.min.js"></script>
        <script src="js/historia/main.js"></script> <!-- Resource jQuery -->
        <script src="js/historia/modernizr.js"></script> <!-- Resource jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
        <?php echo $calendar->script(); ?>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="js/jquery.circliful.min.html"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>
        <script src="js/script.js"></script>
    </body>
</html>