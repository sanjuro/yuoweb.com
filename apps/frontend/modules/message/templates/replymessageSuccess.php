<?php use_stylesheet('message.css') ?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Messages</h1>' )?>

<h3>Message: Reply Message</h3>
<ul id="messagenavigation">
	<li><?php echo link_to('Inbox', 'message_showinbox', $network) ?></li>
</ul>
<p>
	<?php include_partial('message/messageform', array( 'form' => $form, 'network' => $network )) ?>
</p>
<p>
	<?php echo $message->getBody() ?>
</p>
