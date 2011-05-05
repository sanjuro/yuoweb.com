<?php use_stylesheet('headspace.css') ?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Photos</h1>' )?>

	<h3>HeadSpace: Show Post</h3>
    <ul id="headspacenavigation">
	      <li><?php echo link_to('HeadSpace', 'headspace_index', $network) ?></li>
	      <li><?php echo link_to('Create Post', 'headspace_addpost', $network) ?></li>
	</ul>

	<h5><?php echo $post->getSubject()?></h5>
	<p>
		<?php echo $post->getBody()?>
	</p>
	
	<p><?php $sfGuardUser = $post->getNetworkUser()->getsfGuardUser()->getRawValue();?>
		<b>Author:</b> <?php echo $sfGuardUser[0]['username'] ?>
		<br>
		<b>Posted on:</b> <?php echo $post->getCreatedAt() ?>
	</p>
	

	<h3>Headspace: Comments</h3>
	<p>
		<?php include_component('comment', 'formComment', array('object' => $post)) ?>
		<?php include_component('comment', 'list', array('object' => $post, 'i' => 0)) ?>
	</p>