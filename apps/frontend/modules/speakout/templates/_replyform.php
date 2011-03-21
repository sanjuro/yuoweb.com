<?php //foreach ($form->getErrorSchema() as $sField => $sError) : ?>
<?php //echo $sField.': '.$sError.'<br />' ?>
<?php //endforeach; ?>
<form action="<?php echo url_for('speakout_addreply', $topic )?>" method="post" >
        <?php echo $form['_csrf_token'] ?>
        
		<?php echo $form['body']->renderLabel() ?>
		<br>
		<?php echo $form['body'] ?>
		<br>
		<?php echo $form['body']->renderError() ?>
		<br>
		
		<input type="submit" value="Add your Reply" />
		
</form>