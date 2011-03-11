<?php use_stylesheet('message.css') ?>
	
<div data-role="page">

	<div data-role="header">
		<?php echo link_to('Back', url_for('message_index', $network), array( "data-backbtn" => "true" )) ?>	
		<h1>Messages:  New Message</h1>	
			
	</div>
	<!-- /header -->

	<div data-role="content">		    

		<?php include_partial('message/messageform', array( 'form' => $form, 'network' => $network )) ?>
	    		
	</div>
	<!-- /content -->

	<div data-role="footer">
	
	</div><!-- /footer -->

	
</div>
<!-- /page -->