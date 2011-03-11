<?php use_stylesheet('message.css') ?>
	
<div data-role="page">

	<div data-role="header">
		<?php echo link_to('Back', url_for('message_index', $network), array( "data-backbtn" => "true" )) ?>	
		<h1>Messages: Show Message</h1>	
		<?php echo link_to('Reply', url_for('message_replymessage', $messagereciever), array( "class" => "ui-btn-right" )) ?>		
	</div>
	<!-- /header -->

	<div data-role="content">	
	    
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
	
	    		
	</div>
	<!-- /content -->

	<div data-role="footer">
	
	</div><!-- /footer -->

	
</div>
<!-- /page -->

