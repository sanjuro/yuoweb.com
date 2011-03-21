<?php use_stylesheet('network.css') ?>

<?php use_stylesheet('report.css') ?>

<?php use_helper('jQuery') ?>

<?php slot( 'title', 'Spark - Reports'  )?>

<h2><?php echo __('Overview') ?></h2>

<div id="left" class="column">
	 <?php include_component('report', 'getuserstable', array( 'network' => $network ) ) ?> 
</div>

<div id="center" class="column">

</div>

<div class="clearer"></div>