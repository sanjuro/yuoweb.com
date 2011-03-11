<div data-role="page">

	<div data-role="header">
		<h2><?php echo 'Reply To:'.$topic['title'] ?>	</h2>
		<?php echo link_to( 'Home', url_for('homepage', $network), array( "class" => "ui-btn-left" )) ?>
	</div>
	<!-- /header -->

	<div data-role="content">
		
		<p>
			<?php include_partial('speakout/replyform', array( 'form' => $form, 'topic' => $topic)) ?>
		</p>	    
					
	</div>
	<!-- /content -->

	<div data-role="footer">
	
	</div><!-- /footer -->

	
</div>
<!-- /page -->