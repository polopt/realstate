<h2><?php echo __('Utilizadores')?></h2>

<table width="100%">
	<?= html::anchor(Route::get('shindig/admin')->uri(array('action' => 'add_user')), __('Novo Utilizador')) ?>
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Nome</th>
		<th>Apelido</th>
		<th>Foto</th>
		<th>delete</th>
	</tr>

	<?php foreach ($posts as $event) :?>

		<tr>
			<td><?php echo html::anchor(Route::get('shindig/admin')->uri(array('action' => 'add_user', 'id' => $event->id)), $event->id)?></td>
			<td><?php echo $event->username;?></td>
			<td><?php echo $event->firstname;?></td>
			<td><?php echo $event->lastname;?></td>
			<td><img class="list_img_user" src="/datastore/users/<?php echo $event->img?>"></td>
			<td>Apagar</td>
		</tr>

	<?php endforeach;?>

</table>

<?php echo $pagination->render()?>