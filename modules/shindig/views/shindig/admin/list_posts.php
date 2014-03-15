<h2><?php echo __('Posts') ?></h2>

<table width="100%">
<?php foreach($posts as $i=>$post) : ?>

<tr>
 <td><?php echo html::anchor(Route::get('shindig/admin')->uri(array('action'=>'update','id'=>$post->id)),$post->id) ?></td>
 <td><?php echo html::anchor(Route::get('shindig/admin')->uri(array('action'=>'update','id'=>$post->id)),$post->title) ?></td>
 <td><?php echo $post->verbose('created_on') ?></td>
 <td><?php echo $post->verbose('type') ?></td>
 <td><?php echo $post->verbose('status') ?></td>
 <td><?php echo html::anchor(Route::get('shindig/admin')->uri(array('action'=>'list','id'=>$post->id)),"delete") ?></a>
</tr>

<?php endforeach; ?>

</table>

<?php echo $pagination->render() ?>