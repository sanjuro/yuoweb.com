<?php slot( 'pagetitle', '<h1>Invite a Friend</h1>' )?>

<h3>Invite a Friend</h3>

<form action="<?php echo url_for('user_invite', $sf_user->getGuardUser()) ?>" method="post">

	<fieldset>
	<?php echo $form['_csrf_token'] ?>
	
	<?php echo $form['email_address']->renderLabel() ?>
	<br>
	<?php echo $form['email_address'] ?>	
	<br>
	<?php echo $form['email_address']->renderError() ?>
	<br><br>
	
	</fieldset>

<input type="submit" value="Invite User" />

</form>