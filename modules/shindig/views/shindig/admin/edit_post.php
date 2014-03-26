
<h2><?php echo $form_title ?></h2>

<?php echo form::open() ?>

<?php include Kohana::find_file('views', 'errors') ?>

<div class="span-17">

<dl>
 <dt><?php echo $post->label('title') ?></dt>
 <dd><?php echo $post->input('title') ?></dd>
</dl>

<dl>
 <dt><?php echo $post->label('slug') ?> : <?php echo $site_url ?><span id="slug_example"></span></dt>
 <dd><?php echo $post->input('slug') ?></dd>
</dl>
<div class="clear"></div>  
<div>
 <?php echo $post->label('post_content') ?>
 <?php echo $post->input('post_content', array('class'=>'span-15')) ?>
</div>

<?php echo form::button('shindig_post', __('Submit')) ?>

</div>

<div class="span-5">

<dl>
 <dt><?php echo $post->label('created_on') ?></dt>
 <dd><?php echo $post->input('created_on') ?></dd>
</dl>

<dl>
 <dt><?php echo $post->label('status') ?></dt>
 <dd><?php echo $post->input('status') ?></dd> 
</dl>

<?php if( $use_authors ) : ?>
<dl>
 <dt><?php echo $post->label('author') ?></dt>
 <dd><?php echo $post->input('author') ?></dd>
</dl>
<?php endif; ?>

<dl>
 <dt><?php echo $post->label('type') ?></dt>
 <dd><?php echo $post->input('type') ?></dd>
</dl>


<?php echo $post->input('updated_on', array('type'=>'hidden')) ?>


</div>

<?php echo form::close() ?>

<?php echo form::hidden('site_url', URL::site(NULL, TRUE), array('id'=>'site_url')) ?>
