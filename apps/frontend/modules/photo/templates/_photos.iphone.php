<?php $count = 0; ?>
<?php foreach ( $photos as $photo ) : ?>
  <ul data-role="listview" data-split-icon="gear" data-split-theme="d" class="ui-listview" role="listbox
	<?php $photo = $photo->getRawValue() ?>
			<li class="ui-li-has-thumb ui-btn ui-btn-icon-right ui-li ui-li-has-alt ui-btn-up-c" role="option" tabindex="-1" data-theme="c">
				<div class="ui-btn-inner">
				<div class="ui-btn-text">
				</div>
				<a href="lists-split-purchase.html" data-rel="dialog" data-transition="slideup" title="Purchase album" class="ui-li-link-alt ui-btn ui-btn-up-c" data-theme="c">
			
			
			<a href="<?php echo url_for('photo_showphoto', array( 'photo' => $photo['id'], 'network_id' => $network->getId() )) ?>">
				<img src="<?php echo "http://".$_SERVER['SERVER_NAME'].$sf_request->getRelativeUrlRoot()."/uploads/pictures/50x50/".$photo['url'] ?>">
			</a>
			</li>
			<?php $count++; ?>
			<?php if ($count % 5 == 0):?>

	<?php endif;?>
 </ul>
<?php endforeach; ?>
