<?php slot( 'pagetitle', '<h1>'.$network->getTitle().'</h1>' )?>
	<?php foreach ($features as $feature) : ?>
			<?php if ($feature['Feature']['id'] == 1) : ?>				<h3>
					<?php echo link_to(ucwords($feature['Feature']['title']), url_for(strtolower($feature['Feature']['url']), $network )) ?>				</h3>				<p>
				<?php include_partial('message/newmessages', array( 'newmessages' => $newmessages )) ?>				</p>			<?php elseif ($feature['Feature']['id'] == 5) : ?>				<h3><?php echo $feature['Feature']['title'] ?></h3>				<p>				<?php include_partial('friend/friendrequests', array( 'friendrequests' => $friendrequests )) ?>				</p>			<?php else : ?>
			<div class="feature">				<h3>					<?php echo link_to(ucwords($feature['Feature']['title']), url_for(strtolower($feature['Feature']['url']), $network )) ?>				</h3>			</div>			<?php endif;?>			<br>	<?php endforeach;?>
