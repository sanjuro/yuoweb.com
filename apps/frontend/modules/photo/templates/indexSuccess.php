<?php use_stylesheet('message.css') ?>

<?php slot( 'title', $network->getTitle().' - Photos' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Photos</h1>' )?>

	<h3>Photo: Add Photo</h3>
    <ul id="messagenavigation">
	      <li><?php echo link_to('Upload Photo', 'photo_addphoto', $network) ?></li>
	</ul>
	<p>
		<?php include_partial('photo/photos', array( 'photos' => $photos, 'network' => $network ))?>
	</p>
	
	<h3>Photo: Galleries</h3>
	<p>
	</p>