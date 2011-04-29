<?php use_stylesheet('speakout.css') ?>
<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Speakout: Upload Photo</h1>' )?>
	
	<h3>Speakout: Add Reply</h3>
	
	<p>
		<?php include_partial('sfSpeakoutFrontend/replyform', array( 'form' => $form, 'topic' => $topic)) ?>
	</p>