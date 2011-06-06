<form action="<?php echo url_for('speakout_addtopic_admin')?>" method="post" >
<?php include_partial( 'sfSpeakoutAdmin/topicform', array( 'form' => $form ))?>
</form>