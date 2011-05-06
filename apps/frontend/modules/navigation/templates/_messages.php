<?php if ($sf_user->isAuthenticated()): ?>
  <div id="navigation">
    <ul id="topmenunavigation">
      <li><?php echo link_to('Home', url_for('network_home', $network), array( "accesskey" => 1)) ?></li>
      <li><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>" accesskey="0">Back</a></li> 
    </ul>
  </div>
<?php endif; ?>