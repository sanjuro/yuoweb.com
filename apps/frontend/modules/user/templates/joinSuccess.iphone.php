<div data-role="page" id="signin">

	<div data-role="header">
		<h1>Join</h1>		
	</div>
	<!-- /header -->

	<div data-role="content">	
	
	<?php slot( 'pagetitle', '<h1>Join '.$network->getTitle().' Network</h1>' )?>

	<form action="<?php echo url_for('user_join', $network) ?>" method="post">
	
	<?php echo include_partial('user/join_form', array( 'form' => $form )) ?>
	
	</form>
	
	</div>
	<!-- /content -->

	<div data-role="footer">
		
	</div><!-- /footer -->

	
</div>
<!-- /page -->