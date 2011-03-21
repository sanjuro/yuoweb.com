  	<ul id="featurelist">
  		<li id="title" class="nonsortable">Title</li>
  		<li id="navigation" class="nonsortable">Navigation</li>
  	<?php foreach ( $features as $feature ): ?>
  		<li id="<?php echo $feature['Feature']['id']; ?>" class="sortable"><?php echo $feature['Feature']['title'] ?></li>
  	<?php endforeach; ?>
  		<li id="footer" class="nonsortable">Footer</li>
  	</ul>