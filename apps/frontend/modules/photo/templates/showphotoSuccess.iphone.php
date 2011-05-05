<?php use_stylesheet('message.css') ?>
<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Photos</h1>' )?>

<div data-role="page">

	<div data-role="header" data-backbtn="true">
		<h2>Showing Photo</h2>	
		<?php echo link_to( 'Upload Photo', url_for('photo_addphoto', $network), array( "class" => "ui-btn-right" )) ?></li>
	</div>
	<!-- /header -->

	<div data-role="content">	
	    
		<h3>Photo: Show Photo</h3>

		<p>
			<img src="http://<?php echo $_SERVER['SERVER_NAME'] ?><?php echo $sf_request->getRelativeUrlRoot() ?>/uploads/pictures/270x270/<?php echo $photo['url']?>">
		</p>
		
		<h3>Comments</h3>
		<p>
		</p>		
		
	</div>
	<!-- /content -->

	<div data-role="footer">
	
	</div><!-- /footer -->

</div>
<!-- /page -->