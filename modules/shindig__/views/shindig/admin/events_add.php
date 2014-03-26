
<h2><?php echo $form_title?></h2>

<?php //echo form::open()?>
<form id="upload_form" action="" method="post" enctype="multipart/form-data">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>


<!-- CSS and JS for our code -->
<link rel="stylesheet" type="text/css" href="/media/css/jquery-gmaps-latlon-picker.css"/>
<script src="/media/js/jquery-gmaps-latlon-picker.js"></script>
<script>
  $(function() {
    	$("#datepicker").datepicker({dateFormat: 'yy-mm-dd'}).val();
	$("#datepicker2").datepicker({dateFormat: 'yy-mm-dd'}).val();
  });
</script>  

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
    <dt><?php echo __('Categoria :')?></dt>
    <dd><select name="category_id">
        <?foreach($categories as $cat) : ?>
          <option value="<?=$cat->id?>"><?=$cat->name?></option>
        <? endforeach; ?>
      </select></dd>
  </dl>
  <dl>
    <dt><?php echo __('Nome do evento Agenda:')?></dt>
    <dd><?php echo form::input('name_agenda', $user->name_agenda)?></dd>
  </dl>
  <dl>
    <dt><?php echo __('Nome do evento:')?></dt>
    <dd><?php echo form::input('name', $user->name)?></dd>
  </dl>
  <dl>
    <dt><?=__('Local da Concentração')?></dt>
    <dd><?php echo form::input('local', $user->local)?></dd>
  </dl>
  <dl>
    <dt><?=__('Hora da Concentração')?></dt>
    <dd><?php echo form::input('time', $user->time)?></dd>
  </dl>
  <dl>
    <dt><?=__('Data Inicio')?></dt>
    <dd><?=form::input('date', $user->date, array('id' => 'datepicker'))?></dd>
  </dl>

  <dl>
    <dt><?=__('Data Fim')?></dt>
    <dd><?=form::input('date_end', $user->date_end, array('id' => 'datepicker2'))?></dd>
  </dl> 	

  <!--<div class="clear"></div>-->  
  <!--<dl>-->
<!--    <dt><?//__('Mapa')?></dt>
    <fieldset class="gllpLatlonPicker">
    <input type="text" name="local" class="gllpSearchField" value="<?=$user->local?>">
    <input type="button" class="gllpSearchButton" value="search">
    <br/><br/>
    <div class="gllpMap">Google Maps</div>-->
  <dl>
    <dt><?=__('Latitude')?></dt>
    <dd>
      <?php echo form::input('latitude', $user->latitude)?> p.ex : 41.1566892
    </dd>
  </dl>
  <dl>
    <dt><?=__('Longitude')?></dt>
    <dd>
      <?php echo form::input('longitude', $user->longitude)?>p.ex : -8.623925399999962
    </dd>
  </dl>  
 <dl>
    <dt><?=__('Coordenadas GPS')?></dt>
    <dd>
      <?php echo form::input('gps', $user->gps)?>
    </dd>
  </dl>  
	 
    <!--zoom: <input type="text" class="gllpZoom" value="3"/>-->
    <!--<input type="button" class="gllpUpdateButton" value="update map">-->
  <!--<br/>-->
  <!--</fieldset>-->
  <!--</dl>-->
  
  <dl>
    <dt><?=__('Distancia')?></dt>
    <dd><?php echo form::input('distance', $user->distance)?> Km</dd>
  </dl>
  <dl>
    <dt><?=__('Duração')?></dt>
    <dd><?php echo form::input('duration', $user->duration)?></dd>
  </dl>
  <dl>
    <dt><?=__('Grau de dificuldade')?></dt>
    <dd>
      <select id="degree" name="degree">
	<option value=""></option>
        <option value="I - Fácil">I - Fácil</option>
        <option value="II - Médio Fácil">II - Médio Fácil</option>
        <option value="III - Médio">III - Médio</option>
		<option value="IV - Médio">IV - Médio</option>
        <option value="V - Alta">V - Alta</option>      
      </select> 
    </dd>
  </dl>
  <dl>
    <dt><?=__('Inscrições (Taxa)')?></dt>
    <dd><?php echo form::input('taxe', $user->taxe)?></dd>
  </dl>
<dl>
    <dt><?=__('Breve descrição do Percurso')?></dt>
    <dd><?php echo form::textarea('description', $user->description);?></dd>
    <?//$editor;?>  
  </dl>
  <dl>
    <dt><?=__('Observações')?></dt>
    <dd><?php echo form::textarea('notes', $user->notes);?></dd>
    <?//$editor;?>  
  </dl>
  <dl>
    <dt><?=__('Hora de fim')?></dt>
    <dd><?php echo form::input('time_end', $user->time_end)?> Horas (aproximadamente)</dd>
  </dl>
  <dl>
    <dt><?=__('Pessoa a contactar')?></dt>
    <dd><?php echo form::input('contact', $user->contact)?></dd>
  </dl>
	<?php //echo form::hidden('id', $user->id)?>
  <!--<dl>
    <dt><?=__('tel')?></dt>
    <dd><?php echo form::input('tel', $user->tel)?></dd>
  </dl>-->
  <dl>
    <dt><?=__('Imagem de Background')?></dt>
    <dd><div id="logo"><image src="<?='/datastore/thumbs/'.$image?>"></div><input type="file" id="image" name="image" /></dd>
  </dl>
  
  <?php echo form::button('shindig_post', __('Submit'))?>

</div>

<?php echo form::close()?>

<?php echo form::hidden('site_url', URL::site(NULL, TRUE), array('id' => 'site_url'))?>
