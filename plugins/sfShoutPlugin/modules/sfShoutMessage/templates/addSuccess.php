<?php use_stylesheet('shout') ?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Shout</h1>' )?>

	<h3>Shout: Send Message</h3>
    <ul id="shoutnavigation">
	      <li><?php echo link_to('Shout', 'shout_index', $network) ?></li>
	</ul>
	<h5>You may only send messages to numbers in <?php $country ?></h5>
	<p>
		<?php include_partial('sfShoutMessage/message_form', array( 'form' => $form, 'network' => $network )) ?>
	</p>