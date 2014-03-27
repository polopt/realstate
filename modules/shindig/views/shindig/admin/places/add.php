<h2><?php echo __('Novo Imovel')?></h2>

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
            <dt><?php echo __('Titulo:')?></dt>
            <dd><?php echo form::input('name', $house->name)?></dd>
        </dl>
        <dl>
            <dt><?=__('Descrição')?></dt>
            <dd><?=$editor?></dd>
        </dl>
        <dl>
            <dt><?php echo __('#quartos:')?></dt>
            <dd>
                <select name="num_rooms">
                    <?php for($i=1; $i<10; $i++): ?>
                        <option value="<?=$i?>" <?if($house->num_rooms == $i) echo "selected"?>><?=$i?></option>
                    <? endfor; ?>
                </select>
            </dd>
        </dl>
        <dl>
            <dt><?=__('#casas de banho')?></dt>
            <dd>
                <select name="num_badrooms">
                    <?php for($i=1; $i<10; $i++): ?>
                        <option value="<?=$i?>" <?if($house->num_badrooms == $i) echo "selected"?>><?=$i?></option>
                    <? endfor; ?>
                </select>
            </dd>
        </dl>
        <dl>
            <dt><?=__('Dimensão')?></dt>
            <dd><?php echo form::input('dimention', $house->dimention)?></dd>
        </dl>
        <dl>
            <dt><?=__('Morada')?></dt>
            <dd><?php echo form::input('adress', $house->adress)?></dd>
        </dl>
        <dl>
            <dt><?=__('Preço')?></dt>
            <dd><?php echo form::input('price', $house->price)?></dd>
        </dl>
<!--        <dl>-->
<!--            <dt>--><?//=__('Imagem')?><!--</dt>-->
<!--            <dd><div id="logo"><image src=""></div><input type="file" id="image" name="img" /></dd>-->
<!--        </dl>-->
        <dl>
            <dt><?=__('Serviços')?></dt>
            <dd>
                <select name="services[]" multiple>
                    <? foreach($services as $service): ?>
                        <option value="<?=$service->id?>"><?=$service->name?></option>
                    <? endforeach;?>
                </select>
            </dd>
        </dl>
        <?php echo form::button('shindig_post', __('Submit'))?>
    </div>
<?php echo form::close()?>
<?php echo form::hidden('site_url', URL::site(NULL, TRUE), array('id' => 'site_url'))?>