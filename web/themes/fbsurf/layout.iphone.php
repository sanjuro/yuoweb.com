<!DOCTYPE html> 
<html> 
	<head> 
    <title>
	  <?php if (!include_slot('title')): ?>
	    Spark - ignite your network
	  <?php endif; ?>
	</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.js"></script>


</head> 
<body> 

	<?php echo $sf_content ?>

</body>
</html>
