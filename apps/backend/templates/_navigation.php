<?php if ($sf_user->isAuthenticated()): ?>
  <div id="navigation">
    <ul id="backendnavigation">      <li><?php echo link_to(__('Dashboard'), 'homepage', array(), array( "class" => "dashboard") ) ?></li>
      <li><?php echo link_to(__('Networks'), 'networks', array(), array( "class" => "network") ) ?></li>
      <li><?php echo link_to(__('Reports'), 'reports', array(), array( "class" => "reports")) ?></li>
      <?php if ($sf_user->isSuperAdmin() && $sf_user->hasGroup('admin')): ?>
      <li><?php echo link_to(__('Adverts'), 'advert', array(), array( "class" => "adverts")) ?></li>
      <li><?php echo link_to(__('Users'), 'sf_guard_user', array(), array( "class" => "users")) ?></li>
      <li><?php echo link_to(__('Permissions'), 'sf_guard_permission', array(), array( "class" => "users")) ?></li>
      <li><?php echo link_to(__('Groups'), 'sf_guard_group', array(), array( "class" => "users")) ?></li>      <li><?php echo link_to(__('Themes'), 'sf_multisite_theme_profile', array(), array( "class" => "users")) ?></li>      
      <li><?php echo link_to(__('Errors'), 'error_management_error_admin', array(), array( "class" => "users")) ?></li>
      <?php endif; ?>
      <li><?php echo link_to(__('Logout'), 'sf_guard_signout', array(), array( "class" => "logout")) ?></li>
    </ul>
  </div>
<?php endif ?>