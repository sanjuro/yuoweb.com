<?php use_stylesheet('message.css') ?>
<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Photos</h1>' )?>

	<h3>Photo: Show Photo</h3>
    <ul id="messagenavigation">
	      <li><?php echo link_to('Photos', 'photo_index', $network) ?></li>
	      <li><?php echo link_to('Upload Photo', 'photo_addphoto', $network) ?></li>
	</ul>
	<p>
		<img src="http://<?php echo $_SERVER['SERVER_NAME'] ?><?php echo $sf_request->getRelativeUrlRoot() ?>/uploads/pictures/270x270/<?php echo $photo['url']?>">	</p>
	
	<p>
		Views: <?php echo $photo->getViewCount() ?>
	</p>	
	<h3>Photo: Comments</h3>
	<p>
		<?php include_component('comment', 'formComment', array('object' => $photo)) ?>		<?php include_component('comment', 'list', array('object' => $photo, 'i' => 0)) ?>	</p>