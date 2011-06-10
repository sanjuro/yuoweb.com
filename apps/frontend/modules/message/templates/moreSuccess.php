<?php slot( 'title', $network->getTitle().' - Feeds' )?>

<?php slot( 'pagetitle', '<h1>More Feeds for '.$user->getUsername().'</h1>' )?>

<h3>More Messages for <?php echo $user->getUsername()?></h3>
<ul id="messagenavigation">
	<li><?php echo link_to('New Message', 'message_addmessage', $network) ?></li>
</ul>

<?php include_partial('message/list', array('messages' => $messages, 'pager' => $pager)) ?>