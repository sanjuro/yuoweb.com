<?php use_helper('jQuery') ?>

<?php slot( 'title', 'Spark - Photos'  )?>

<h2><?php echo __('Edit Photo')?></h2>

<form action="<?php echo url_for('photo_edit', $photo)?>" enctype="multipart/form-data" method="post" >
        
	<?php include_partial( 'photo/photoform', array( 'form' => $form, 'photo' => $photo ))?>
		
</form>