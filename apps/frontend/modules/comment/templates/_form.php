<table summary="">
<?php foreach($form as $id => $f): ?>
  <?php if(!$f->isHidden()): ?>
    <?php if(!$f->hasError()): ?>
      <?php $attributes = array() ?>
    <?php else: ?>
      <?php $attributes = array('class' => 'error') ?>
      <tr>
        <td><?php echo $f->renderError() ?></td>
      </tr>
    <?php endif ?>
    <tr id="tr_<?php echo $id ?>">
      <td>
        <?php echo $f->renderLabel(null, $attributes) ?>
        <br>
    	<?php echo $f->render($attributes) ?>
        <span class="help"><?php echo $f->renderHelp() ?></span>
      </td>
    </tr>
    <?php if($id == "reply_author"): ?>
    <tr id="tr_reply_author_delete">
      <td colspan="2"><?php echo link_to_function(__("Delete the reply", array(), 'vjComment'), "deleteReply()", array('class' => 'delete_reply'))."\n" ?></td>
    </tr>
    <?php endif ?>
  <?php endif ?>
<?php endforeach ?>
    <tr>
      <td colspan="2" class="submit">
<?php echo $form->renderHiddenFields() ?>
      </td>
    </tr>
  </table>
<input type="submit" value="<?php echo __('send', array(), 'vjComment') ?>" />