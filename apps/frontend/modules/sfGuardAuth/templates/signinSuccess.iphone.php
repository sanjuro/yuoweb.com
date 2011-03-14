<?php use_helper('I18N') ?>
<div data-role="page" id="signin">	<div data-role="header">		<h1>Login</h1>			</div>	<!-- /header -->
	<div data-role="content">		    <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>    	
	</div>	<!-- /content -->	<div data-role="footer">		
	</div><!-- /footer -->	
</div><!-- /page -->
<div data-role="page" id="homepage">
	<div data-role="header">		<h2>Photos</h2>			<?php echo link_to( 'Home', url_for('homepage', $network), array( "class" => "ui-btn-left" )) ?>		<?php echo link_to( 'Upload Photo', url_for('photo_addphoto', $network), array( "class" => "ui-btn-right", "data-icon" => "plus" )) ?></li>	</div>	<!-- /header -->
	<div data-role="content">	    		<h3>All Photos</h3>		<p>			<?php include_partial('photo/photos', array( 'photos' => $photos, 'network' => $network ))?>		</p>

		<h3>Photo: Galleries</h3>		<p>		</p>
	</div>	<!-- /content -->
	<div data-role="footer">		<?php echo link_to( 'Logout', url_for('sf_guard_signout'), array( "class" => "ui-btn-left" )) ?>	</div><!-- /footer -->
</div><!-- /page -->