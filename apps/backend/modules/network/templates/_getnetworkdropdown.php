<select id="network_context" name="network_context">
<?php foreach ($networks as $network) :?>
	<?php if ( $network->getSlug() === $sf_user->getNetworkSlug() ) : ?>
	<option selected="selected" value="<?php echo $network->getSlug() ?>"><?php echo $network->getTitle() ?></option>
	<?php else : ?>
	<option value="<?php echo $network->getSlug() ?>"><?php echo $network->getTitle() ?></option>
	<?php endif; ?>
<?php endforeach; ?>
</select>

<script type="text/javascript">
$(document).ready(function() {

	$("#network_context").change(  function() 
  		{
  			$.ajax({
			  url: "<?php echo url_for('@network_change')?>",
			  type: "POST",
      		  data: ({ network : $("#network_context").val() }),
			  complete: function(){
      		  	window.location.reload()
			  },      		 
			  async: false
			  }).responseText;
			return false;
		});
		
});
</script>