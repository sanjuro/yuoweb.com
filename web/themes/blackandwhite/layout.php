<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.1//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <title>
	  <?php if (!include_slot('title')): ?>
	    yUoweb - you are the network
	  <?php endif; ?>
	</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>    
     <link href="/themes/blackandwhite/css_compressed.css" media="screen" type="text/css" rel="stylesheet">
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="header">
    	<div id="logo">
		  <?php if (!include_slot('pagetitle')): ?>
		    yUoweb - you are the network
		  <?php endif; ?>
    	</div>
    	
    	<div id="network_description">
    		<?php include_component_slot('description') ?>
    	</div>
    	
		<?php include_component_slot('navigation') ?>
    </div>
    <div id="main">
    
	<?php include_component_slot('advert1') ?>
    
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
    
    	<?php echo $sf_content ?>
    </div>
    <div id="footer">
		<?php include_component_slot('advert2') ?>

    	
    	<?php include_component_slot('footer') ?>
    </div> 
  </body>
</html>
