<?php use_stylesheet('network.css') ?>
<?php use_stylesheet('feedadmin.css') ?>

<?php use_helper('jQuery') ?>

<?php slot( 'title', 'yUoweb - Feeds'  )?>

<h2><?php echo __('User Feeds')?></h2>

<?php if($feeds->count() < 1) :?>
 No new feeds on this network
<?php else : ?>
<?php foreach ($feeds as $feed) : ?>
	<?php $feed = $feed->getRawValue(); ?>
	<?php $feeduser = $feed->getsfGuardUser()?>
	<?php echo $feeduser[0]['username'] ?>
	<ul class="feed_list">
	<?php foreach ($feed['Feed'] as $feeditem) : ?>
		<li>
			<div class="feed_body">
				<?php echo $feeditem['body'] ?>
			</div>
			<div class="feed_posted">
				Fed at <?php echo $feeditem['created_at'] ?>
			</div>
			<div class="feed_type">
			<?php echo $feeditem['FeedType']['title'] ?>
			</div>
		</li>
	<?php endforeach; ?>
	</ul>
<?php endforeach; ?>
<?php endif; ?>