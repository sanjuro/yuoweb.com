<?php echo $form['_csrf_token'] ?>
        
<?php echo $form['title']->renderLabel() ?>
<br>
<?php echo $form['title'] ?>
<br>
<?php echo $form['title']->renderError() ?>
<br>

<?php echo $form['description']->renderLabel() ?>
<br>
<?php echo $form['description'] ?>
<br>
<?php echo $form['description']->renderError() ?>
<br>
		
<ul class="sf_admin_actions">
	<li class="sf_admin_action_list"><a href="<?php echo url_for( 'speakout_index_admin' ) ?>">Back to list</a></li>  
	<li class="sf_admin_action_save"><input type="submit" value="Save"></li>  
</ul>