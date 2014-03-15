<ul id="shindig-page-menu">
<?php foreach( $menu as $uri=>$label) : ?>
 <li><?php echo html::anchor($uri, $label) ?></li>
<?php endforeach; ?>
</ul>