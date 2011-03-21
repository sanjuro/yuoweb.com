<h3><?php echo $network->getTitle() ?></h3>
<h4><?php echo __('Settings') ?></h4>
<form action="<?php echo url_for('network_show', $network)?>" method="post" >
	<?php include_partial( 'network/networkform', array( 'form' => $form ))?>		
</form>