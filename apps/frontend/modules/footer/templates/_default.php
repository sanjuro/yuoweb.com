<?php if ($sf_user->isAuthenticated()): ?>
  <div id="footernavigation">
    <ul id="footernavigation">
      <li><?php echo link_to('View Profile', url_for('user_viewprofile', $sf_user->getGuardUser()), array( "accesskey" => 6 )) ?></li>
      <li><?php echo link_to('Logout', url_for('sf_guard_signout'), array( "accesskey" => 7)) ?></li>
    </ul>
  </div>
<?php endif; ?>