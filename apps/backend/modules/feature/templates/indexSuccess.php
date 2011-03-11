<?php use_stylesheet('network.css') ?>
<?php use_helper('Text') ?>

<?php use_helper('jQuery') ?>
<?php jq_add_plugins_by_name(array('sortable')) ?>

<?php slot( 'title', 'Spark - Showing Network: '.$network->getTitle()  )?>
 
<div id="network">
  <h1><?php echo $network->getTitle()  ?></h1>
 
  <?php if ($network->getLogo()): ?>
    <div class="logo">
      <a href="<?php echo $network->getUrl() ?>">
        <img src="/uploads/networks/<?php echo $job->getLogo() ?>"
          alt="<?php echo $network->getClient() ?> logo" />
      </a>
    </div>
  <?php endif; ?>
 
  <div class="description">
    <?php echo simple_format_text($network->getDescription()) ?>
  </div>
 
  <div style="padding: 20px 0">
    <a href="<?php echo url_for('network/edit?id='.$network->getId()) ?>">
      <?php __('Edit')?>
    </a>
  </div>
  
  <div id="network_layout">
  	<ul id="featurelist">
  		<li id="title" class="nonsortable">Title</li>
  		<li id="navigation" class="nonsortable">Navigation</li>
  	<?php foreach ( $features as $feature ): ?>
  		<li id="<?php echo $feature->getId(); ?>" class="sortable"><?php echo $feature->getTitle() ?></li>
  	<?php endforeach; ?>
  		<li id="footer" class="nonsortable">Footer</li>
  	</ul>
  </div>
</div>

<?php
echo jq_drop_receiving_element('#network_layout',array(
   'url'      => '@feature_additem',
   'accept'   => '.droppable', 
   'update'   => 'featurelist',
   'drop'     => "function(ev, ui){".jq_remote_function(array(
															  'url' => '@feature_additem',
															  'update'   => 'featurelist',
														      'loading'  => jq_visual_effect('fadeIn', '#cartindicator', array('speed' => 'normal',)),  
														      'complete' => jq_visual_effect('fadeOut', '#cartindicator', array('speed' => 'normal',)),  
													          'with' => "'id=' + ui.draggable.attr('id')" ))."}"
    )) 
?>    
<script type="text/javascript">
$(document).ready(
  function() 
  {
    $("#featurelist").sortable(
    { 
      items: '.sortable',
      update: function(event, ui) 
      {
		var featureOrder = $(this).sortable('toArray').toString();
		$.post('<?php echo url_for('@feature_reorder')?>', {featureOrder:featureOrder});
      }      
      
    } );

	$( "#featurelist li.nonsortable" ).disableSelection();	

  });
</script>
  