<?php slot( 'pagetitle', '<h1>'.$network->getTitle().'</h1>' )?>
	<?php foreach ($features as $feature) : ?>
			<?php if ($feature['Feature']['id'] == 1) : ?>
				<h3>
					<?php echo link_to(ucwords($feature['Feature']['title']), url_for(strtolower($feature['Feature']['url']), $network )) ?>
				</h3>
			      <ul id="featurenavigation">
			        <li><?php echo link_to('Show Messages', url_for('message_index', $network), array( "accesskey" => 1)) ?></li>
			      </ul>	
				<p>
				<?php include_partial('message/newmessages', array( 'newmessages' => $newMessages )) ?>
				</p>
			<?php elseif ($feature['Feature']['id'] == 2) : ?>
			<div class="feature">
				<h3>
					<?php echo link_to(ucwords($feature['Feature']['title']), url_for(strtolower($feature['Feature']['url']), $network )) ?>
				</h3>
			      <ul id="featurenavigation">
			        <li><?php echo link_to('Show Friends', url_for(strtolower($feature['Feature']['url']), $network ), array( "accesskey" => 2)) ?></li>
			      </ul>	
			      <p>
			         You have <?php echo $friendcount ?> friends.
			      </p>
				  <p>
					<?php include_partial('friend/friendrequests', array( 'friendrequests' => $friendRequests )) ?>
				  </p>
			</div>
			<?php elseif ($feature['Feature']['id'] == 3) : ?>
			<div class="feature">
				<h3>
					<?php echo link_to(ucwords($feature['Feature']['title']), url_for(strtolower($feature['Feature']['url']), $network )) ?>
				</h3>
			      <ul id="featurenavigation">
			        <li><?php echo link_to('Show Feeds', url_for(strtolower($feature['Feature']['url']), $network ), array( "accesskey" => 3)) ?></li>
			      </ul>	
			</div>
			<?php elseif ($feature['Feature']['id'] == 4) : ?>
			<div class="feature">
				<h3>
					<?php echo link_to(ucwords($feature['Feature']['title']), url_for(strtolower($feature['Feature']['url']), $network )) ?>
				</h3>
			      <ul id="featurenavigation">
			        <li><?php echo link_to('Show Photos', url_for(strtolower($feature['Feature']['url']), $network ), array( "accesskey" => 4)) ?></li>
			      </ul>	
				  <p>
					<?php include_partial('photo/photos', array( 'photos' => $recentPhotos, 'network' => $network)) ?>
				  </p>
			</div>
			<?php elseif ($feature['Feature']['id'] == 5) : ?>
				<h3><?php echo $feature['Feature']['title'] ?></h3>
			      <ul id="featurenavigation">
			        <li><?php echo link_to('Show Categories', url_for('speakout_index', $network), array( "accesskey" => 1)) ?></li>
			      </ul>		
				<p>
				<?php include_partial('sfSpeakoutFrontend/new_reply_count', array( 'newReplys' => $newReplys, 'network' => $network)) ?>
				</p>		
			<?php elseif ($feature['Feature']['id'] == 6) : ?>
			<div class="feature">
				<h3>
					<?php echo link_to(ucwords($feature['Feature']['title']), url_for(strtolower($feature['Feature']['url']), $network )) ?>
				</h3>
			    <ul id="featurenavigation">
			        <li><?php echo link_to('Show Deals', url_for(strtolower($feature['Feature']['url']), $network ), array( "accesskey" => 6)) ?></li>
			    </ul>
				<p>
				<?php include_partial('sfWeBuyDeal/deal_count', array( 'dealcount' => $dealCount)) ?>
				</p>	
			</div>
			<?php elseif ($feature['Feature']['id'] == 7) : ?>
			<div class="feature">
				<h3>
					<?php echo link_to(ucwords($feature['Feature']['title']), url_for(strtolower($feature['Feature']['url']), $network )) ?>
				</h3>
			    <ul id="featurenavigation">
			        <li><?php echo link_to('Send Free SMS', url_for(strtolower($feature['Feature']['url']), $network ), array( "accesskey" => 7)) ?></li>
			    </ul>
			</div>
			<?php else : ?>
			<div class="feature">
				<h3>
					<?php echo link_to(ucwords($feature['Feature']['title']), url_for(strtolower($feature['Feature']['url']), $network )) ?>
				</h3>
			</div>
			<?php endif;?>
	<?php endforeach;?>