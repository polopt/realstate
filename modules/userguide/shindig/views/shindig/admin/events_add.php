
<h2><?php echo $form_title?></h2>

<?php echo form::open()?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>


<!-- CSS and JS for our code -->
<link rel="stylesheet" type="text/css" href="/media/css/jquery-gmaps-latlon-picker.css"/>
<script src="/media/js/jquery-gmaps-latlon-picker.js"></script>
<script>
	$(function() {
		$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
	});
</script>  

<?php include Kohana::find_file('views', 'errors')?>

<div class="span-17">

	<dl>
		<dt><?php echo __('Name')?></dt>
		<dd><?php echo form::input('name', $user->name)?></dd>
	</dl>

	<dl>
		<dt><?=__('Data')?></dt>
		<dd><?=form::input('date', $user->date, array('id' => 'datepicker'))?></dd>
	</dl>
	<div class="clear"></div>  
	<dl>
		<dt><?=__('Mapa')?></dt>
		<fieldset class="gllpLatlonPicker">
		<input type="text" name="local" class="gllpSearchField" value="<?=$user->local?>">
		<input type="button" class="gllpSearchButton" value="search">
		<br/><br/>
		<div class="gllpMap">Google Maps</div>
		<br/>
		lat/lon:
			<input type="text" name ="latitude" class="gllpLatitude" value="<?=!is_null($user->longitude)?$user->longitude:10;?>"/>
			/
			<input type="text" name="longitude" class="gllpLongitude" value="<?=!is_null($user->latitude)?$user->latitude:10;?>"/>
		zoom: <input type="text" class="gllpZoom" value="3"/>
		<input type="button" class="gllpUpdateButton" value="update map">
		<br/>
	</fieldset>
	</dl>
	
	<div>
		<?=__('Description')?>
		<?=$editor;?>	
		
	</div>
	<dl>
		<dt><?=__('Grau de dificuldade')?></dt>
		<dd>
			<select id="degree" name="degree">
			<? for($i=1; $i<11; $i++) : ?>
				<option value="<?=$i?>"><?=$i?></option>
			<? endfor; ?>
			</select>	
		</dd>
	</dl>

	<?php echo form::button('shindig_post', __('Submit'))?>

</div>

<?php echo form::close()?>

<?php echo form::hidden('site_url', URL::site(NULL, TRUE), array('id' => 'site_url'))?>
