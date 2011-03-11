<?php use_stylesheet('message.css') ?>

<?php slot( 'title', $network->getTitle().' - Messages' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Messages</h1>' )?>

<h3>Messages: <?php echo $message->getSubject() ?></h3>
<ul id="messagenavigation">
	      <li><?php echo link_to('Inbox', 'message_index', $network) ?></li>
	      <li><?php echo link_to('New Message', 'message_addmessage', $network) ?></li>
</ul>
<p>
		<b>Subject:</b><?php echo $message->getSubject() ?>
		<br>
		<b>Sender:</b><?php echo $message->getSubject() ?>
		<br><br>
		<b>Message:</b>
		<br>
		<?php echo $message->getBody() ?>
		<br><br>
		<b>Date Sent:</b>
		<br>
		<?php echo $message->getCreatedAt() ?>
</p>
<?php echo link_to('Reply Message', url_for('message_replymessage', $messagereciever) )?> 