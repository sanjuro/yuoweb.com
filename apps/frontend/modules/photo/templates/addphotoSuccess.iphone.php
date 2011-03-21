<?php use_stylesheet('message.css') ?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Photos</h1>' )?>

<div data-role="page">

	<div data-role="header" data-backbtn="true">
		<?php echo '<h2>Photos: Upload Photo</h2>' ?>
	</div>
	<!-- /header -->

	<div data-role="content">	
	    
		<p>
			<?php include_partial('photo/photoform', array( 'form' => $form, 'network' => $network )) ?>
		</p>
		
	</div>
	<!-- /content -->

	<div data-role="footer">
	
	</div><!-- /footer -->

	
</div>
<!-- /page -->

