<h2><?php echo __('Serviços') ?></h2>

<script>
$(document).ready(function() {
	$('#delete').bind("click", function(){
		confirm("Apagar ?");
	});
});


</script>
<table width="100%">
	<?= html::anchor(Route::get('shindig/admin/services')->uri(array('action' => 'add')), __('Novo Serviço')) ?>
<tr>
 <th>ID</th>
 <th>Nome</th>
 <th>Descrição curta</th>
 <th>Imagem</th>
 <th>Remover ?</th>
</tr>

<?php foreach($services as $service) : ?>

<tr>
 <td><?php echo html::anchor(Route::get('shindig/admin/services')->uri(array('action'=>'add','id'=>$service->id)),$service->id) ?></td>
 <td><?php echo html::anchor(Route::get('shindig/admin/services')->uri(array('action'=>'add','id'=>$service->id)),$service->name) ?></td>
 <td><?php echo $service->short_content?></td>
 <td><img src="/datastore/services/<?php echo $service->img?>" /></td>
 <td><?php echo html::anchor(Route::get('shindig/admin/services')->uri(array('action'=>'delete','id'=>$service->id)),"delete", array('id' => 'delete')) ?></a></td>
</tr>

<?php endforeach; ?>

</table>

<?php echo $pagination->render() ?>
