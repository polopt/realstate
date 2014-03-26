<h1 id="shindig-post-title"><?php echo $page->title ?></h1>
<div id="shindig-post-content">
<?php echo $page->post_content ?>
<p><?php echo __('Last updated on :date', array(':date'=>$page->verbose('updated_on'))) ?></p>
</div>
