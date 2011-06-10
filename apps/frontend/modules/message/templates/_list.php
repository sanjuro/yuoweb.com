<?php if ($pager->getNumResults() > 0) :?>
	<p>
		<?php if ($pager->haveToPaginate()): ?>	
			<span class="more_paging">Displaying messages <?php echo $pager->getFirstIndice() ?> to  <?php echo $pager->getLastIndice() ?>.</span>
		<?php endif;?>
		
		<?php foreach ( $messages as $value ) : ?>   
			<div class="messageline">
			<?php $message = $value->getMessage(); ?>
			<?php if ($value->getMessagestatusId() == 1) :?>
			<div class="messageline_subject newmessage">
			<span style="color:green;">(n)</span>
			<?php else: ?>
			<div class="messageline_subject">
			<?php endif; ?>
				<?php echo $message->getSubject()?> 
				<span>
					<?php echo link_to('View', url_for('message_showmessage', $value) )?> 
				</span>		
				<span>
					<?php echo link_to('Reply', url_for('message_replymessage', $value) )?> 
				</span>
			</div>
			<div class="messageline_details">	
				<?php $sfGuardUser = $message->getsfGuardUser(); ?>
				From <b><?php echo $sfGuardUser['username'] ?> </b>
				at <?php echo Yuoweb::time_offset(strtotime($message->getCreatedAt())); ?> 
			</div>
			</div>
		<?php endforeach; ?>		
		
		
		<?php if ($pager->haveToPaginate()): ?>		
		    <a class="more" href="<?php echo url_for('message_more', $user) ?>?page=<?php echo $pager->getPreviousPage() ?>">
		      Previous
		    </a>
		
		    <a class="more" href="<?php echo url_for('message_more', $user) ?>?page=<?php echo $pager->getNextPage() ?>">
		      More
		    </a>
	    <?php endif;?>
	<?php else : ?>
	<p>
		<?php echo 'You have 0 message(s)' ?>
	</p>
	<?php endif;?>