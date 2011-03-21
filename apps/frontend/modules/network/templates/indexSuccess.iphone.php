<?php slot( 'pagetitle', '<h2>'.$network->getTitle().'</h2>' )?><div data-role="page">	<div data-role="header">		<?php echo '<h2>'.$network->getTitle().'</h2>' ?>		</div>	<!-- /header -->	<div data-role="content">		    		<ul data-role="listview">				<?php foreach ($features as $feature) : ?>				<li>				<?php if ($feature['Feature']['id'] == 1) : ?>					<a href="<?php echo url_for(strtolower($feature['Feature']['url']), $network )?>" class="ui-link-inherit"> <?php echo ucwords($feature['Feature']['title']) ?> </a>  					<div class="clearer" style="height:10px;"></div>					<p>					<?php include_partial('message/newmessages', array( 'newmessages' => $newmessages )) ?>					</p>				<?php elseif ($feature['Feature']['id'] == 5) : ?>					<?php echo $feature['Feature']['title'] ?>					<div class="clearer" style="height:10px;"></div>					<p>					<?php include_partial('friend/friendrequests', array( 'friendrequests' => $friendrequests )) ?>					</p>				<?php else : ?>				<div class="feature">					<a href="<?php echo url_for(strtolower($feature['Feature']['url']), $network )?>" class="ui-link-inherit"> <?php echo ucwords($feature['Feature']['title']) ?> </a>  				</div>				<?php endif;?>				</li>		<?php endforeach;?>				</ul>			</div>	<!-- /content -->	<div data-role="footer">		<?php echo link_to( 'Logout', url_for('sf_guard_signout'), array( "class" => "ui-btn-left" )) ?>	</div><!-- /footer -->
</div><!-- /page -->






	
