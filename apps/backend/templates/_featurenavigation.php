<?php include_component('network', 'getnetworkdropdown', array( 'clientid' => $sf_user->getClientId() ) ) ?> 

<?php if ($sf_user->isAuthenticated()): ?>
  <div>
     <?php include_component('network', 'getfeaturenavigation', array( 'networkid' => $sf_user->getNetworkId() ) ) ?> 
  </div>
<?php endif; ?>

<div class="clearer" style="height:5px;"></div>
