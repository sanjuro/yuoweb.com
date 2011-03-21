<?php use_stylesheet('message.css') ?>
	
<div data-role="page">

	<div data-role="header">
		<?php echo link_to( 'Home', url_for('homepage', $network), array( "class" => "ui-btn-left" )) ?>
		<h1>Messages</h1>	
		<?php echo link_to('New', url_for('message_addmessage', $network), array( "class" => "ui-btn-right", "data-icon" => "plus", "data-transition" => "flip" )) ?></li>			
	</div>
	<!-- /header -->

	<div data-role="content">	
	    
	<p>
	<?php if (count($messages) > 0) :?>
	  <ul data-role="listview" class="ui-listview" role="listbox">
		<?php foreach ( $messages as $value ) : ?>
			<?php $message = $value->getMessage(); ?>
			<?php $sender = $message->getNetworkUser()->getsfGuardUser(); ?>
			<li role="option" tabindex="-1" data-theme="c" class="ui-btn ui-btn-icon-right ui-li ui-btn-up-c">
				<div class="ui-btn-inner">
					<div class="ui-btn-text">
						<p class="ui-li-aside ui-li-desc">
							<strong><?php echo $message->getCreatedAt() ?></strong>
							<br>
							<?php if ($value->getMessagestatusId() == 1) :?>
								<strong>Unread</strong>
							<?php endif; ?>	
						</p>
						<h3 class="ui-li-heading">
							<?php echo ucwords($sender->getFirstName().' '.$sender->getLastName()) ?>
						</h3>
						<p class="ui-li-desc">
						<strong><?php echo link_to($message->getSubject(), url_for('message_showmessage', $value), array( "class" => "ui-link-inherit") )?> </strong>
						</p>
						<p class="ui-li-desc"><?php echo $message->getBody() ?></p>
					</div>
				</div>
			</li>
		<?php endforeach; ?>
	  </ul>
	<?php else : ?>
		<?php echo 'You have 0 messages' ?>
	<?php endif;?>
	
	    		
	</div>
	<!-- /content -->

	<div data-role="footer">
	
	</div><!-- /footer -->

	
</div>
<!-- /page -->

