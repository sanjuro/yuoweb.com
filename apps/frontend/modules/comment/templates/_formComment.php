<?php use_helper('I18N', 'JavascriptBase') ?>
<?php foreach ($form->getErrorSchema() as $sField => $sError) : ?>
<?php echo $sField.': '.$sError.'<br />' ?>
<?php endforeach; ?>
<a name="comments-<?php echo $crypt ?>"></a>
<div class="form-comment">
<?php if( vjComment::checkAccessToForm($sf_user) ): ?>
  <form action="<?php echo url_for($sf_request->getUri()) ?>" method="post">
    <?php include_partial("comment/form", array('form' => $form)) ?>
  </form>
<?php else: ?>
  <div id="notlogged"><?php echo __('Please log in to comment', array(), 'vjComment') ?></div>
<?php endif ?>
</div>