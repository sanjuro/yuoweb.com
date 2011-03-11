	<?php $replys = $replys->getRawValue(); ?>
	<?php if (count($replys) > 0) :?>
		<?php foreach ( $replys as $key => $reply ) : ?>
			<?php echo $reply['body']?>
			<br>
			Posted by  <img src="http://<?php echo $_SERVER['SERVER_NAME'] ?><?php echo $sf_request->getRelativeUrlRoot() ?>/uploads/pictures/50x50/<?php echo $reply['NetworkUser']['sfGuardUser']['UserProfile'][0]['profile_pic'] ?>">  			<?php echo $reply['NetworkUser']['sfGuardUser']['username'] ?> at <?php echo $reply['created_at']?>			<br><br>
		<?php endforeach; ?>
	<?php else : ?>
		<?php echo 'There are no replies' ?>
	<?php endif;?>
