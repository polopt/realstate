<h2><?php echo __('Novo Serviço')?></h2>

<?php //echo form::open()?>
<form id="upload_form" action="" method="post" enctype="multipart/form-data">
    <div class="messages">
        <?if(isset($msg) and !empty($msg)) :?>
            <? if(is_array($msg)) : ?>
                <? print_r($msg); ?>
            <? else: ?>
                <?=$msg?>
            <? endif; ?>
        <? endif; ?>
    </div>
    <?php include Kohana::find_file('views', 'errors')?>
    <div class="span-17">
        <dl>
            <dt><?php echo __('Nome do Serviço:')?></dt>
            <dd><?php echo form::input('name',$service->name)?></dd>
        </dl>
        <dl>
            <dt><?=__('Descrição')?></dt>
            <dd><?=$editor?></dd>
        </dl>
        <dl>
            <dt><?php echo __('Descrição curta:')?></dt>
            <dd><?php echo form::input('short_content', $service->short_content)?></dd>
        </dl>
        <dl>
            <dt><?=__('Categorias')?></dt>
            <dd><?=$editor_topics?></dd>
        </dl>
        <dl>
            <dt><?=__('Imagem')?></dt>
            <dd><div id="logo"><image src=""></div><input type="file" id="image" name="img" /></dd>
        </dl>
        <?php echo form::button('shindig_post', __('Submit'))?>
    </div>
<?php echo form::close()?>
<?php echo form::hidden('site_url', URL::site(NULL, TRUE), array('id' => 'site_url'))?>
