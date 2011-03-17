<?php foreach ($form->getErrorSchema() as $sField => $sError) : ?>
<?php echo $sField.': '.$sError.'<br />' ?>
<?php endforeach; ?>

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
 
 <?php echo $form['username']->renderLabel() ?></th>
 <?php echo $form['username'] ?>	
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
 
 <?php echo $form['frontendnetwork']['networkcategory_id']->renderLabel() ?></th>
 <?php echo $form['frontendnetwork']['networkcategory_id'] ?>	
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
