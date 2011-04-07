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
    <link href="/themes/redsea/css/comment/comment.css" media="screen" type="text/css" rel="stylesheet">
    <link href="/themes/redsea/css/comment/pagination.min.css" media="screen" type="text/css" rel="stylesheet">
    <link href="/themes/redsea/css/comment/replyTo.min.css" media="screen" type="text/css" rel="stylesheet">
    <link href="/themes/redsea/css/comment/form.css" media="screen" type="text/css" rel="stylesheet">
    <link href="/themes/redsea/css/comment/formComment.min.css" media="screen" type="text/css" rel="stylesheet">
    <link href="/themes/redsea/css/comment/reportComment.css" media="screen" type="text/css" rel="stylesheet">
    <link href="/themes/redsea/css/feeds.css" media="screen" type="text/css" rel="stylesheet">
    <link href="/themes/redsea/css/message.css" media="screen" type="text/css" rel="stylesheet">
    <link href="/themes/redsea/css/speakout.css" media="screen" type="text/css" rel="stylesheet">
    <link href="/themes/redsea/css/webuy.css" media="screen" type="text/css" rel="stylesheet">
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="header">
    	<div id="logo">
    	</div>
    	<div id="navigation">
			  <?php include_component_slot('navigation') ?>
    	</div>
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