<?php if (!empty($friendrequests) > 0) :?> 
		<span><?php echo link_to(count($friendrequests), url_for('networkuser_index', $network) )?> new Friend request(s) </span>
<?php endif;?>