<?php use_helper('I18N') ?>

<form id="signinform" action="<?php echo url_for('@sf_guard_signin') ?>" method="get">
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
  <fieldset data-role="controlgroup" data-type="horizontal">  
	 <br><?php echo $form['remember']->renderLabel() ?>	
		 <?php echo $form['remember'] ?>	
	 <br> 
	 <?php echo $form['remember']->renderError() ?>
  </div>
 </div>
          
 <?php $routes = $sf_context->getRouting()->getRoutes() ?>
 <?php if (isset($routes['sf_guard_forgot_password'])): ?>
            <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
 <?php endif; ?>

  <?php if (isset($routes['sf_guard_register'])): ?>
          &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
  <?php endif; ?>
  
	<input id="signinbutton" type="submit" value="<?php echo __('Signin', null, 'sf_guard') ?>" />
	
  </fieldset>
</form>

<script type="text/javascript">

$(document).ready(function() { 
	
	$('#signinbutton').click(function() {
			 var r = $.ajax({
			    type: 'POST',
			    url: '<?php echo url_for('@sf_guard_signin') ?>',
			    data:  $('#signinform').serializeArray() ,
			    complete: function(){
		        		
		     			 },
			    success: function(data){ 
				        	window.location = '<?php echo url_for('@homepage') ?>'
		     			 },	
			    async: false,
			  }).responseText;		  
			  return false; 	
		  
	});

})
</script>
