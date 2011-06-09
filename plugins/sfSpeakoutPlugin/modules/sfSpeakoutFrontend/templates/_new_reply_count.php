<span>
	There are <?php echo count($newReplys) ?> new post(s) 
	<?php if (count($newReplys) > 0): ?>
		<a href="<?php echo url_for('speakout_shownewreplys', $network) ?>">Show</a>
	<?php endif; ?>
</span>