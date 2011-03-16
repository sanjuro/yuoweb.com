<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>
	  <?php if (!include_slot('title')): ?>
	    yUoweb - yUo are the network
	  <?php endif; ?>
	</title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php use_javascript('jquery-1.4.2.min.js') ?>
    <?php use_javascript('jquery-ui-1.8.10.custom.min.js') ?>
    <?php include_javascripts() ?>
  </head>
  <body>
	<div id="header-wrap">
		<div id="header" class="wrapper">
				<?php if (!include_slot('heading')): ?>
		    		<img src="/images/backend/logo.png">
		 		<?php endif; ?>
		</div>
	</div>
	
	<div id="banner-wrap">
		<div class="wrapper">
			<div id="navigation"> 
				<?php include('_navigation.php'); ?>
			</div>
		</div>
	</div>
	
	<div id="content-wrap">
		<div class="wrapper">
			<div id="content">
		        
		 		<?php include('_featurenavigation.php'); ?>
		 		
		        <?php if ($sf_user->hasFlash('notice')): ?>
		          <div class="flash_notice">
		            <?php echo $sf_user->getFlash('notice') ?>
		          </div>
		        <?php endif; ?>
		 
		        <?php if ($sf_user->hasFlash('error')): ?>
		          <div class="flash_error">
		            <?php echo $sf_user->getFlash('error') ?>
		          </div>
		        <?php endif; ?>
		        
				<br></br>
				<?php echo $sf_content ?>				
			</div>
		</div>
		
		<div id="footer" class="wrapper">
		
		</div>
	</div>
    
  </body>
</html>
