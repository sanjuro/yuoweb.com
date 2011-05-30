<?php use_stylesheet('message.css') ?>

<?php slot( 'title', $network->getTitle().' - Messages' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Messages</h1>' )?>

	<h3>New Message to <?php echo $user->getUsername()?></h3>
	<p>
		<?php include_partial('message/messageform', array( 'form' => $form, 'network' => $network )) ?>
	</p>