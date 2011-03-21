<?php slot( 'title', $network->getTitle() )?>

<h1>All Users for <?php echo $network->getTitle() ?></h1>

<div id="main">

	<h3>Your Users</h3>
	<p>
	<table class="datatable">
	<?php foreach ($users as $user) : ?>
		<tr><td><?php echo ucwords($user['sfGuardUser']['first_name']).' '.ucwords($user['sfGuardUser']['last_name']) ?></tr></td>
	<?php endforeach;?>
	</table>
	</p>
</div>

<?php slot( 'footer', include_component('network', 'footer' , array('network' => $network)) )?>