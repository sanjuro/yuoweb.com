<form action="<?php echo url_for('speakout_addreply', $topic )?>" method="post" >
		        <?php echo $form['_csrf_token'] ?>
		        
				<div data-role="fieldcontain">
				<?php echo $form['body']->renderLabel() ?>
				<?php echo $form['body'] ?>
				<?php echo $form['body']->renderError() ?>
				</div>
				
				<input type="submit" value="Add your Reply" />
				
</form>