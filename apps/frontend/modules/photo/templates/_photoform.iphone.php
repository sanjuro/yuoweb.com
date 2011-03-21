<form action="<?php echo url_for('photo_addphoto', $network)?>" enctype="multipart/form-data" method="post">
 <fieldset class="formContainer">  
 
 <?php echo $form['_csrf_token'] ?>

 <div data-role="fieldcontain">
 
	 <?php echo $form['url']->renderError() ?>
	 <br></br>
	 <?php echo $form['url']->renderLabel() ?></th>
	 <br>
	 <?php echo $form['url'] ?>	
	 <br>
	 <?php echo $form['url']->renderError() ?>
	 
 </div>
  
  <input type="submit" value="Upload photo" />		
	
  </fieldset>
</form>