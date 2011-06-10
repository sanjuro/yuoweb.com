<?php use_stylesheet('message.css') ?>

<?php slot( 'title', $network->getTitle().' - Friends' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Friends: Results </h1>' )?>

	<h3>Search for Friends</h3>
    <ul id="messagenavigation">
	      <li><?php echo link_to('Show Friends', 'friend_showallfriends', $network) ?></li>
	</ul>

	<h3>Search Results</h3>
	<ul class="searchuser_list">
	   <?php if (is_object($users) && $users->count() > 0) :?>
		<?php foreach ( $users as $user ):?>
	 	<li>
	 	<?php echo $user['username'] ?>
		 	<?php if(!empty($friends[$user['id']])) :?>
		 		is your Friend
		 		<?php echo link_to('Block', url_for('@friend_blockfriend?user='.$user['id']))?>
		 	<?php else :?>
		 		<?php echo link_to('Add', url_for('@friend_addfriendrequest?username='.$user['username']))?>
		 		<?php echo link_to('View', url_for('@friend_showfriend?username='.$user['username']))?>
	 	<?php endif; ?>
	 	</li>
	 <?php endforeach; ?>
	<?php else :?>
		no users found
	<?php endif;?>
	</ul>
	
	<p>
		<?php include_partial('friend/searchform', array( 'form' => $form, 'network' => $network )) ?>
	</p>