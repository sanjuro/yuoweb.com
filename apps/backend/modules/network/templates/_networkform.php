<?php //foreach ($form->getErrorSchema() as $sField => $sError) : ?>
<?php //echo $sField.': '.$sError.'<br />' ?><?php //endforeach; ?>	<?php echo $form['_csrf_token']?>		<?php echo $form['subdomain']->renderLabel() ?>	<br>	<?php echo 'http://'.$form['subdomain'].'.yuoweb.com'?>	<br>	<?php echo $form['subdomain']->renderError() ?>	<br>		<?php echo $form['title']->renderLabel() ?>	<br>	<?php echo $form['title'] ?>	<br>	<?php echo $form['title']->renderError() ?>	<br>		<?php echo $form['description']->renderLabel() ?>	<br>	<?php echo $form['description'] ?>	<br>	<?php echo $form['description']->renderError() ?>	<br>	
	<?php echo $form['logo']->renderLabel() ?>	<br>	<?php echo $form['logo'] ?>	<br>	<?php echo $form['logo']->renderError() ?>	<br>	
	<?php echo $form['networkcategory_id']->renderLabel() ?>	<br>	<?php echo $form['networkcategory_id'] ?>	<br>
	<?php echo $form['networkcategory_id']->renderError() ?>	<br>	
	<?php echo $form['is_public']->renderLabel() ?>	<br>	<?php echo $form['is_public'] ?>	<br>	<?php echo $form['is_public']->renderError() ?>	<br>
	
	<?php echo $form['is_activated']->renderLabel() ?>
	<br>
	<?php echo $form['is_activated'] ?>
	<br>
	<?php echo $form['is_activated']->renderError() ?>
	<br>		
	<?php echo $form['accesskey']->renderLabel() ?>	<br>	<?php echo $form['accesskey'] ?>	<br>	<?php echo $form['accesskey']->renderError() ?>	<br>	
  	<ul class="sf_admin_actions">	  <li class="sf_admin_action_list"><a href="<?php echo url_for('networks')  ?>">Back to list</a></li>  	  <li class="sf_admin_action_save"><input type="submit" value="Save"></li>    	</ul>