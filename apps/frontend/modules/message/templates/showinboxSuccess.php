<?php use_stylesheet('message.css') ?>

<?php slot( 'title', $network->getTitle().' - Messages' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Messages</h1>' )?>

	<h3>Messages: Inbox</h3>
    <ul id="messagenavigation">
	      <li><?php echo link_to('New Message', 'message_addmessage', $network) ?></li>
	</ul>
	<p>
	<?php if (count($messages) > 0) :?>
		<?php foreach ( $messages as $value ) : ?>
			<?php $message = $value->getMessage(); ?>
			<?php if ($value->getMessagestatusId() == 1) :?>
			<span class="messageline newmessage">
			<?php else: ?>
			<span class="messageline">
			<?php endif; ?>			
				<?php echo link_to($message->getSubject(), url_for('message_showmessage', $value) )?> 
				<?php echo $message->getCreatedAt() ?> 
			</span>	
			<span>
				<?php echo link_to('View', url_for('message_showmessage', $value) )?> 
			</span>		
			<span>
				<?php echo link_to('Reply', url_for('message_replymessage', $value) )?> 
			</span>
			<br><br>
		<?php endforeach; ?>
	</p>
	<?php else : ?>
		<?php echo 'You have 0 messages' ?>
	<?php endif;?>