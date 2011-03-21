<?php use_helper('I18N') ?>

<fieldset class="formContainer">  
 
 <?php echo $form['_csrf_token'] ?>
  
 <div data-role="fieldcontain">
	 <?php echo $form['username']->renderLabel() ?></th>
	 <?php echo $form['username'] ?>	
	 <?php echo $form['username']->renderError() ?>
 </div>

 <div data-role="fieldcontain">
	 <?php echo $form['password']->renderLabel() ?></th>
	 <?php echo $form['password'] ?>	
	 <?php echo $form['password']->renderError() ?>
 </div>

 <div data-role="fieldcontain">
	 <?php echo $form['email_address']->renderLabel() ?></th>
	 <?php echo $form['email_address'] ?>	
	 <?php echo $form['email_address']->renderError() ?>
 </div>
 
 <div data-role="fieldcontain">
	 <?php echo $form['userProfiles'][0]['gender_id']->renderLabel() ?></th>
	 <?php echo $form['userProfiles'][0]['gender_id'] ?>	
	 <?php echo $form['userProfiles'][0]['gender_id']->renderError() ?>
 </div>

 <div data-role="fieldcontain">
	 <?php echo $form['userProfiles'][0]['city']->renderLabel() ?></th>
	 <?php echo $form['userProfiles'][0]['city'] ?>	
	 <?php echo $form['userProfiles'][0]['city']->renderError() ?>
 </div>

</fieldset>
 
<input type="submit"  value="<?php echo __('Join Network') ?>" />