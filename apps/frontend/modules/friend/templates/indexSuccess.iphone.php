<?php use_stylesheet('message.css') ?>
	
<div data-role="page">

	<div data-role="header">
		<?php echo link_to( 'Home', url_for('homepage', $network), array( "class" => "ui-btn-left" )) ?>	
		<h1>Friends</h1>				
	</div>
	<!-- /header -->

	<div data-role="content">		    

		<?php if($friends):?>
			<ul data-role="listview" class="ui-listview" role="listbox">
			<?php foreach ($friends as $friend) : ?>
				<span><?php echo ucwords($friend['first_name']).' '.ucwords($friend['last_name']) ?></span>
				<span><?php echo link_to('Profile', url_for('@friend_showfriend?user='.$friend['id'].'&network_id='.$network->getId()))?></span>
				<span><?php echo link_to('Block', url_for('@friend_blockfriend?user='.$friend['id']))?></span>
			<?php endforeach;?>
			</ul>
		<?php endif; ?>
		
		<h3>Friend Requests</h3>
		<p>
		
		</p>
	    		
	</div>
	<!-- /content -->

	<div data-role="footer">
	
	</div><!-- /footer -->

	
</div>
<!-- /page -->