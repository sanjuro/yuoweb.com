<h3><?php echo __('Add Network') ?></h3>

<form action="<?php echo url_for('network_add', $client)?>" method="post" >   

	<?php include_partial( 'network/networkform', array( 'form' => $form ))?>	
		
</form>