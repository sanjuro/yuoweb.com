<?php use_stylesheet('speakout.css') ?>

	<?php $replys = $replys->getRawValue(); ?>
	<?php if (count($replys) > 0) :?>
		<?php foreach ( $replys as $key => $reply ) : ?>
			<p class="reply_list">
			Posted by <b><?php echo $reply['NetworkUser']['sfGuardUser'][0]['username'] ?></b> at <?php echo $reply['created_at']?>
			<br>
			<b><?php echo $reply['body']?></b>			</p>
			<br><br>
		<?php endforeach; ?>
	<?php else : ?>
		<?php echo 'There are no replies' ?>
	<?php endif;?>
