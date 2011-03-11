<h3><?php echo __('Add Advert') ?></h3>

<form action="<?php echo url_for('advert_create', $advert)?>" enctype="multipart/form-data" method="post" >
        
	<?php include_partial( 'advert/form', array( 'form' => $form, 'advert' => $advert ))?>
		
</form>