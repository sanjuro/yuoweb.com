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
		
		<ul class="sf_admin_actions">
			<li class="sf_admin_action_list"><a href="<?php echo url_for( 'speakout_showtopic', $topic )  ?>">Back to list</a></li>  
			<li class="sf_admin_action_save"><input type="submit" value="Add your Reply"></li>  
		</ul>
		
</form>