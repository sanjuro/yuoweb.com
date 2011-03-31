<?php use_stylesheet('speakout.css') ?>

<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Speakout</h1>' )?>

	<h3><?php echo 'Speakout - Replys for '.$topic->getTitle() ?></h3>
	<h5><?php echo $topic->getDescription()?></h5>
	
	<?php if ($pager->haveToPaginate()): ?>
	  <div class="pagination">
	    <a href="<?php echo url_for( '@speakout_showtopic?topic='.$topic->getId() ) ?>?page=1">
	      <img src="/images/first.png" alt="First page" />
	    </a>
	 
	    <a href="<?php echo url_for( '@speakout_showtopic?topic='.$topic->getId() ) ?>?page=<?php echo $pager->getPreviousPage() ?>">
	      <img src="/images/previous.png" alt="Previous page" title="Previous page" />
	    </a>
	 
	    <?php foreach ($pager->getLinks() as $page): ?>
	      <?php if ($page == $pager->getPage()): ?>
	        <?php echo $page ?>
	      <?php else: ?>
	        <a href="<?php echo url_for( '@speakout_showtopic?topic='.$topic->getId() ) ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
	      <?php endif; ?>
	    <?php endforeach; ?>
	 
	    <a href="<?php echo url_for( '@speakout_showtopic?topic='.$topic->getId() ) ?>?page=<?php echo $pager->getNextPage() ?>">
	      <img src="/images/next.png" alt="Next page" title="Next page" />
	    </a>
	 
	    <a href="<?php echo url_for( '@speakout_showtopic?topic='.$topic->getId() ) ?>?page=<?php echo $pager->getLastPage() ?>">
	      <img src="/images/last.png" alt="Last page" title="Last page" />
	    </a>
	  </div>
	<?php endif; ?>
	
	<p>
		<?php include_partial('speakout/replylist', array('replys' => $pager->getResults())) ?>
	</p>
	
	<?php if ($pager->haveToPaginate()): ?>
	  <div class="pagination">
	    <a href="<?php echo url_for( '@speakout_showtopic?topic='.$topic->getId() ) ?>?page=1">
	      <img src="/images/first.png" alt="First page" />
	    </a>
	 
	    <a href="<?php echo url_for( '@speakout_showtopic?topic='.$topic->getId() ) ?>?page=<?php echo $pager->getPreviousPage() ?>">
	      <img src="/images/previous.png" alt="Previous page" title="Previous page" />
	    </a>
	 
	    <?php foreach ($pager->getLinks() as $page): ?>
	      <?php if ($page == $pager->getPage()): ?>
	        <?php echo $page ?>
	      <?php else: ?>
	        <a href="<?php echo url_for( '@speakout_showtopic?topic='.$topic->getId() ) ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
	      <?php endif; ?>
	    <?php endforeach; ?>
	 
	    <a href="<?php echo url_for( '@speakout_showtopic?topic='.$topic->getId() ) ?>?page=<?php echo $pager->getNextPage() ?>">
	      <img src="/images/next.png" alt="Next page" title="Next page" />
	    </a>
	 
	    <a href="<?php echo url_for( '@speakout_showtopic?topic='.$topic->getId() ) ?>?page=<?php echo $pager->getLastPage() ?>">
	      <img src="/images/last.png" alt="Last page" title="Last page" />
	    </a>
	  </div>
	<?php endif; ?>
 
<div class="pagination_desc">
  <strong><?php echo $pager->getNbResults() ?></strong> replies for this topic
 
  <?php if ($pager->haveToPaginate()): ?>
    - page <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
  <?php endif; ?>
</div>	
	
<span class="speakoutnavigation"><?php echo link_to( 'Post a Reply', 'speakout_addreply', $topic ) ?></span>
