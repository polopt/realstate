<?php echo form::open(NULL, array('id' => 'register')) ?>

<h1><?php echo __('Register') ?></h1>

<?php include Kohana::find_file('views', 'errors') ?>

<ol>
<li><label><span><?php echo __('email') ?></span> <?php echo form::input('email', $user->email) ?></label></li>
<li><label><span><?php echo __('Username') ?></span> <?php echo form::input('username', $user->username) ?></label></li>
<li><label><span>Password</span> <?php echo form::password('password') ?></label></li>
</ol>

<?php echo form::button(NULL, 'Save', array('type' => 'submit')) ?>

<?php echo form::close() ?>