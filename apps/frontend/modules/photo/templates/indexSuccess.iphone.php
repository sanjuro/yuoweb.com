<?php use_stylesheet('message.css') ?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Photos</h1>' )?>

<div data-role="page">

	<div data-role="header">
		<h2>Photos</h2>	
		<?php echo link_to( 'Home', url_for('homepage', $network), array( "class" => "ui-btn-left" )) ?>
		<?php echo link_to( 'Upload Photo', url_for('photo_addphoto', $network), array( "class" => "ui-btn-right", "data-icon" => "plus", "data-transition" => "flip" )) ?></li>
	</div>
	<!-- /header -->

	<div data-role="content">	
	    
		<h3>All Photos</h3>
		<p>
			<?php include_partial('photo/photos', array( 'photos' => $photos, 'network' => $network ))?>
		</p>
		
		<h3>Photo: Galleries</h3>
		<p>
		</p>
		
	</div>
	<!-- /content -->

	<div data-role="footer">
		<?php echo link_to( 'Logout', url_for('sf_guard_signout'), array( "data-transition" => "flip" )) ?>
	</div><!-- /footer -->

	
</div>
<!-- /page -->






	

