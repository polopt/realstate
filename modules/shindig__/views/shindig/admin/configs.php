
<h2><?php echo $form_title?></h2>

<?php //echo form::open()?>
<form id="upload_form" action="" method="post" enctype="multipart/form-data">

<div class="messages">
	<?if(isset($msg) and !empty($msg)) :?>
		<?=$msg?>
	<? endif; ?>
</div>

<?php include Kohana::find_file('views', 'errors')?>

<div class="span-17">

	<dl>
		<dt><?php echo __('Nome Empresa')?></dt>
		<dd><?php echo form::input('entreprise_name', $config->name)?></dd>
	</dl>
	<dl>
		<dt><?php echo __('Morada')?></dt>
		<dd><?php echo form::textarea('address', $config->address)?></dd>
	</dl>
	<dl>
		<dt><?php echo __('Email de contacto nos formularios')?></dt>
		<dd><?php echo form::input('email', $config->email)?></dd>
	</dl>

	<dl>
		<dt><?php echo __('Pagina facebook')?></dt>
		<dd><?php echo form::input('fb', $config->fb)?></dd>
	</dl>
	
	<dl>
		<dt><?php echo __('Conteudo de email de inscrição')?></dt>
		<dd><?php echo form::textarea('emailcontent', $config->emailcontent)?></dd>
	</dl>
	
	<dl>
		<dt><?=__('Logo')?></dt>
		<dd><div id="logo"><image src="<?=($config->logo == null)?'':'/datastore/'.$config->logo?>"></div><input type="file" id="logo" name="logo" /></dd>
	</dl>
	
	<?php echo form::button('shindig_post', __('Submit'))?>

</div>

<?php echo form::close()?>

<?php echo form::hidden('site_url', URL::site(NULL, TRUE), array('id' => 'site_url'))?>
