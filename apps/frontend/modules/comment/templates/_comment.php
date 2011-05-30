    <div class="comment<?php if($obj->is_delete) echo " deleted"; ?>">
        <?php include_partial("comment/comment_body", array('obj' => $obj, 'website' => $obj->getWebsite(), 'name' => $obj->getAuthor(), 'date' => $obj->getCreatedAt())) ?>
    </div>