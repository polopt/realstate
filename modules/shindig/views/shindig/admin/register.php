<?php echo form::open(NULL, array('id' => 'register', 'enctype' => 'multipart/form-data')) ?>

<h1><?php echo __('Novo Utilizador') ?></h1>

<?php include Kohana::find_file('views', 'errors') ?>

<ol>
	<li><label><span><?php echo __('Nome') ?></span> <?php echo form::input('firstname', $user->firstname) ?></label></li>
	<li><label><span><?php echo __('Apelido') ?></span> <?php echo form::input('lastname', $user->lastname) ?></label></li>
<li><label><span><?php echo __('email') ?></span> <?php echo form::input('email', $user->email) ?></label></li>
<li><label><span><?php echo __('Username') ?></span> <?php echo form::input('username', $user->username) ?></label></li>
<li><label><span>Password</span> <?php echo form::password('password') ?></label></li>
<li><label><span>Descrição</span> <?php echo form::textarea('description', $user->description) ?></label></li>
<li><label><span>Foto</span> <?php echo form::file('photo') ?></label></li>
</ol>

<?php echo form::button(NULL, 'Save', array('type' => 'submit')) ?>

<?php echo form::close() ?>