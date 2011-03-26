<?php use_stylesheet('speakout.css') ?>

	<?php $replys = $replys->getRawValue(); ?>
	<?php if (count($replys) > 0) :?>
		<?php foreach ( $replys as $key => $reply ) : ?>
			<p class="reply">
			<b><?php echo $reply['body']?></b>
			<br>
			Posted by  <img src="http://<?php echo $_SERVER['SERVER_NAME'] ?><?php echo $sf_request->getRelativeUrlRoot() ?>/uploads/pictures/50x50/<?php echo $reply['NetworkUser']['sfGuardUser']['UserProfile'][0]['profile_pic'] ?>">  			<?php echo $reply['NetworkUser']['sfGuardUser'][0]['username'] ?> at <?php echo $reply['created_at']?>			</p>
			<br><br>
		<?php endforeach; ?>
	<?php else : ?>
		<?php echo 'There are no replies' ?>
	<?php endif;?>
