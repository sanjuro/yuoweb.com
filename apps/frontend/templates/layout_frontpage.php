<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta charset="utf-8">
	    <title>
		  <?php if (!include_slot('title')): ?>
		    yUoweb - yUo are the network
		  <?php endif; ?>
		</title>
	    <?php include_javascripts() ?>
	    <?php include_stylesheets() ?>
		<!-- meta tags -->
		<meta name="keywords" content="">
		<meta name="description" content="">
	</head>		
  	<body>
		<div id="wrapper">
			<div id="header">
				<img src="/images/frontpage/logo.png" alt="yUoweb">
				<span id="blockquote">
					create your very own mobile social network
				</span>
			</div>
		    <div id="content">
				<?php echo $sf_content ?>
			</div>
			<div id="sub-content">			
					
			</div>
			<div id="footer"">
				
			</div>
		</div>
  	</body>
</html>
