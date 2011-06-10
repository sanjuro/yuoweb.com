<?php use_stylesheet('message.css') ?>
<?php slot( 'title', $network->getTitle().' - Messages' )?>
<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Messages</h1>' )?>
<h3>Messages: Inbox</h3><ul id="messagenavigation">	<li><?php echo link_to('New Message', 'message_addmessage', $network) ?></li></ul><?php include_partial('message/list', array('messages' => $messages, 'pager' => $pager)) ?>