<?php echo form::open(NULL, array('id' => 'login')) ?>

<h1><?php echo __('Login') ?></h1>

<?php include Kohana::find_file('views', 'errors') ?>

<ol>
<li><label><span><?php echo __('Username') ?></span> <?php echo form::input('username', $user->username) ?></label></li>
<li><label><span>Password</span> <?php echo form::password('password') ?></label></li>
</ol>

<?php echo form::button(NULL, 'Login', array('type' => 'submit')) ?>

<?php echo form::close() ?>
