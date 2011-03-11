<form action="<?php echo url_for( 'speakout_addreply', $topic )?>" method="post" >

<?php include_partial('speakout/replyform', array( 'form' => $form, 'topic' => $topic )) ?>

</form>

