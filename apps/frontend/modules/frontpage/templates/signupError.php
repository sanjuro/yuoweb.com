<p>
    	looks like there was some errors creating your sign up ?
</p>

<div class="formnotification_error">
  		<?php echo 'Email:' .$form['email_address']->renderError() ?>
 	    <?php echo 'Username:' .$form['username']->renderError() ?>
 		<?php echo 'Network Name:' .$form['frontendnetwork']['subdomain']->renderError() ?>
</div>
    
<div id="content_signup">
  
	<form action="<?php echo url_for('frontpage_signup') ?>" method="post">
		
	 <?php include_partial('frontpage/signup_form', array( 'form' => $form ) ) ?>
		
	</form>
	
</div>
