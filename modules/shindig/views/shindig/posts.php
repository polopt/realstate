
<?php foreach($posts as $i=>$post) : ?>
<div id="shindig-post">
	<h2 id="shindig-post-title"><?php echo html::anchor($post->link, $post->title) ?></h2>
	<div id="shindig-post-content">
		<?php echo $post->verbose('created_on') ?> 
		<?php echo ( $use_excerpt ) ? $post->post_excerpt : $post->post_content ?>
	</div>
</div>
<?php endforeach; ?>

<?php echo $pagination->render() ?>