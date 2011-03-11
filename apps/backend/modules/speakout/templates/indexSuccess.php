<?php use_stylesheet('network.css') ?>
<?php use_stylesheet('speakout.css') ?>

<?php use_helper('jQuery') ?>

<?php slot( 'title', 'Spark - Speakout'  )?>

<h2><?php echo __('Your Speakout Feature')?></h2>
 
<h3><?php echo __('Categories')?> - <?php echo link_to( __('Add Category'), url_for( 'speakout_addcategory' ) ) ?></h3>
<?php foreach ( $categorys as $category ) : ?>
	<h4><?php echo $category['title'].' ('.count($category['SpeakoutTopic']).') - '.$category['description']?>
	  	<ul class="sf_admin_actions" style="display:inline;">
		  <li class="sf_admin_action_edit"><?php echo link_to( __('Edit'), url_for( 'speakout_editcategory', $category) ) ?></li>  
	  	</ul>
	</h4>
	<?php foreach ( $category['SpeakoutTopic'] as $topic ) : ?>
		<?php echo $topic['title'] ?>
	  	<ul class="sf_admin_actions" style="display:inline;">
		  <li class="sf_admin_action_edit"><?php echo link_to( __('Edit'), url_for( 'speakout_edittopic', $topic ) ) ?></li>  
 		  <li class="sf_admin_action_list"><?php echo link_to( __('Show'), url_for( 'speakout_showtopic', $topic ) ) ?></li>  
	  	</ul>
		<br>
		<?php echo $topic['description'] ?>
		<br><br>
	<?php endforeach; ?>
	
	 <ul class="sf_admin_actions" style="display:inline;">
		  <li class="sf_admin_action_create"><?php echo link_to( __('Add Topic'), url_for( 'speakout_addtopic' ))  ?></li>  
	  </ul>
	<br><br>
<?php endforeach; ?>