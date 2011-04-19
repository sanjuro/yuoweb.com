<form action="<?php echo url_for('shout_addmessage', $network)?>" method="post" >

<?php echo $form['_csrf_token'] ?>

<?php echo $form['mobile_number']->renderLabel() ?>
<br>
<?php echo $form['mobile_number'] ?>
<br>
<?php echo $form['mobile_number']->renderError() ?>
<br>

<?php echo $form['message']->renderLabel() ?>
<br>
<?php echo $form['message'] ?>
<br>
<?php echo $form['message']->renderError() ?>
<br>

<h4>
	Messages can only be 160 characters long.
</h4>

<input type="submit" value="Send Message" />

</form>