<?php use_stylesheet('headspace.css') ?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Posts</h1>' )?>

	<h3>HeadSpace: Show Post</h3>
    <ul id="headspacenavigation">
	      <li><?php echo link_to('HeadSpace', 'headspace_index', $network) ?></li>
	      <li><?php echo link_to('Create Post', 'headspace_addpost', $network) ?></li>
	</ul>

	<h5><?php echo $post->getSubject()?></h5>
	<p>
		<?php echo $post->getBody()?>
	</p>
	
	<p>
		<?php $sfGuardUser = $post->getNetworkUser()->getsfGuardUser()->getRawValue();?>
		<span class="headspace_author"><b></span>Author:</b> <?php echo $sfGuardUser[0]['username'] ?></span>
		<br>
		<span class="headspace_createdat"><?php echo date('D', strtotime($post->getCreatedAt() ))?> at <?php echo date('H:m:s', strtotime($post->getCreatedAt())) ?></span>
	</p>
	
	<p>
		<?php include_component('comment', 'list', array('object' => $post, 'i' => 0)) ?>
		<?php include_component('comment', 'formComment', array('object' => $post)) ?>
	</p>