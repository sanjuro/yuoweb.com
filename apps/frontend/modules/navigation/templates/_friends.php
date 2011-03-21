<?php if ($sf_user->isAuthenticated()): ?>
  <div id="navigation">
    <ul id="topmenunavigation">
      <li><?php echo link_to('Home', url_for('network_home', $network), array( "accesskey" => 1)) ?></li>
      <li><?php echo link_to('Friends', url_for('networkuser_index', $network), array( "accesskey" => 2)) ?></li>
    </ul>
  </div>
<?php endif; ?>
