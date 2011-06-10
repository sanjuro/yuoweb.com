<?php slot( 'title', $network->getTitle().' - Feeds' )?>

<?php slot( 'pagetitle', '<h1>More Feeds for '.$user->getUsername().'</h1>' )?>

	<h3>More Feeds for <?php echo $user->getUsername()?></h3>
    <ul id="messagenavigation">
	      <li><?php echo link_to('Show Feeds', 'feed_index', $network) ?></li>
	</ul>

	<?php if ($pager->getNumResults() > 0) :?>
	
	<?php if ($pager->haveToPaginate()): ?>	
			<span class="more_paging">Displaying feeds <?php echo $pager->getFirstIndice() ?> to  <?php echo $pager->getLastIndice() ?>.</span>
	<?php endif;?>
		
	<p>

		<?php foreach ( $feeds as $group_date => $group_of_feeds ) : ?>
			<h4 class="feed_list"><?php echo $group_of_feeds['date_for_group']  ?></h4>
			<ul class="feed_list">
			<?php foreach ( $group_of_feeds['feeds'] as  $feed ) : ?>
			<li> 
				<span class="feedlist_body"><?php echo $feed['body'] ?></span>
				<br>
				<?php echo 'By '.$user->getUsername().' '.$feed['posted_at'] ?>	
				<br>
				<?php echo link_to('Show', url_for('@feed_show?id='.$feed['id'] )) ?>
			</li>	
			<?php endforeach; ?>
			</ul>	
		<?php endforeach; ?>
		
		<?php if ($pager->haveToPaginate()): ?>	
		    <a class="more" href="<?php echo url_for('feed_more', $user) ?>?page=<?php echo $pager->getPreviousPage() ?>">
		      Previous
		    </a>
			
		    <a href="<?php echo url_for('feed_more', $user) ?>?page=<?php echo $pager->getNextPage() ?>">
		      More
		    </a>
	    <?php endif;?>

	</p>
	<?php else : ?>
	<p>
		<?php echo 'You have 0 feeds' ?>
	</p>
	<?php endif;?>
	
