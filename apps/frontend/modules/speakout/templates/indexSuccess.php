<?php use_stylesheet('speakout.css') ?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Speakout </h1>' )?>

	<h3>Speakout: Home</h3>
    <ul id="speakoutnavigation">
	      <li><?php echo link_to('Create Topic', 'speakout_addtopic', $network) ?></li>
	      <li><?php echo link_to('New Replies', 'speakout_addtopic', $network) ?></li>
	</ul>
	<p>
	<?php if (count($categorys) > 0) :?>
		<?php foreach ( $categorys as $category ) : ?>
			<?php echo 'Category->'.$category['title']?>
			<br>
			<span class="categorydescription"><?php echo $category['description']?></span>
			<ul>
			<?php foreach ( $category['SpeakoutTopic'] as $topic ) : ?>
				<li class="topiclist"><?php echo link_to(  $topic['title'], url_for( '@speakout_showtopic?topic='.$topic['id'].'&network_id='.$network->getId() ) ) ?></li>
			<?php endforeach; ?>
			</ul>
		<?php endforeach; ?>
	</p>
	<?php else : ?>
		<?php echo 'There are no categories' ?>
	<?php endif;?>
