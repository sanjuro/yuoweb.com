<?php slot( 'title', $network->getTitle().' - Join' )?>

<?php slot( 'pagetitle', '<h1>You joined '.$network->getTitle().' </h1>' )?>

<h3>Welcome</h3>
<p>
 You just joined the <br>
 <b><?php echo $network->getTitle() ?></b> network <br>
 Your current profile was copied to this new 
 network
</p>