<?php slot( 'title', $network->getTitle().' - We Buy' )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - We Buy</h1>' )?>

	<h3> <?php echo 'Deal - '.$deal['title'] ?></h3>

	<p> 
		<?php echo $product['description'] ?>
	</p>
	<p>
	    <span class="deal_expiresat">Deal Price: R <?php echo number_format($deal['deal_price'], 2, '.', '')  ?></span>
	    <br>
	    <span class="deal_discount">You save R <?php echo number_format($deal['full_price'] -$deal['deal_price'] , 2, '.', '')  ?> </span>
	    <br>
	    <span class="deal_buyercount"><?php echo $deal['buyer_count']  ?> already bought</span>
    </p>
    <p>
     <?php echo link_to('Buy Now', 'webuy_deal_buy', $deal) ?>
    </p>