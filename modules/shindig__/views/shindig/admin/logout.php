<?php echo form::open(NULL, array('id' => 'logout')) ?>

<h1 class="top">Log Out</h1>

<p>Are you sure you want to log out?</p>

<?php echo form::button('logout', 'Yes, please!', array('type' => 'submit')) ?>

<?php echo form::close() ?>