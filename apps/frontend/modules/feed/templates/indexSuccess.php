<?php slot( 'title', $network->getTitle().' - Feeds' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Feeds</h1>' )?>

	<h3> <?php echo 'Your Feed' ?></h3>

	<?php include_partial( 'feed/feedform', array ( 'form' => $form, 'network' => $network ) )?>

	<?php if (count($feedsForUser) > 0) :?>
	<p>
		<ul class="feed_list">
		<?php foreach ( $feedsForUser as $feed ) : ?>
			<li>
				<span class="feedlist_body"><?php echo $feed['body'] ?></span>
				<br>
				<?php echo 'Posted at '.$feed['created_at'] ?>	
			</li>	
		<?php endforeach; ?>
		</ul>	
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
			  <ul class="feed_list">
			  <?php foreach ( $friend['Following']['Feed'] as $feed ) : ?>
				<li>
					<span class="feedlist_body"><?php echo $feed['body'] ?></span>
					<br>
					<?php echo 'Posted at '.$feed['created_at'] ?>	
				</li>		
		      <?php endforeach; ?>
		      </ul>
		      </p>
	    	<?php endif;?>  
		<?php endforeach; ?>

	</p>
	<?php else : ?>
	<p>
		<?php echo 'You have 0 Friend feeds' ?>
	</p>
	<?php endif;?>