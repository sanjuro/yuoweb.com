<?php //foreach ($form->getErrorSchema() as $sField => $sError) : ?>
<?php //echo $sField.': '.$sError.'<br />' ?>
<?php //endforeach; ?>

	<?php echo $form['_csrf_token']?>
	
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
	
	<?php echo $form['url']->renderLabel() ?>
	<br>
	<?php echo $form['url'] ?>
	<br>
	<?php echo $form['url']->renderError() ?>
	<br>
	
	<?php echo $form['created_at']->renderLabel() ?>
	<br>
	<?php echo $form['created_at'] ?>
	<br>
	<?php echo $form['created_at']->renderError() ?>
	<br>
	
	<?php echo $form['updated_at']->renderLabel() ?>
	<br>
	<?php echo $form['updated_at'] ?>
	<br>
	<?php echo $form['updated_at']->renderError() ?>
	<br>
	
	
	<?php if (!$form->getObject()->isNew()): ?>
	  <img src="<?php echo "http://".$_SERVER['SERVER_NAME'].$sf_request->getRelativeUrlRoot()."/images/adverts/".$advert['image_path'] ?>">    
	<?php endif; ?>
	<br><br>
	<?php echo $form['image_path']->renderLabel() ?>
	<br>
	<?php echo $form['image_path'] ?>
	<br>
	<?php echo $form['image_path']->renderError() ?>
	<br>
	
	
	<h3>Networks where advert is shown</h3>
	<?php foreach ( $form['advertNetworks'] as $advertNetworkForm ) : ?>
		<?php echo $advertNetworkForm ?>
	<?php endforeach; ?>
	

	
  	<ul class="sf_admin_actions">
	  <li class="sf_admin_action_list"><a href="<?php echo url_for('advert') ?>"><?php echo __('Back to list') ?></a></li>  
	  <li class="sf_admin_action_save"><input type="submit" value="Save"></li>  
  	</ul>
  	
	<?php if (!$form->getObject()->isNew()): ?>
	  <input type="hidden" name="sf_method" value="PUT" />
	<?php endif; ?>
  	
</form>