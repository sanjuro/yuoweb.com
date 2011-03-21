<form action="<?php echo url_for('message_addmessage', $network)?>" method="post" >
     <?php echo $form['_csrf_token'] ?>
        
	 <div data-role="fieldcontain">
		 <?php echo $form['friend']->renderLabel() ?></th>
		 <?php echo $form['friend'] ?>	
		 <?php echo $form['friend']->renderError() ?>
	 </div>
	 
	 <div data-role="fieldcontain">
		 <?php echo $form['subject']->renderLabel() ?></th>
		 <?php echo $form['subject'] ?>	
		 <?php echo $form['subject']->renderError() ?>
	 </div>
	 
	 <div data-role="fieldcontain">
		 <?php echo $form['body']->renderLabel() ?></th>
		 <?php echo $form['body'] ?>	
		 <?php echo $form['body']->renderError() ?>
	 </div>
	        
			
	<input type="submit" value="Send your message" />
		
</form>