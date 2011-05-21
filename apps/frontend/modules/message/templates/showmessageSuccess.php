<?php use_stylesheet('message.css') ?>

<?php slot( 'title', $network->getTitle().' - Messages' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Messages</h1>' )?>

<h3>Messages: <?php echo $message->getSubject() ?></h3>
<ul id="messagenavigation">
	      <li><?php echo link_to('Inbox', 'message_index', $network) ?></li>
	      <li><?php echo link_to('New Message', 'message_addmessage', $network) ?></li>
</ul>
<p class="message">
		<b>From</b>
		<br>
		<?php $sfGuardUser = $message->getsfGuardUser(); ?>
		<?php echo $sfGuardUser['username'] ?>
		<span class="messageline">
		<?php echo link_to('Reply Message', url_for('message_replymessage', $messagereciever) )?> 
		</span>
		<br><br>
		<b>Message:</b>
		<br>
		<?php echo $message->getSubject() ?>
		<br><br>
		<?php echo $message->getBody() ?>
		<br><br>
		<b>Date Sent:</b>
		<br>
		<?php echo $message->getCreatedAt() ?>
		<br>
		<span class="messageline">
		<?php echo link_to('Reply Message', url_for('message_replymessage', $messagereciever) )?> 
		</span>
</p>
