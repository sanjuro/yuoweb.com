<?php use_stylesheet('headspace.css') ?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - HeadSpace </h1>' )?>

	<h3>HeadSpace: Home</h3>
    <ul id="headspacenavigation">
	      <li><?php echo link_to('Create Post', url_for('headspace_addpost', $network) ) ?></li>
	</ul>
	<p id="recentposts">
	<h5>Newest Posts</h5>
		<?php foreach ( $recentPosts as $recentPost ) : ?>
			<span class="recentpostsubject"><a href="<?php echo url_for('headspace_showpost', $recentPost)?>"><?php echo $recentPost['subject']?></a></span>
			<span class="recentpostcreatedat"><?php echo $recentPost['created_at']?></span>
		<?php endforeach; ?>
	</p>
	<p id="recentpostsbydate">
	<h5>Posts By Month/Year</h5>
		<?php foreach ( $recentPosts as $recentPost ) : ?>
			<span class="recentpostsubject"><?php echo $recentPost['subject']?></span>
			<span class="recentpostcreatedat"><?php echo $recentPost['created_at']?></span>
		<?php endforeach; ?>
	</p>
	<p id="recentpostsbytag">
	<h5>Posts By Tag</h5>
		<?php foreach ( $recentPosts as $recentPost ) : ?>
			<span class="recentpostsubject"><?php echo $recentPost['subject']?></span>
			<span class="recentpostcreatedat"><?php echo $recentPost['created_at']?></span>
		<?php endforeach; ?>
	</p>
	<p id="recentcomments">
	<h5>Latest Comments</h5>
		<?php foreach ( $recentPosts as $recentPost ) : ?>
			<span class="recentpostsubject"><?php echo $recentPost['subject']?></span>
			<span class="recentpostcreatedat"><?php echo $recentPost['created_at']?></span>
		<?php endforeach; ?>
	</p>