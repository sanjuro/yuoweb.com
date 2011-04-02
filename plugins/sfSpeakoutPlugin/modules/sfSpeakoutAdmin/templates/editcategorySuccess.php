<form action="<?php echo url_for('speakout_editcategory_admin', $category)?>" method="post" >
<?php include_partial( 'speakout/categoryform', array( 'form' => $form))?>
</form>