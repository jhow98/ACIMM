<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <body>
        <!-- Wrap all page content here -->
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

            <section id="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">

                            <?php if($article): ?>

                            <?php echo $__env->make('blog.show', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                            <?php else: ?>

                            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('blog.show', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>


                            <div class="row">
                                <div class="pagination-wrapper col-md-12 clearfix">
                                    <ul class="pagination pagination-lg">
                                        <li><a href="#">&laquo;</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="side-block search">
                                <h4>Pesquisar Publicação</h4>
                                <div class="form-group has-feedback">
                                    <?php echo Form::open(['url' => 'blog/search']); ?>

                                    <input name="k" type="text" class="form-control" placeholder="Busque aqui...">
                                    <button type="submit"><i class="fa fa-search form-control-feedback"></i></button>
                                    <?php echo Form::close(); ?>

                                </div>
                                <span class="divider"></span>
                            </div>
                            <div class="side-block">
                                <h4>Facebook ACIMM</h4>
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Facimmmogimirim%2F&amp;tabs=timeline&amp;width=340&amp;height=400&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=1246780258742239" width="100%" height="200px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
                                <span class="divider"></span>
                            </div>
                            <div class="side-block">
                                <h4>Latest Posts</h4>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://lorempixel.com/60/60/" alt="...">
                                    </a>
                                    <div class="media-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        <a href="#">by Admin</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://lorempixel.com/60/60/" alt="...">
                                    </a>
                                    <div class="media-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        <a href="#">by Admin</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://lorempixel.com/60/60/" alt="...">
                                    </a>
                                    <div class="media-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        <a href="#">by Admin</a>
                                    </div>
                                </div>
                                <span class="divider"></span>
                            </div>
                            <div class="side-block">
                                <h4>Text Widget</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus fugit vitae non assumenda quo ipsam, doloremque aspernatur commodi, eligendi consequatur sunt officia, omnis.</p>
                                <span class="divider"></span>
                            </div>
                            <div class="side-block">
                                <h4>tags cloud</h4>
                                <a href="#" class="tag">design</a>
                                <a href="#" class="tag">development</a>
                                <a href="#" class="tag">photoshop</a>
                                <a href="#" class="tag">web design</a>
                                <a href="#" class="tag">logo</a>
                                <a href="#" class="tag">html5</a>
                                <span class="divider"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <!--/wrap-->
        <?php echo $__env->make('partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>