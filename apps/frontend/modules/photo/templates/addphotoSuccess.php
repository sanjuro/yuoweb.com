<?php use_stylesheet('message.css') ?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Photos</h1>' )?>

	<h3>Photos: Upload Photo</h3>
    <ul id="messagenavigation">
	      <li><?php echo link_to('Photos', 'photo_index', $network) ?></li>
	</ul>
	<p>
		<?php include_partial('photo/photoform', array( 'form' => $form, 'network' => $network )) ?>
	</p>