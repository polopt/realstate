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
            <dt><?=__('Tipologia')?></dt>
            <dd>
                <select name="topology">
                    <?php for($i=1; $i<5; $i++): ?>
                        <option value="<?=$i?>" <?if($house->topology == $i) echo "selected"?>>T<?=$i?></option>
                    <? endfor; ?>
                    <option value="5" <?if($house->topology == 5) echo "selected"?>>T5 ou mais</option>
                </select>
            </dd>
        </dl>
        <dl>
            <dt><?=__('Area Bruta Privativa')?></dt>
            <dd><?php echo form::input('area_brute_privative', $house->area_brute_privative)?></dd>
        </dl>
        <dl>
            <dt><?=__('Area Bruta Dependente')?></dt>
            <dd><?php echo form::input('area_brute_dependente', $house->area_brute_dependente)?></dd>
        </dl>
        <dl>
            <dt><?=__('Area Terreno')?></dt>
            <dd><?php echo form::input('area_terrain', $house->area_terrain)?></dd>
        </dl>
        <dl>
            <dt><?=__('Area Total')?></dt>
            <dd><?php echo form::input('area_brute_total', $house->area_brute_total)?></dd>
        </dl>
        <dl>
            <dt><?php echo __('#pisos:')?></dt>
            <dd>
                <select name="floors">
                    <?php for($i=1; $i<10; $i++): ?>
                        <option value="<?=$i?>" <?if($house->floors == $i) echo "selected"?>><?=$i?></option>
                    <? endfor; ?>
                </select>
            </dd>
        </dl>
        <dl>
            <dt><?php echo __('#divisoes:')?></dt>
            <dd>
                <select name="num_divisions">
                    <?php for($i=1; $i<10; $i++): ?>
                        <option value="<?=$i?>" <?if($house->num_divisions == $i) echo "selected"?>><?=$i?></option>
                    <? endfor; ?>
                </select>
            </dd>
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
            <dt><?=__('#estacionamentos')?></dt>
            <dd>
                <select name="num_parkings">
                    <?php for($i=1; $i<10; $i++): ?>
                        <option value="<?=$i?>" <?if($house->num_parkings == $i) echo "selected"?>><?=$i?></option>
                    <? endfor; ?>
                </select>
            </dd>
        </dl>
        <dl>
            <dt><?=__('Morada')?></dt>
            <dd><?php echo form::input('adress', $house->adress)?></dd>
        </dl>
        <dl>
            <dt><?=__('Distrito')?></dt>
            <dd>
                <select name="zone_id">
                    <? foreach($zones as $zone): ?>
                        <option value="<?=$zone->id?>" <?if($zone->id == $house->zone_id) echo "selected"?>><?=$zone->name?></option>
                    <? endforeach; ?>
                </select>
            </dd>
        </dl>
        <dl>
            <dt><?=__('Preço')?></dt>
            <dd><?php echo form::input('price', $house->price)?></dd>
        </dl>
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