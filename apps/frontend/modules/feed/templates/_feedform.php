<form action="<?php echo url_for('feed_addfeed', $network)?>" method="post" >
        <?php echo $form['_csrf_token'] ?>
        
		<?php echo $form['body']->renderLabel() ?>
		<br>
		<?php echo $form['body'] ?>
		<input type="submit" value="Add" />
		<br>
		<?php echo $form['body']->renderError() ?>
		
</form>