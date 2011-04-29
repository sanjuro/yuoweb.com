<div data-role="page">
	<div data-role="header">
		<?php echo link_to('Back', url_for('speakout_index', $network), array( "data-backbtn" => "true" )) ?>	
		<h2><?php echo 'Topic:'.$topic['title'] ?>	</h2>
		<?php echo link_to( 'Reply', url_for('speakout_addreply', $topic), array( "class" => "ui-btn-right", "data-icon" => "plus", "data-transition" => "flip" )) ?>
	</div>
	<!-- /header -->

	<div data-role="content">		    
			
		<?php include_partial('speakout/replylist', array('replys' => $pager->getResults())) ?>
		
	</div>
	<!-- /content -->

	<div data-role="footer">
	
	</div><!-- /footer -->

	
</div>
<!-- /page -->