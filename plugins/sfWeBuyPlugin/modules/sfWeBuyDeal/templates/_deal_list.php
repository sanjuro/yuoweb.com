		<ul class="dealist">
		<?php foreach ( $deals as $deal ) : ?>
			<?php if ($deal['status'] == 1) :?>
			<li class="active">
			<?php else :?>
			<li class="inactive">
			<?php endif;?>	
				<span class="dealist_dealprice">R <?php echo number_format($deal['deal_price'], 2, '.', '') ?></span>		
				<span class="dealist_title"><?php echo $deal['title'] ?></span>
				<br>
				<span class="dealist_discount"> Less <?php echo number_format($deal['discount_percent'], 2, '.', '') ?> %</span>
				<span class="dealist_saving">You Save R<?php echo number_format(($deal['full_price']-$deal['deal_price']), 2, '.', '') ?></span>
				<br>
				<span class="dealist_psotedat"><?php echo 'Posted at '.$deal['created_at'] ?>	</span>
			</li>	
		<?php endforeach; ?>
		</ul>	