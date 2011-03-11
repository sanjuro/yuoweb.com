<ul id="featurenavigation">
	<li><?php echo link_to( 'Layout', url_for( 'feature_layout', $network ) ) ?></li> 
	<?php foreach ($networkfeatures as $networkfeature) :?>
	  <?php $networkfeature = $networkfeature->getRawValue(); ?>	
      <li><?php echo link_to( $networkfeature['Feature']['title'], url_for( 'feature_show', $networkfeature['Feature'] ) ) ?></li>      
    <?php endforeach; ?>
 </ul>