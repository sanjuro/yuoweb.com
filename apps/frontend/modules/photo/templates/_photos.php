<?php $count = 0; ?>
<?php foreach ( $photos as $photo ) : ?>
	<?php $photo = $photo->getRawValue() ?>
			<a href="<?php echo url_for('photo_showphoto', array( 'photo' => $photo['id'], 'network_id' => $network->getId() )) ?>">
				<img src="<?php echo "http://".$_SERVER['SERVER_NAME'].$sf_request->getRelativeUrlRoot()."/uploads/pictures/50x50/".$photo['url'] ?>">
			</a>
			<?php $count++; ?>
			<?php if ($count % 5 == 0):?>
				<br>
	<?php endif;?>
<?php endforeach; ?>