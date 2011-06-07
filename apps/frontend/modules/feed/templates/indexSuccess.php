<?php slot( 'title', $network->getTitle().' - Feeds' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Feeds</h1>' )?>

	<h3> <?php echo 'Your Feed' ?></h3>

	<?php include_partial( 'feed/feedform', array ( 'form' => $form, 'network' => $network ) )?>

	<?php if (count($feedsForUser) > 0) :?>
	<p>

		<?php foreach ( $feedsForUser as $group_date => $group_of_feeds ) : ?>
			<h4 class="feed_list"><?php echo $group_of_feeds['date_for_group']  ?></h4>
			<ul class="feed_list">
			<?php foreach ( $group_of_feeds['feeds'] as  $feed ) : ?>
			<li> 
				<span class="feedlist_body"><?php echo $feed['body'] ?></span>
				<br>
				<?php echo 'By '.$sf_user->getUsername().' '.$feed['posted_at'] ?>	
			</li>	
			<?php endforeach; ?>
			</ul>	
		<?php endforeach; ?>
		
		<?php echo link_to('More', url_for('feed_more', $sf_user->getGuardUser())) ?>

	</p>
	<?php else : ?>
	<p>
		<?php echo 'You have 0 feeds' ?>
	</p>
	<?php endif;?>

	<?php if (count($followingsWithFeeds) > 0) :?>
	
		<?php foreach ( $followingsWithFeeds as $friend ) : ?>
			<?php if ($friend['Following']['id'] != $sf_user->getUserId()) :?>
			  <h3><?php echo 'Feeds for '.$friend['Following']['username'] ?></h3>
			  <p>		  
				<?php foreach ( $friend['Following']['Feed'] as $group_date => $group_of_feeds ) : ?>
					<h4 class="feed_list"><?php echo $group_of_feeds['date_for_group']  ?></h4>
					<ul class="feed_list">
					<?php foreach ( $group_of_feeds['feeds'] as  $feed ) : ?>
					<li> 
						<span class="feedlist_body"><?php echo $feed['body'] ?></span>
						<br>
						<?php echo 'By '.$friend['Following']['username'].' '.$feed['posted_at'] ?>	
					</li>	
					<?php endforeach; ?>
					</ul>	
				<?php endforeach; ?>
		      </p>
	    	<?php endif;?>  
		<?php endforeach; ?>

	</p>
	<?php else : ?>
	<p>
		<?php echo 'You have 0 Friend feeds' ?>
	</p>
	<?php endif;?>