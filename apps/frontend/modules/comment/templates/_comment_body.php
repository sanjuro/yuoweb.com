        <?php if(!$obj->is_delete): ?>
        <div id="body_<?php echo $obj->id ?>">
        <span class="author">
          <a href="<?php echo url_for('@friend_showfriend?username='.$name) ?>"><?php echo $name ?></a>
        </span>
        <?php echo $obj->getBody(ESC_RAW) ?>
        </div>
        <span class="date"><?php echo format_date($date, "f") ?></span>
        <?php else: ?>
          <div class="msg-deleted"><?php echo __('Comment deleted by moderator', array(), 'vjComment') ?></div>
        <?php endif ?>