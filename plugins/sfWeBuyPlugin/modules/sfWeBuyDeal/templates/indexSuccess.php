<?php use_stylesheet('css/webuy.css') ?>

<?php slot( 'title', $network->getTitle().' - We Buy' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - we Buy</h1>' )?>

	<h3> <?php echo 'Latest Deals' ?></h3>
	<?php if (!empty($deals)) :?>
	<p> 
		<ul class="dealist">
		<?php foreach ( $deals as $deal ) : ?>
			<?php if ($deal['status'] == 1) :?>
			<li class="active">
			<?php else :?>
			<li class="inactive">
			<?php endif;?>			
				<span class="dealist_title"><?php echo $deal['title'] ?></span>
				<br>
				<span class="dealist_dealprice">R <?php echo number_format($deal['deal_price'], 2, '.', '') ?></span>
				<span class="dealist_discount"> Less <?php echo number_format($deal['discount_percent'], 2, '.', '') ?> %</span>
				<span class="dealist_saving">You Save R<?php echo number_format(($deal['full_price']-$deal['deal_price']), 2, '.', '') ?></span>
				<br>
				<span class="dealist_psotedat"><?php echo 'Posted at '.$deal['created_at'] ?>	</span>
			</li>	
		<?php endforeach; ?>
		</ul>	
	</p>
	<?php else : ?>
		<?php echo 'There are no new deals on your network' ?>
	<?php endif;?>
