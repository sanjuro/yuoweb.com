<?php use_stylesheet('feeds.css') ?>

<?php slot( 'title', $network->getTitle().' - Feeds' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Feeds</h1>' )?>

	<h3> <?php echo 'Your Feed' ?></h3>

	<?php include_partial( 'feed/feedform', array ( 'form' => $form, 'network' => $network ) )?>

	<?php if (count($connectionsWithFeeds) > 0) :?>
	<p>
		<ul class="feedslist">
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
		<?php echo 'You have 0 feeds' ?>
	<?php endif;?>

	<?php if (count($connectionsWithFeeds) > 0) :?>
		<?php foreach ( $connectionsWithFeeds as $friend ) : ?>		 
		  <h3> <?php echo 'Feeds for '.$friend['reciever_id'] ?></h3>
		  <p>
		  <ul class="feedslist">
		  <?php foreach ( $friend['Reciever']['Feed'] as $feed ) : ?>
			<li>
				<span class="feedlist_body"><?php echo $feed['body'] ?></span>
				<br>
				<?php echo 'Posted at '.$feed['created_at'] ?>	
			</li>		
	      <?php endforeach; ?>
	      </ul>
	      </p>
		<?php endforeach; ?>
	</p>
	<?php else : ?>
		<?php echo 'You have 0 Friend feeds' ?>
	<?php endif;?>