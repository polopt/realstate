<script type="text/javascript">
//	Cufon.replace('h1', {textShadow: '1px 1px #fff'});
//	Cufon.replace('.description', {textShadow: '1px 1px #fff'});
//	Cufon.replace('a', {textShadow: '1px 1px #fff', hover: true});
	$(document).ready(function(){
		$( "#actividade" ).change(function() {
			 $("#myForm").submit();
		});
	});
</script>
<div id="select">
		<form class="" id="myForm" method="POST" action="">
			<fieldset>
				<div class="pure-control-group">
					<label for="actividade">Actividade  : </label>
					<select name="actividade" id="actividade">
						<option value="0">Todas</option>
						<? foreach($events as $e) : ?>
							<?if(ORM::factory("photo")->where("event_id", "=", $e->id)->where("is_background", "=", 0)->count_all() > 0): ?>
							<option value="<?=$e->id; ?>" <?=($event == $e->id)?'selected':''?>><?=$e->name; ?></option>
							<?endif;?>
						<? endforeach; ?>
					</select>
				</div>
			</fieldset>
		</form>
</div>

<div id="photos">
	<?$i = 0?>
	<table>
	<?foreach ($photos as $photo) :?>
		<?if($i % 4 == 0): ?>
		<tr>
		<?else :?>
			
		<?endif ?>
		<td>
			<div class="<?=($i % 4 == 0) ? 'galeria_img last' : 'galeria_img'?>"><?=$photo->event->name;?>
				<div class="border_img">
					<img src="/datastore/thumbs/<?=$photo->id?>.jpg"/> <span><?php echo html::anchor(Route::get('shindig/admin/photos')->uri(array('action'=>'list','id'=>$photo->id)),"delete") ?></span>
				</div>
			</div>
		</td>
		<?$i++?>
		<?if($i % 4 == 0): ?>
		</tr>
		<? endif; ?>
	<?endforeach;?>
	<table>
</div>
