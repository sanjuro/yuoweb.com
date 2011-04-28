<?php use_stylesheet('message.css') ?>
<?php slot( 'title', $network->getTitle().' - Messages' )?>
<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Messages</h1>' )?>
	<h3>Messages: Inbox</h3>
    <ul id="messagenavigation">
	      <li><?php echo link_to('New Message', 'message_addmessage', $network) ?></li>	</ul>
	<?php if (count($messages) > 0) :?>
		<?php foreach ( $messages as $value ) : ?>   
			<div class="messageline">			<?php $message = $value->getMessage(); ?>
			<?php if ($value->getMessagestatusId() == 1) :?>
			<div class="messageline_subject newmessage">
			<?php else: ?>
			<div class="messageline_subject">
			<?php endif; ?>				<?php echo link_to($message->getSubject(), url_for('message_showmessage', $value) )?> 				<span>					<?php echo link_to('View', url_for('message_showmessage', $value) )?> 				</span>						<span>					<?php echo link_to('Reply', url_for('message_replymessage', $value) )?> 				</span>			</div>			<div class="messageline_details">					<?php $sfGuardUser = $message->getNetworkUser()->getsfGuardUser(); ?>				From <b><?php echo $sfGuardUser[0]['username'] ?> </b>				at <?php echo $message->getCreatedAt() ?> 			</div>			</div>
		<?php endforeach; ?>	<?php else : ?>	<p>
		<span><?php echo 'You have 0 messages' ?></span>	</p>	<?php endif;?>