<?php //foreach ($form->getErrorSchema() as $sField => $sError) : ?>
<?php //echo $sField.': '.$sError.'<br />' ?>
<?php //endforeach; ?>
<form action="<?php echo url_for('message_addmessage', $network)?>" method="post" >
        <?php echo $form['_csrf_token'] ?>
        
		<?php echo $form['friend']->renderLabel() ?>
		<br>
		<?php echo $form['friend'] ?>
		<br>
		<?php echo $form['friend']->renderError() ?>
		<br>

		<?php echo $form['subject']->renderLabel() ?>
		<br>
		<?php echo $form['subject'] ?>
		<br>
		<?php echo $form['subject']->renderError() ?>
		<br>
		
		<?php echo $form['body']->renderLabel() ?>
		<br>
		<?php echo $form['body']?>
		<br>
		<?php echo $form['body']->renderError() ?>
		<br>
		
		<input type="submit" value="Send your message" />
		
</form>