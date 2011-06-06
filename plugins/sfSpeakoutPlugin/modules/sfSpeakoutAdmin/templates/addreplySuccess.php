<form action="<?php echo url_for( 'speakout_addreply_admin', $topic )?>" method="post" >
<?php include_partial('sfSpeakoutAdmin/replyform', array( 'form' => $form, 'topic' => $topic )) ?>
</form>