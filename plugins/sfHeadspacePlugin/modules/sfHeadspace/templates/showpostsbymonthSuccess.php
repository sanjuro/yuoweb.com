<?php use_stylesheet('headspace.css') ?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Posts for '.$month.'</h1>' )?>

	<h3>HeadSpace: Posts for <?php echo $month ?></h3>
    <ul id="headspacenavigation">
	      <li><?php echo link_to('HeadSpace', 'headspace_index', $network) ?></li>
	      <li><?php echo link_to('Create Post', 'headspace_addpost', $network) ?></li>
	</ul>

	<?php foreach ($posts as $post) : ?>
		Subject: <a href="<?php echo url_for('headspace_showpost', $post)?>"><?php echo $post['subject']?></a>
		<br>
		Author:<?php echo $post['NetworkUser']['sfGuardUser'][0]['username']?>
		<br>
		Date Posted: <?php echo $post['created_at']?>
		<br><br>
	<?php endforeach; ?>