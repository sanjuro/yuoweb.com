<?php use_stylesheet('message.css') ?>

<?php slot( 'title', $network->getTitle().' - Friends' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Friends</h1>' )?>

	<h3>Friends</h3>
    <ul id="messagenavigation">
	      <li><?php echo link_to('Search Friend', 'friend_searchfriend', $network) ?></li>
	</ul>
	<?php if($friends):?>
		<p>
		<?php foreach ($friends as $friend) : ?>
			<span><?php echo ucwords($friend['first_name']).' '.ucwords($friend['last_name']) ?></span>
			<span><?php echo link_to('Profile', url_for('@friend_showfriend?user='.$friend['id'].'&network_id='.$network->getId()))?></span>
			<span><?php echo link_to('Block', url_for('@friend_blockfriend?user='.$friend['id']))?></span>
		<?php endforeach;?>
		</p>
	<?php endif; ?>
	
	<h3>Friend Requests</h3>
	<p>
	
	</p>
