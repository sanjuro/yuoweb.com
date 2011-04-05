<?php use_stylesheet('message.css') ?>

<?php slot( 'title', $network->getTitle().' - Friends' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Friends: Results </h1>' )?>

	<h3>Search for Friends</h3>
    <ul id="messagenavigation">
	      <li><?php echo link_to('Show Friends', 'friend_showallfriends', $network) ?></li>
	</ul>
	<p>
		<?php include_partial('friend/searchform', array( 'form' => $form, 'network' => $network )) ?>
	</p>

	<h3>Search Results</h3>
	<p>	
	   <?php if (is_object($users) && $users->count() > 0) :?>
		<?php foreach ( $users as $user ):?>
	 	<span><?php echo $user['sfGuardUser']['username'] ?></span>
		 	<?php if(!empty($friends[$user['sfGuardUser']['id']])) :?>
		 		<span>
		 		is your Friend
		 		<span><?php echo link_to('Block', url_for('@friend_blockfriend?user='.$user['id']))?></span>
		 		</span>
		 	<?php else :?>
		 		<span><?php echo link_to('Add', url_for('@friend_addfriendrequest?user='.$user['id']))?></span>
		 		<span><?php echo link_to('View', url_for('@friend_showfriend?user='.$user['sfGuardUser']['id'].'&network_id='.$network->getId()))?></span>
	 	<?php endif; ?>
	 <?php endforeach; ?>
	<?php else :?>
	no users found
	<?php endif;?>
	</p>