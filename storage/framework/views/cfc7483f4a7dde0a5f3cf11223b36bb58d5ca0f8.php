<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="pt-br" class="no-js">
    <!--<![endif]-->


    <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <body>
        <div id="wrap" class="home">

            <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="container">
                <section class="well well-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Blog - Criar Artigo</h2>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="create-article">
                    <div class="container">
                        <div class="col-md-12">



                            <div class="col-md-6">
                                <?php echo Form::open(['url' => 'blog/store',
                                'enctype' => 'multipart/form-data'
                                ]); ?>

                                <?php echo $__env->make('blog._form', ['submitButton' => 'Criar Artigo'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>

                    </div>
                    <?php if($errors->any()): ?>
                    <ul class="alert alert-danger">

                        <li>Há erros no formulário enviado!</li>

                    </ul>
                    <?php endif; ?>
                </section>
                <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <!--/wrap-->

        <?php echo $__env->make('partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>