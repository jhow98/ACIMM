<div class="form-group">
    <?php echo Form::label('title', 'Título:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control has-feedbakl']); ?>

</div>
<div class="form-group">
    <?php echo Form::label('body', 'Conteúdo:'); ?>

    <?php echo Form::textarea('body', null, ['class' => 'form-control has-feedbakl']); ?>

</div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <?php echo Form::label('published_at', 'Data de Publicação:'); ?>

        <?php echo Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control has-feedbakl']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('photo', 'Foto Artigo:'); ?>

        
        <?php echo Form::file('photo', [
        'class' => 'form control has-feedbak1',
        
        
        ]); ?>     
        
    </div>
    <div class="form-group">
        <?php echo Form::submit($submitButton, ['class' => 'btn btn-primary has-feedbakl']); ?>

    </div>