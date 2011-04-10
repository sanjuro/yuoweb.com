<?php slot( 'title', $network->getTitle() )?>

<h1>Viewing Profile for: <?php echo $user->getUsername() ?></h1><?php foreach ($form->getErrorSchema() as $sField => $sError) : ?>
<?php echo $sField.': '.$sError.'<br />' ?>
<?php endforeach; ?>
<div id="main">
	<h3>Profile: <?php echo $user->getUsername() ?></h3>	<p>
	<form action="<?php echo url_for('user_viewprofile', $user)?>" method="post" >
	
	<?php echo $form['_csrf_token']?>
	<?php echo $form['sfGuardUser']['username'] ?>
	<?php echo $form['sfGuardUser']['updated_at'] ?>
	<?php echo $form['sfGuardUser']['created_at'] ?>
	
	<fieldset>
		  <legend>Profile for: <?php echo $user->getUsername() ?></legend>
		  <table class="formtable"> 
		 	 <tr>
			      <th><?php echo $form['sfGuardUser']['first_name']->renderLabel() ?></th>
			      <td>
			        <?php echo $form['sfGuardUser']['first_name'] ?>
			      </td>
			      <td class="form_error">
			      	 <?php echo $form['sfGuardUser']['first_name']->renderError() ?>			      </td>
			 </tr>
		 	 <tr>
			      <th><?php echo $form['sfGuardUser']['last_name']->renderLabel() ?></th>			      <td>
			        <?php echo $form['sfGuardUser']['last_name'] ?>
			      </td>
			      <td class="form_error">
			      	 <?php echo $form['sfGuardUser']['last_name']->renderError() ?>			      </td>
			 </tr>
		 	 <tr>
			      <th><?php echo $form['sfGuardUser']['email_address']->renderLabel() ?></th>
			      <td>
			        <?php echo $form['sfGuardUser']['email_address'] ?>
			      </td>
			      <td class="form_error">
			      	 <?php echo $form['sfGuardUser']['email_address']->renderError() ?>
			      </td>
			 </tr>
		    <tfoot>
		      <tr>
		        <td colspan="2">
		          <input type="submit" value="Save your changes" />
		        </td>
		      </tr>
		    </tfoot>
		  </table> 
	</fieldset>
	</p>
	
	<h3>Profile: Your Pic</h3>
	<p>
		<?php echo $form['profile_pic']->renderLabel()   ?>
		<?php echo $form['profile_pic']  ?>
	</p>
	<p>
		<img src="http://<?php echo $_SERVER['SERVER_NAME'] ?><?php echo $sf_request->getRelativeUrlRoot() ?>/uploads/profilepics/270x270/<?php echo $userprofile->getProfilePic() ?>">	</p>	
	<h3>Profile: Your Description</h3>	<p>
		<?php echo $form['description']->renderLabel()   ?>		<br>
		<?php echo $form['description']  ?>
	</p>
	
	<input type="submit" value="Save your changes" />
 	</form>
</div>