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
	 <?php echo $form['first_name']->renderLabel() ?></th>
	 <?php echo $form['first_name'] ?>	
	 <?php echo $form['first_name']->renderError() ?>
 </div>

 <div data-role="fieldcontain">
	 <?php echo $form['last_name']->renderLabel() ?></th>
	 <?php echo $form['last_name'] ?>	
	 <?php echo $form['last_name']->renderError() ?>
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

 <div data-role="fieldcontain">
	 <?php echo $form['userProfiles'][0]['country']->renderLabel() ?></th>
	 <?php echo $form['userProfiles'][0]['country'] ?>	
	 <?php echo $form['userProfiles'][0]['country']->renderError() ?>
 </div>

 <div data-role="fieldcontain">
	 <?php echo $form['userProfiles'][0]['birthday']->renderLabel() ?></th>
	 <?php echo $form['userProfiles'][0]['birthday'] ?>	
	 <?php echo $form['userProfiles'][0]['birthday']->renderError() ?>
 </div>


</fieldset>
 
<input type="submit"  value="<?php echo __('Join Network') ?>" />