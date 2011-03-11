<div data-role="page">

	<div data-role="header">
		<?php echo '<h2>Speakout: Home</h2>' ?>	
		<?php echo link_to( 'Home', url_for('homepage', $network), array( "class" => "ui-btn-left" )) ?>
		<?php echo link_to( 'Add Topic', url_for('speakout_addtopic', $network), array( "class" => "ui-btn-right", "data-icon" => "plus", "data-transition" => "flip" )) ?></li>
	</div>
	<!-- /header -->

	<div data-role="content">		    
			
		<?php if (count($categorys) > 0) :?>
			<ul data-role="listview" data-filter="true" class="ui-listview" role="listbox">
			<?php foreach ( $categorys as $category ) : ?>
				<li data-role="list-divider" role="heading" tabindex="0" class="ui-li ui-li-divider ui-btn ui-bar-b ui-btn-up-undefined">
					<?php echo $category['title'] ?>
					<span class="ui-li-count ui-btn-up-c ui-btn-corner-all"><?php echo count($category['SpeakoutTopic']) ?></span>	
				</li>
				<?php foreach ( $category['SpeakoutTopic'] as $topic ) : ?>
				<li role="option" tabindex="-1" data-theme="c" class="ui-btn ui-btn-up-c ui-btn-icon-right ui-li">
					<div class="ui-btn-inner">
						<div class="ui-btn-text">						
							<?php echo link_to(  $topic['title'], url_for( '@speakout_showtopic?topic='.$topic['id'].'&network_id='.$network->getId() ). array( "class" => "ui-link-inherit") ) ?>
						</div>
					</div>
				</li>	
				<?php endforeach; ?>				

			<?php endforeach; ?>
			</ul>
		<?php else : ?>
			<?php echo 'There are no categories' ?>
		<?php endif;?>
		
	</div>
	<!-- /content -->

	<div data-role="footer">
	
	</div><!-- /footer -->

	
</div>
<!-- /page -->