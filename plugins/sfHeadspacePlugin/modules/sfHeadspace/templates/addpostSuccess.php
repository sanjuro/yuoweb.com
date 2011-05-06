<?php use_stylesheet('headspace.css') ?>

<?php slot( 'pagetitle', '<h1>Headspace: Add Post</h1>' )?>
	
	<h3>Headspace: Add Post</h3>
    <ul id="headspacenavigation">
	      <li><?php echo link_to('HeadSpace', 'headspace_index', $network) ?></li>
	      <li><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>" accesskey="0">Back</a></li> 
	</ul>
	
	<p>
		<?php include_partial('sfHeadspace/post_form', array( 'form' => $form)) ?>
	</p>
