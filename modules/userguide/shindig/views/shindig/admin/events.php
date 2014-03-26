<h2><?php echo __('Walks') ?></h2>

<table width="100%">
	
<tr>
 <th>ID</th>
 <th>Name</th>
 <th>date</th>
 <th>degree</th>
 <th>Address</th>
 <th>delete</th>
</tr>

<?php foreach($posts as $event) : ?>

<tr>
 <td><?php echo html::anchor(Route::get('shindig/admin/events')->uri(array('action'=>'add','id'=>$event->id)),$event->id) ?></td>
 <td><?php echo html::anchor(Route::get('shindig/admin/events')->uri(array('action'=>'add','id'=>$event->id)),$event->name) ?></td>
 <td><?php echo $event->date?></td>
 <td><?php echo $event->degree ?></td>
 <td><?php echo $event->local ?></td>
 <td><?php echo html::anchor(Route::get('shindig/admin/events')->uri(array('action'=>'list','id'=>$event->id)),"delete") ?></a>
</tr>

<?php endforeach; ?>

</table>

<?php echo $pagination->render() ?>