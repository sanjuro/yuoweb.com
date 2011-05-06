<?php if($has_comments): ?>
<?php use_helper('Date', 'JavascriptBase', 'I18N') ?>

  <div>
    <h1><?php echo __('Comments list', array(), 'vjComment') ?> (<?php echo $pager->getNbResults() ?>)</h1>
  </div>
	<?php if ($pager->haveToPaginate()): ?>
		<?php include_partial('comment/pagination', array('pager' => $pager, 'route' => $sf_request->getUri(), 'crypt' => $crypt, 'position' => 'top')) ?>
	<?php endif ?>
  <table class="list-comments" summary="">
	<?php foreach($pager->getResults() as $c): ?>
		<?php include_partial("comment/comment", array('obj' => $c, 'i' => (++$i + $cpt), 'first_line' => ($i == 1))) ?>
	<?php endforeach; ?>
  </table>
  <br>
<?php if ($pager->haveToPaginate()): ?>
<?php include_partial('comment/pagination', array('pager' => $pager, 'route' => $sf_request->getUri(), 'crypt' => $crypt, 'position' => 'back')) ?>
<?php else: ?>
<?php include_partial('comment/back_to_top', array('route' => $sf_request->getUri(), 'crypt' => $crypt, 'text' => true)) ?>
<?php endif ?>
<?php else: ?>
  <div>
    <h1><?php echo 'Be the first to post' ?></h1>
  </div>
<?php endif ?>