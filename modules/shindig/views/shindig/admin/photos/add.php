<script type="text/javascript" src="/media/js/jquery.uploadprogress.0.3.js"></script>
<script type="text/javascript">
//jQuery(function () {
//	// apply uploadProgress plugin to form element
//	// with debug mode and array of data fields to publish to readout:
//	jQuery('#upload_form').uploadProgress({ 
//						progressURL:'jquery-uploadprogress-demo.php',
//						debugDisplay:'#upload-progress-debug', 
//						displayFields : ['kb_uploaded','kb_average','est_sec'],
//						start: function() { jQuery('input[type=submit]', this).val('uploading ... ').attr('disabled',true); },
//						success: function(o) { 
//							jQuery(this).prepend('<h3>Upload Complete</h3><p><b>'+uploadProgressData[o.id]['bytes_total']+' bytes received</b></p>'); 
//							jQuery('input', this).attr('disabled',true);}
//					});
//});
</script>

<style type="text/css">

form {
	border:1px outset #330099;
	padding:10px;
	background-color:#FFF8F2;
	width:400px;
}

form fieldset {
	border:1px inset #309;
}

#upload-progress-debug {
	background-color:#CCCCFF;
	border:1px #6666CC dashed;
	font-family:Tahoma, Verdana, Arial, Helvetica, sans-serif;
	font-size:11px;
	width:400px;
	padding:10px;
	margin:10px 0px;
}

.upload-progress {
	background-image: url('images/infobox200x40.gif');
	width:200px;
	height:40px;
}

.upload-progress div.meter {
	width:20px;
	height:7px;
	font-size:1px; /* IE display hack */
	background-color:#FFCC00;
	margin-left:10px;
	margin-top:1px;
	border:1px solid black;
}

.upload-progress div.readout {
	padding:5px 0px 0px 12px;
	font-family:"Courier New", Courier, monospace;
	font-size:10px;
	line-height:10px;
}

.upload-progress div.readout span {
	font-weight:bold;
}
</style>


<h1>Upload Photos</h1>
<div class="msg">
	<?=$msg?>
	<?=$msg_error?>
</div>
<form id="upload_form" action="" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Selecionar photos para upload:</legend>
		<input type="file" id="file1" name="file1" /><br />
		<textarea name="description1">Insira descrição aqui ...</textarea><br />
		<input type="file" id="file2" name="file2" /><br />
		<textarea name="description2">Insira descrição aqui ...</textarea><br />
		<input type="file" id="file3" name="file3" /><br />
		<textarea name="description3">Insira descrição aqui ...</textarea><br />
		<input type="hidden" name="MAX_FILE_SIZE" value="67108864" />
		<label for="campaign_id">Places :
			<select name="campaing_id">
				<option value="0">Place</option>
				<? foreach($houses as $campaign) : ?>
					<option value="<?=$campaign->id?>"><?=$campaign->name?></option>
				<? endforeach;?>
			</select>
		</label>
		<input type="submit" name="submit" value="Upload File(s)" id="submit" />
	</fieldset>
</form>
<?if (isset($upload_id)) {?>
	<h2>Server created upload_id: <?=$upload_id?></h2>
<? }?>
<!--<h3>Upload Progress:</h3>
<div class="upload-progress">
	<div class="readout">
		<span class="kb_uploaded">0</span> kb uploaded - <span class="kb_average">0</span> kb/sec <br/><span class="est_sec">0</span> seconds remain
	</div>
	<div class="meter"></div>
</div>-->
