<div class="article">
    <div class="row">
        <div class="col-md-12">
            <div class="col-sm-1 col-xs-2">
                <div class="row">
                    <div class="type">
                        <i class="fa fa-picture-o fa-2x"></i>
                    </div>
                    <div class="date">
                        <?php echo e($article->published_at->day); ?><span><?php echo e(str_limit($article->published_at->formatLocalized('%B'), 3, '')); ?></span>
                        <!--                                                  aqui ainda é preciso fazer exibir o mes como string-->
                    </div>
                </div>
            </div>
            <div class="col-sm-11 col-xs-10">
                <div class="preview">
                    <img src="<?php echo e(url('img/blog/' . $article->img)); ?>" alt="" class="img-responsive">
                </div>
                <h3><a href="blog/<?php echo e($article->id); ?>"><?php echo e($article->title); ?></a></h3>
                <div class="article-details">
                    <div class="author">
                        <a href="#"><i class="fa fa-user"></i> <?php echo e($article->author); ?></a>
                    </div>
                </div>
                <?php echo $article->body; ?>


                <br><?php echo e($article->published_at->diffForHumans()); ?>

                <span class="divider"></span>
            </div>
        </div>
    </div>
</div>