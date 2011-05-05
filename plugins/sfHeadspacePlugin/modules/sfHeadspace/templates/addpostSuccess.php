<?php use_stylesheet('headspace.css') ?>

<?php slot( 'pagetitle', '<h1>Headspace: Add Post</h1>' )?>
	
	<h3>Headspace: Add Post</h3>
	
	<p>
		<?php include_partial('sfHeadspace/post_form', array( 'form' => $form)) ?>
	</p>