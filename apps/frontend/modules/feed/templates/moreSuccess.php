<?php slot( 'title', $network->getTitle().' - Feeds' )?>

<?php slot( 'pagetitle', '<h1>More Feeds for '.$user->getUsername().'</h1>' )?>

	<h3>More Feeds for <?php echo $user->getUsername()?></h3>

	<?php if (count($pager->getNumResults()) > 0) :?>
	<p>

		<?php foreach ( $feeds as $group_date => $group_of_feeds ) : ?>
			<h4 class="feed_list"><?php echo $group_of_feeds['date_for_group']  ?></h4>
			<ul class="feed_list">
			<?php foreach ( $group_of_feeds['feeds'] as  $feed ) : ?>
			<li> 
				<span class="feedlist_body"><?php echo $feed['body'] ?></span>
				<br>
				<?php echo 'By '.$user->getUsername().' '.$feed['posted_at'] ?>	
			</li>	
			<?php endforeach; ?>
			</ul>	
		<?php endforeach; ?>
		
		<?php if ($pager->haveToPaginate()): ?>		
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
	
