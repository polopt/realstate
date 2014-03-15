<h2><?php echo __('Walks') ?></h2>

<script>
$(document).ready(function() {
	$('#delete').bind("click", function(){
		confirm("Apagar ?");
	});
});


</script>
<table width="100%">
	<?= html::anchor(Route::get('shindig/admin/events')->uri(array('action' => 'add')), __('Nova Actividade')) ?>
<tr>
 <th>ID</th>
 <th>Nome</th>
 <th>Data</th>
 <th>Grau de dificuldade</th>
 <th>Localidade</th>
 <th>Inscritos</th>
 <th>Remover ?</th>
</tr>

<?php foreach($posts as $event) : ?>

<tr>
 <td><?php echo html::anchor(Route::get('shindig/admin/events')->uri(array('action'=>'add','id'=>$event->id)),$event->id) ?></td>
 <td><?php echo html::anchor(Route::get('shindig/admin/events')->uri(array('action'=>'add','id'=>$event->id)),$event->name) ?></td>
 <td><?php echo $event->date?></td>
 <td><?php echo $event->degree ?></td>
 <td><?php echo $event->local ?></td>
 <td><?php echo html::anchor(Route::get('shindig/admin/events')->uri(array('action'=>'inscriptions','id'=>$event->id)),"Inscritos") ?></a>
 <td><?php echo html::anchor(Route::get('shindig/admin/events')->uri(array('action'=>'delete','id'=>$event->id)),"delete", array('id' => 'delete')) ?></a>
</tr>

<?php endforeach; ?>

</table>

<?php echo $pagination->render() ?>
