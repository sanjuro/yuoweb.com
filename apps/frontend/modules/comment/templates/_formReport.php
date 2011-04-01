<?php use_helper('I18N') ?>
<?php use_stylesheet("/vjCommentPlugin/css/reportComment.min.css") ?>
<div class="form-comment">
  <h3> <?php echo __('Report a comment', array(), 'vjComment') ?></h3>
  <form action="" method="post" id="reportComment">
  <fieldset>
    <?php include_partial("comment/form", array('form' => $form)) ?>
  </fieldset>
  </form>
</div>