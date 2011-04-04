<?php slot( 'title', 'We Buy:  Showing Deal '.$deal['title'] )?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - We Buy</h1>' )?>

<h3> <?php echo 'Deal - '.$deal['title'] ?></h3>

<form action="<?php echo url_for('webuy_deal_edit_admin', $deal)?>" method="post" >

	<?php include_partial( 'sfWeBuyDealAdmin/deal_form', array( 'form' => $form ))?>
	
</form>