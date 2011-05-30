<?php slot( 'title', $network->getTitle().' - Friends' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Friends</h1>' )?>

	<h3>Friends for <?php echo $user->getUsername() ?></h3>
	<?php if($friends):?>
		<p>
		<?php foreach ($friends as $friend) : ?>
			<?php $friend = $friend->getRawValue(); ?>
			<span><?php echo ucwords($friend['first_name']).' '.ucwords($friend['last_name']) ?></span>
			<span><?php echo link_to('Profile', url_for('friend_showfriend', $friend))?></span>
		<?php endforeach;?>
		</p>
	<?php endif; ?>