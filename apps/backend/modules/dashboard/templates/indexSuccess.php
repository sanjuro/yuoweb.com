<?php use_stylesheet('pagination.css') ?>
<?php slot( 'title', 'yUo Web - you are the network' )?>
<h2><?php echo __('Your Networks')?></h2><?php include_partial('dashboard/networklist', array('networks' => $networkpager->getResults())) ?><?php if ($networkpager->haveToPaginate()): ?>  <div class="pagination">    <a href="<?php echo url_for('networks') ?>?page=1">      <img src="/images/first.png" alt="First page" />    </a> 
    <a href="<?php echo url_for('networks') ?>?page=<?php echo $networkpager->getPreviousPage() ?>">      <img src="/images/previous.png" alt="Previous page" title="Previous page" />    </a> 
    <?php foreach ($networkpager->getLinks() as $page): ?>      <?php if ($page == $networkpager->getPage()): ?>        <?php echo $page ?>      <?php else: ?>        <a href="<?php echo url_for('networks') ?>?page=<?php echo $page ?>"><?php echo $page ?></a>      <?php endif; ?>    <?php endforeach; ?>
    <a href="<?php echo url_for('networks') ?>?page=<?php echo $networkpager->getNextPage() ?>">      <img src="/images/next.png" alt="Next page" title="Next page" />    </a>
    <a href="<?php echo url_for('networks') ?>?page=<?php echo $networkpager->getLastPage() ?>">      <img src="/images/last.png" alt="Last page" title="Last page" />    </a>  </div>
<?php endif; ?>

<?php echo link_to('Add Network', url_for( 'network_add', $client) ) ?>

<div class="pagination_desc">  <strong><?php echo $networkpager->getNbResults() ?></strong> network on your space   <?php if ($networkpager->haveToPaginate()): ?>    - page <strong><?php echo $networkpager->getPage() ?>/<?php echo $networkpager->getLastPage() ?></strong>  <?php endif; ?></div>