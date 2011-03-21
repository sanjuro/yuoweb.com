	<?php if (count($replys) > 0) :?>
	    <?php $replys = $replys->getRawValue();  ?>
		<?php foreach ( $replys as $key => $reply ) : ?>
			<div class="replylistitem">
			<span style="float:right;">
				<ul class="sf_admin_actions">
					<li class="sf_admin_action_delete"><?php echo link_to('Delete', url_for( 'speakout_deletereply', array( 'id' => $reply['id'] ) ) ) ?></li>  
				</ul>
			</span>
			<?php echo $reply['body']?>
			<br>
			<b>Posted by  <?php echo $reply['NetworkUser']['sfGuardUser']['username'] ?> at <?php echo $reply['created_at']?> </b>
			</div>
		<?php endforeach; ?>
	<?php else : ?>
		<?php echo 'There are no replies' ?>
	<?php endif;?>
