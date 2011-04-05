<?php //foreach ($form->getErrorSchema() as $sField => $sError) : ?>
<?php //echo $sField.': '.$sError.'<br />' ?>
<?php //endforeach; ?>
<form action="<?php echo url_for('friend_searchfriend', $network)?>" method="post" >
        <?php echo $form['_csrf_token'] ?>
        
		<?php echo $form['search']->renderLabel() ?>
		<br>
		<?php echo $form['search'] ?>
		<br>
		<?php echo $form['search']->renderError() ?>		
		<input type="submit" value="Search" />
</form>