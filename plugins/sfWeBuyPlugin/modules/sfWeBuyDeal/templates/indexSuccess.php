<?php slot( 'title', $network->getTitle().' - We Buy' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - we Buy</h1>' )?>

	<h3> <?php echo 'Latest Deals' ?></h3>
	<?php if (!empty($deals)) :?>
	<p> 
		<?php include_partial( 'sfWeBuyDeal/deal_list', array( 'deals' => $deals)) ?>
	</p>
	<?php else : ?>
		<?php echo 'There are no new deals on your network' ?>
	<?php endif;?>
