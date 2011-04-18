<?php use_helper('I18N') ?><?php foreach ($form->getErrorSchema() as $sField => $sError) : ?><?php echo $sField.': '.$sError.'<br />' ?><?php endforeach; ?><fieldset class="formContainer">  <?php echo $form['_csrf_token'] ?>
<?php echo $form['username']->renderLabel() ?></th><br><?php echo $form['username'] ?>	<br><?php echo $form['username']->renderError() ?><br><br>
<?php echo $form['password']->renderLabel() ?></th><br><?php echo $form['password'] ?>	<br><?php echo $form['password']->renderError() ?><br><br>
<?php echo $form['email_address']->renderLabel() ?></th><br><?php echo $form['email_address'] ?>	<br><?php echo $form['email_address']->renderError() ?><br><br>
<?php echo $form['userProfiles'][0]['gender_id']->renderLabel() ?></th><br><?php echo $form['userProfiles'][0]['gender_id'] ?>	<br><?php echo $form['userProfiles'][0]['gender_id']->renderError() ?><br><br>
<?php echo $form['userProfiles'][0]['city']->renderLabel() ?></th><br><?php echo $form['userProfiles'][0]['city'] ?>	<br><?php echo $form['userProfiles'][0]['city']->renderError() ?><br><br>
</fieldset>
 
<input type="submit"  value="<?php echo __('Join Network') ?>" />