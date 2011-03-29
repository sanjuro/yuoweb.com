<?php if (!empty($friendrequests) > 0) :?>
	<p> 
	<?php foreach ($friendrequests as $friend) : ?>
		<span>Friend request from <?php echo ucwords($friend['first_name']).' '.ucwords($friend['last_name']) ?></span>
	<?php endforeach;?>
	</p>
<?php endif;?>