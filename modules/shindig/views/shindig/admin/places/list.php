<h2><?php echo __('Serviços') ?></h2>

<script>
$(document).ready(function() {
	$('#delete').bind("click", function(){
		confirm("Apagar ?");
	});
});


</script>
<table width="100%">
	<?= html::anchor(Route::get('shindig/admin/places')->uri(array('action' => 'add')), __('Novo Imovel')) ?>
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th># quartos</th>
    <th># casas de banho</th>
<!--    <th>Dimensão</th>-->
    <th>Preço</th>
<!--    <th>Imagem</th>-->
    <th>Remover ?</th>
</tr>

<?php foreach($places as $place) : ?>

<tr>
    <td><?php echo html::anchor(Route::get('shindig/admin/places')->uri(array('action'=>'add','id'=>$place->id)),$place->id) ?></td>
    <td><?php echo html::anchor(Route::get('shindig/admin/places')->uri(array('action'=>'add','id'=>$place->id)),$place->name) ?></td>
    <td><?php echo $place->num_rooms?></td>
    <td><?php echo $place->num_badrooms?></td>
<!--    <td>--><?php //echo $place->dimention?><!--</td>-->
    <td><?php echo $place->price?></td>
<!--    <td><img src="/datastore/places/--><?php //echo $place->img?><!--" /></td>-->
    <td><?php echo html::anchor(Route::get('shindig/admin/places')->uri(array('action'=>'delete','id'=>$place->id)),"delete", array('id' => 'delete')) ?></a></td>
</tr>

<?php endforeach; ?>

</table>

<?php echo $pagination->render() ?>
