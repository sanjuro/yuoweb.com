        <td>
         <a name="<?php echo $i ?>" class="ancre">#<?php echo $i ?></a>
        <?php if(!$obj->is_delete): ?>
          <?php echo link_to(
               'Report',
                url_for('@comment_reporting?id='.$obj->getId().'&num='.$i)) ?><br />
        <?php endif; ?>
        </td>