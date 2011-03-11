<?php //foreach ($form->getErrorSchema() as $sField => $sError) : ?>
<?php //echo $sField.': '.$sError.'<br />' ?>
<?php //endforeach; ?>
<form action="<?php echo url_for('photo_addphoto', $network)?>" enctype="multipart/form-data" method="post" >
        <?php echo $form['_csrf_token'] ?>
        
		<?php echo $form['url']->renderLabel() ?>
		<br>
		<?php echo $form['url'] ?>
		<br>
		<?php echo $form['url']->renderError() ?>
		<br>
		
		<input type="submit" value="Upload photo" />
		
</form>