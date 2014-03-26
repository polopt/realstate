<h2><?php echo __('Walks') ?></h2>

<table width="100%">
	<?= html::anchor(Route::get('shindig/admin/events')->uri(array('action' => 'add')), __('Nova Actividade')) ?>
<tr>
 <th>ID</th>
 <th>Nome</th>
 <th>Email</th>
</tr>

<?php foreach($subscriptions as $sub) : ?>

<tr>
 <td><?=$sub->id?></td>
 <td><?=$sub->name?></td>
 <td><<?=$sub->email?></td>
</tr>

<?php endforeach; ?>

</table>
