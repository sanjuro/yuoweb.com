<?php use_stylesheet('network.css') ?>
<?php use_stylesheet('speakout.css') ?>

<?php use_helper('jQuery') ?>

<?php slot( 'title', 'Spark - Speakout'  )?>

<h3><?php echo 'Replys for: '.$topic->getTitle() ?></h3>
	
	<h5><?php echo $topic->getDescription()?></h5>
	
	<?php if ($pager->haveToPaginate()): ?>
	  <div class="pagination">
	    <a href="<?php echo url_for( '@speakout_showtopic_admin?topic='.$topic->getId() ) ?>?page=1">
	      <img src="/images/first.png" alt="First page" />
	    </a>
	 
	    <a href="<?php echo url_for( '@speakout_showtopic_admin?topic='.$topic->getId() ) ?>?page=<?php echo $pager->getPreviousPage() ?>">
	      <img src="/images/previous.png" alt="Previous page" title="Previous page" />
	    </a>
	 
	    <?php foreach ($pager->getLinks() as $page): ?>
	      <?php if ($page == $pager->getPage()): ?>
	        <?php echo $page ?>
	      <?php else: ?>
	        <a href="<?php echo url_for( '@speakout_showtopic_admin?topic='.$topic->getId() ) ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
	      <?php endif; ?>
	    <?php endforeach; ?>
	 
	    <a href="<?php echo url_for( '@speakout_showtopic_admin?topic='.$topic->getId() ) ?>?page=<?php echo $pager->getNextPage() ?>">
	      <img src="/images/next.png" alt="Next page" title="Next page" />
	    </a>
	 
	    <a href="<?php echo url_for( '@speakout_showtopic_admin?topic='.$topic->getId() ) ?>?page=<?php echo $pager->getLastPage() ?>">
	      <img src="/images/last.png" alt="Last page" title="Last page" />
	    </a>
	  </div>
	<?php endif; ?>
	
	<p>
		<?php include_partial('speakout/replylist', array('replys' => $pager->getResults())) ?>
	</p>
	
	<?php if ($pager->haveToPaginate()): ?>
	  <div class="pagination">
	    <a href="<?php echo url_for( '@speakout_showtopic_admin?topic='.$topic->getId() ) ?>?page=1">
	      <img src="/images/first.png" alt="First page" />
	    </a>
	 
	    <a href="<?php echo url_for( '@speakout_showtopic_admin?topic='.$topic->getId() ) ?>?page=<?php echo $pager->getPreviousPage() ?>">
	      <img src="/images/previous.png" alt="Previous page" title="Previous page" />
	    </a>
	 
	    <?php foreach ($pager->getLinks() as $page): ?>
	      <?php if ($page == $pager->getPage()): ?>
	        <?php echo $page ?>
	      <?php else: ?>
	        <a href="<?php echo url_for( '@speakout_showtopic_admin?topic='.$topic->getId() ) ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
	      <?php endif; ?>
	    <?php endforeach; ?>
	 
	    <a href="<?php echo url_for( '@speakout_showtopic_admin?topic='.$topic->getId() ) ?>?page=<?php echo $pager->getNextPage() ?>">
	      <img src="/images/next.png" alt="Next page" title="Next page" />
	    </a>
	 
	    <a href="<?php echo url_for( '@speakout_showtopic_admin?topic='.$topic->getId() ) ?>?page=<?php echo $pager->getLastPage() ?>">
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

<ul class="sf_admin_actions">
	<li class="sf_admin_action_list"><a href="<?php echo url_for( 'speakout_index_admin' ) ?>">Back to Categories</a></li>  
	<li class="sf_admin_action_add"><?php echo link_to( 'Post a Reply', 'speakout_addreply', $topic ) ?></li>  
</ul>

