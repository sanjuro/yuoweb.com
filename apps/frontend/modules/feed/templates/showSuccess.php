<?php slot( 'pagetitle', '<h1>Showing Feed</h1>' )?>

	<h3>Feed: Show Feed</h3>
    <ul id="messagenavigation">
	      <li><?php echo link_to('Show Feeds', 'feed_index', $network) ?></li>
	</ul>

	<p>
		<span class="feedlist_body"><?php echo $feed['body'] ?></span>
		<br>
		<?php echo 'By '.link_to($feed->getsfGuardUser()->getUsername(), url_for('friend_showfriend', $feed->getsfGuardUser())).' at '.
			Yuoweb::time_offset(strtotime($feed['created_at'])) ?>	

	</p>
		
	<p>
		<?php include_component('comment', 'list', array('object' => $feed, 'i' => 0)) ?>
		<?php include_component('comment', 'formComment', array('object' => $feed)) ?>
	</p>