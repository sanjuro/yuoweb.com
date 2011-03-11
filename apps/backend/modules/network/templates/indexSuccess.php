<?php slot( 'title', 'Spark - Showing your Networks' )?>

<h2><?php echo __('Your Networks')?></h2>

<ul>
<?php foreach( $networks as $network ): ?>
 <li><?php echo link_to( $network->getTitle(), url_for( 'feature_show', $network) ) ?></li>
<?php endforeach; ?>
</ul>