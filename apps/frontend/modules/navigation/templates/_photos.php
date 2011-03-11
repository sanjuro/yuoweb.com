<?php if ($sf_user->isAuthenticated()): ?>
  <div id="navigation">
    <ul id="topmenunavigation">
      <li><?php echo link_to('Home', url_for('network_home', $network), array( "accesskey" => 1)) ?></li>
    </ul>
  </div>
<?php endif; ?>
