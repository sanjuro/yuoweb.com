 <?php echo $form['_csrf_token'] ?>

<fieldset class="horizontalform">
 <legened>
 	<span>Step</span>
 	1.
 <legend>
 
 <h3>Pick your login</h3>
 
 <div class="help">Your login will be used in the admin section</div>
 
 <?php echo $form['email_address']->renderLabel() ?></th>
 <?php echo $form['email_address'] ?>	
 <?php echo $form['email_address']->renderError() ?>
 
 <?php echo $form['username']->renderLabel() ?></th>
 <?php echo $form['username'] ?>	
 <?php echo $form['username']->renderError() ?>
</fieldset>
 
 
<fieldset class="horizontalform">
 <legened>
 	<span>Step</span>
 	2.
 <legend>
 
 <h3>Pick Network name</h3>
 
 <div class="help">Just some info about your network</div>
 
 <?php echo $form['frontendnetwork']['subdomain']->renderLabel() ?></th>
 <?php echo $form['frontendnetwork']['subdomain'] ?>	
 <?php echo $form['frontendnetwork']['subdomain']->renderError() ?>
 
 <?php echo $form['frontendnetwork']['networkcategory_id']->renderLabel() ?></th>
 <?php echo $form['frontendnetwork']['networkcategory_id'] ?>	
 <?php echo $form['frontendnetwork']['networkcategory_id']->renderError() ?>
</fieldset>

<fieldset class="horizontalform">
 <legened>
 	<span>Step</span>
 	3.
 <legend>
 
 <h3>Finish Line</h3>
 
 <div class="help">Well thats all you need</div>
 <input id="submit_button" type="submit" value="I am done" /> 
 </fieldset>
