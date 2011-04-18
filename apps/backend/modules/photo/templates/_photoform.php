<?php echo $form['_csrf_token'] ?>
        
<img src="<?php echo "http://".$_SERVER['SERVER_NAME'].$sf_request->getRelativeUrlRoot()."/uploads/pictures/270x270/".$photo['url'] ?>">        
<br><br>
<?php echo $form['url']->renderLabel() ?>
<br>
<?php echo $form['url'] ?>
<br>
<?php echo $form['url']->renderError() ?>
<br>

<?php echo $form['networkuser_id']->renderLabel() ?>
<br>
<?php echo $form['networkuser_id'] ?>
<br>
<?php echo $form['networkuser_id']->renderError() ?>
<br>

<?php echo $form['created_at']->renderLabel() ?>
<br>
<?php echo $form['created_at'] ?>
<br>
<?php echo $form['created_at']->renderError() ?>
<br>

<ul class="sf_admin_actions">
	<li class="sf_admin_action_list"><a href="<?php echo url_for( 'photo_index' ) ?>">Back to list</a></li>  
	<li class="sf_admin_action_save"><input type="submit" value="Save"></li>  
</ul>