<?php slot( 'pagetitle', '<h1>Join '.$network->getTitle().' Network</h1>' )?>

<form action="<?php echo url_for('user_join', $network) ?>" method="post">	<?php echo include_partial('user/join_form', array( 'form' => $form )) ?></form>