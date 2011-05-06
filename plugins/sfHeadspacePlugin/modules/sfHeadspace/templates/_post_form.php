<?php foreach ($form->getErrorSchema() as $sField => $sError) : ?>
<?php echo $sField.': '.$sError.'<br />' ?>
<?php endforeach; ?>
<form action="<?php echo url_for('headspace_addpost' )?>" method="post" >
        <?php echo $form['_csrf_token'] ?>
        
		<?php echo $form['subject']->renderLabel() ?>
		<br>
		<?php echo $form['subject'] ?>
		<br>
		<?php echo $form['subject']->renderError() ?>
		<br>
		
		<?php echo $form['body']->renderLabel() ?>
		<br>
		<?php echo $form['body'] ?>
		<br>
		<?php echo $form['body']->renderError() ?>
		<br>
		
		<?php echo $form['HeadspacePostTags'] ?>
		<br>
		
		<input type="submit" value="Add your post" />
		
</form>