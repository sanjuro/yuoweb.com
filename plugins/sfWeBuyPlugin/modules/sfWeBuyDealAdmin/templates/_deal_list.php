<?php use_stylesheet('table.css') ?>

<table class="users">
  <tr>
  	<th>Product</th>
  	<th>Deal Price</th>
  	<th>Buyer Count</th>
  	<th>Expiry Date</th>
  	<th></th>
  <tr>
  <?php foreach ($deals as $i => $deal): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>" valign="middle" onmouseover="this.style.backgroundColor='#F2F2F2';" onmouseout="this.style.backgroundColor='white';" style="background-color: rgb(242, 242, 242); ">
      <td class="deallist_product">
       <?php echo $deal['title']?>
      </td>
      <td class="deallist_dealprice">
         <?php echo $deal['deal_price']?>
      </td>
      <td class="deallist_buyercount">
        <?php echo $deal['buyer_count']?>
      </td>
      <td class="deallist_expirydate">
        <?php echo $deal['expires_at'] ?>
      </td>
      <td>
	  	<ul class="sf_admin_actions" style="display:inline;">
		  <li class="sf_admin_action_edit"><?php echo link_to( __('Edit'), url_for( 'webuy_deal_edit_admin', $deal ) ) ?></li>  
 		  <li class="sf_admin_action_delete"><?php echo link_to( __('Delete'), url_for( 'webuy_deal_delete_admin', $deal ) ) ?></li>  
	  	</ul>
      </td>
    </tr>
  <?php endforeach; ?>
</table>