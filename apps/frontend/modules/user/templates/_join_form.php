<?php use_helper('I18N') ?><fieldset class="formContainer">  <?php echo $form['_csrf_token'] ?>
<?php echo $form['username']->renderLabel() ?></th><br><?php echo $form['username'] ?>	<br><?php echo $form['username']->renderError() ?><br><br>
<?php echo $form['password']->renderLabel() ?></th><br><?php echo $form['password'] ?>	<br><?php echo $form['password']->renderError() ?><br><br>
<?php echo $form['email_address']->renderLabel() ?></th><br><?php echo $form['email_address'] ?>	<br><?php echo $form['email_address']->renderError() ?><br><br>

<?php echo $form['first_name']->renderLabel() ?></th><br><?php echo $form['first_name'] ?>	<br><?php echo $form['first_name']->renderError() ?><br><br>
<?php echo $form['last_name']->renderLabel() ?></th><br><?php echo $form['last_name'] ?>	<br><?php echo $form['last_name']->renderError() ?><br><br>

<?php echo $form['userProfiles'][0]['gender_id']->renderLabel() ?></th>
<br>
<?php echo $form['userProfiles'][0]['gender_id'] ?>	
<br>
<?php echo $form['userProfiles'][0]['gender_id']->renderError() ?>
<br><br>

<?php echo $form['userProfiles'][0]['city']->renderLabel() ?></th>
<br>
<?php echo $form['userProfiles'][0]['city'] ?>	
<br>
<?php echo $form['userProfiles'][0]['city']->renderError() ?>
<br><br>

<?php echo $form['userProfiles'][0]['country']->renderLabel() ?></th>
<br>
<?php echo $form['userProfiles'][0]['country'] ?>	
<br>
<?php echo $form['userProfiles'][0]['country']->renderError() ?>
<br><br>

<?php echo $form['userProfiles'][0]['birthday']->renderLabel() ?></th>
<br>
<?php echo $form['userProfiles'][0]['birthday'] ?>	
<br>
<?php echo $form['userProfiles'][0]['birthday']->renderError() ?>
<br><br>

</fieldset>
 
<input type="submit"  value="<?php echo __('Join Network') ?>" />