<?php use_stylesheet('speakout.css') ?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - New Replies </h1>' )?>

	<h3>Speakout: New Replies</h3>
    <ul id="speakoutnavigation">
	      <li><?php echo link_to('Create Topic', 'speakout_addtopic', $network) ?></li>
	</ul>
	<p>
		<?php include_partial('sfSpeakoutFrontend/replylist', array('replys' => $newReplys)) ?>
	</p>