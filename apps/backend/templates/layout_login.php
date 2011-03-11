<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>
	  <?php if (!include_slot('title')): ?>
	    Spark - ignite your network
	  <?php endif; ?>
	</title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
	<div id="header-wrap">
		<div id="header" class="wrapper">
			<div id="navigation"><?php include('_navigation.php'); ?></div>
			<img src="/images/backend/logo.png">
		</div>
	</div>
	
	<div id="banner-wrap" class="login">
		<div class="wrapper">
			<h1 class="login">
				<?php if (!include_slot('heading')): ?>
		    		
		 		<?php endif; ?>
			</h1>
		</div>
	</div>
	
	<div id="content-wrap" class="login">
		<div class="wrapper">
			<div id="content">
				   <?php echo $sf_content ?>
			</div>
		</div>
	</div>

	<div id="footer-wrap">
		<div id="footer" class="wrapper">
		
		</div>
	</div>
    
  </body>
</html>
