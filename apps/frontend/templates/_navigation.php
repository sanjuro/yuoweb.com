<?php if ($sf_user->isAuthenticated()): ?>
  <div id="navigation">
    <ul id="backendnavigation">
      <li><?php echo link_to('Homepage', 'network_home', $network) ?></li>
      <li><?php echo link_to('Inbox', 'network_home', $network) ?></li>
      <li><?php echo link_to('Pics', 'network_home', $network) ?></li>
      <li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
    </ul>
  </div>
<?php endif ?>