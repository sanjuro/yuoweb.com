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

	<?php if (count($following) > 0) :?>
	
	 <h3>You are following </h3>
		<ul class="feed_list">
		<?php foreach ( $following as $friend ) : ?>
			<li> 
				<span class="feedlist_body">
				<?php echo $friend['Following']['username'] ?>
				<?php echo link_to('Show Feed', url_for('@feed_more?username='.$friend['Following']['username'])) ?>
				</span>
			</li>	
		<?php endforeach; ?>
		</ul>	
	</p>
	<?php else : ?>
	<p>
		<?php echo 'You are not following anyone' ?>
	</p>
	<?php endif;?>