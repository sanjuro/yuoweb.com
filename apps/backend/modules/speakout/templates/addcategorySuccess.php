<form action="<?php echo url_for('speakout_addcategory')?>" method="post" >

<?php include_partial( 'speakout/categoryform', array( 'form' => $form))?>

</form>
