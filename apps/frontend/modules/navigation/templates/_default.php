<?php if ($sf_user->isAuthenticated()): ?>
  <div id="navigation">
    <ul id="topmenunavigation">
      <li><?php echo link_to('Home', url_for('network_home', $network), array( "accesskey" => 1)) ?></li>
      <li><?php echo link_to('Messages', url_for('message_index', $network), array( "accesskey" => 2)) ?></li>
      <li><?php echo link_to('Friends', url_for('networkuser_index', $network), array( "accesskey" => 3)) ?></li>
      <li><?php echo link_to('Photos', url_for('photo_index', $network), array( "accesskey" => 4)) ?></li>
    </ul>
  </div>
<?php endif; ?>