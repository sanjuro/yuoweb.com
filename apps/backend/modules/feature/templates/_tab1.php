<?php use_javascript('jquery-ui-1.8.11.custom.min.js') ?>

			  <div id="network_layout">
			  	<ul id="featurelist" class="droppable">
			  		<li id="title" class="nonsortable">Title</li>
			  		<li id="navigation" class="nonsortable">Navigation</li>
			  	<?php foreach ( $features as $feature ): ?>
			  		<li id="<?php echo $feature['Feature']['id']; ?>" class="sortable">
			  			<?php echo $feature['Feature']['title'] ?>
			  			<span id="<?php echo $feature['id']; ?>" class="featurelist_remove"><img src="/images/delete.png"></span>
			  		</li>
			  	<?php endforeach; ?>
			  		<li id="footer" class="nonsortable">Footer</li>
			  	</ul>
			  </div>		
			  <ul id="availblefeaturelist">
			  	<?php $availibleFeatures = $availibleFeatures->getRawValue() ?>
			  	<?php foreach ( $availibleFeatures as $availibleFeature ): ?>
			  		<?php if (is_array($availibleFeature)) :?>
			  			<li> 
							<small><?php echo $availibleFeature['title'] ?></small>
							<span id="<?php echo $availibleFeature['id']; ?>" class="featurelist_add"><img src="/images/new.png"></span>
						</li>
			  		<?php endif; ?>
			  	<?php endforeach; ?>
			  </ul>
			  
			  <div class="clearer"></div>

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

    $(".draggable").draggable({
    	   revert: true,
    	   opacity: .75,
    	   containment: '#tabs-1',
    	   cursor: 'move',
    	   cursorAt: { top: 35, left: 45 },
    	   helper: function(event) {
    	   return $('<div>' + $(this).children("small").text() + '</div>');
    	   },
    	   drag: function(event, ui) {
    	   $('.droppable').removeClass('drophighlight')
    	                  .find('p')
    	                  .html('Drop it!<br/>Right here, right now.');
    	   }
    	});

	$('.featurelist_add').click(function() {
		$.ajax({
		   type: "POST",
		   url: "<?php echo url_for('@feature_additem') ?>",
		   data: ({id : this.getAttribute('id')}),
		   dataType: "html",		   
		   success: function(data){
		       $('#tabs-1').html(data);
		   }
		 }).responseText;
	});

	$('.featurelist_remove').click(function() {
		$.ajax({
		   type: "POST",
		   url: "<?php echo url_for('@feature_removeitem') ?>",
		   data: ({id : this.getAttribute('id')}),
		   dataType: "html",		   
		   success: function(data){
		       $('#tabs-1').html(data);
		   }
		 }).responseText;
	});

});

</script>