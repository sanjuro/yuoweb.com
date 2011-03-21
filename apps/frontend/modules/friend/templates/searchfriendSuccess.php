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

	<?php $users = $users->getRawValue(); ?>
	 <?php if ($users): ?>
    <h3>Search Results</h3>
	<p>
		<?php foreach ( $users as $user ):?>
	 	<span><?php echo $user['sfGuardUser']['username'] ?></span>
		 	<?php if(!empty($friends[$user['sfGuardUser']['id']])) :?>
		 		<span>
		 		is your Friend
		 		<span><?php echo link_to('Block', url_for('@friend_blockfriend?user='.$user['id']))?></span>
		 		</span>
		 	<?php else :?>
		 		<span><?php echo link_to('Add', url_for('@friend_addfriendrequest?user='.$user['id']))?></span>
	 	<?php endif; ?>
	 <?php endforeach; ?>
	</p>
	 <?php endif; ?>
