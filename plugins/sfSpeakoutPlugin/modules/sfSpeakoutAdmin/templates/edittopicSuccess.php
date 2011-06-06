<form action="<?php echo url_for('speakout_edittopic_admin', $topic)?>" method="post" >
<?php include_partial( 'sfSpeakoutAdmin/topicform', array( 'form' => $form))?>
</form>