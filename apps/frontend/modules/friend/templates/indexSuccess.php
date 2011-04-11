<?php use_stylesheet('message.css') ?>
<?php slot( 'title', $network->getTitle().' - Friends' )?>
<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Friends </h1>' )?>
	<h3>Friends</h3>
    <ul id="messagenavigation">
	      <li><?php echo link_to('Search Friend', 'friend_searchfriend', $network) ?></li>	</ul>
	<?php if($friends):?>		<p>		<?php foreach ($friends as $friend) : ?>			<span><?php echo $friend['username'] ?></span>			<span><?php echo link_to('Profile', url_for('@friend_showfriend?user='.$friend['id'].'&network_id='.$network->getId()))?></span>			<span><?php echo link_to('Block', url_for('@friend_blockfriend?user='.$friend['networkuser_id']))?></span>			<br></br>		<?php endforeach;?>		</p>	<?php endif; ?>		<br>
	<h3>Friend Requests</h3>	<?php if ($friendRequests) :?>	<p>		<?php foreach ($friendRequests as $friendRequest) : ?>			<span><?php echo $friendRequest['username'] ?> wants to be your friend</span>			<br>			<span><?php echo link_to('Accept', url_for('@friend_acceptfriendrequest?connection='.$friendRequest['connection_id']))?></span>			<span><?php echo link_to('View', url_for('@friend_showfriend?user='.$friendRequest['id'].'&network_id='.$network->getId()))?></span>			<span><?php echo link_to('Block', url_for('@friend_blockfriend?user='.$friendRequest['id']))?></span>		<?php endforeach;?>	</p>	<?php endif; ?>