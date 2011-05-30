<?php if($has_comments): ?>
<?php use_helper('Date', 'JavascriptBase', 'I18N') ?>
<div class="comment_list">
  <div class="comment_heading">
    <h1><?php echo $pager->getNbResults() ?> people commented on this</h1>
  </div>
	<?php if ($pager->haveToPaginate()): ?>
		<?php include_partial('comment/pagination', array('pager' => $pager, 'route' => $sf_request->getUri(), 'crypt' => $crypt, 'position' => 'top')) ?>
	<?php endif ?>
  <div class="list-comments" summary="">
	<?php foreach($pager->getResults() as $c): ?>
		<?php include_partial("comment/comment", array('obj' => $c, 'i' => (++$i + $cpt), 'first_line' => ($i == 1))) ?>
	<?php endforeach; ?>
  </div>
  <br>
<?php if ($pager->haveToPaginate()): ?>
<?php include_partial('comment/pagination', array('pager' => $pager, 'route' => $sf_request->getUri(), 'crypt' => $crypt, 'position' => 'back')) ?>
<?php endif ?>

<?php else: ?>
  <div>
    <h1><?php echo 'Be the first to post' ?></h1>
  </div>
 </div>
<?php endif ?>