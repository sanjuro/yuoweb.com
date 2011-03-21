<form action="<?php echo url_for('speakout_editcategory', $category)?>" method="post" >

<?php include_partial( 'speakout/categoryform', array( 'form' => $form))?>

</form>
