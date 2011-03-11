<?php use_stylesheet('table.css') ?>

<table class="users">
  <tr>
  	<th>Pic</th>
  	<th>Username</th>
  	<th>Fullname</th>
  	<th>Date Added</th>
  	<th></th>
  <tr>
  <?php foreach ($photos as $i => $photo): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>" valign="middle" onmouseover="this.style.backgroundColor='#F2F2F2';" onmouseout="this.style.backgroundColor='white';" style="background-color: rgb(242, 242, 242); ">
      <td class="pic">
        <img src="<?php echo "http://".$_SERVER['SERVER_NAME'].$sf_request->getRelativeUrlRoot()."/uploads/pictures/50x50/".$photo['url'] ?>">
      </td>
      <td class="username">
        <?php echo $photo['NetworkUser']['sfGuardUser']['username'] ?>
      </td>
      <td class="fullname">
        <?php echo ucwords($photo['NetworkUser']['sfGuardUser']['first_name']).' '.ucwords($photo['NetworkUser']['sfGuardUser']['last_name']) ?>
      </td>
      <td class="city">
        <?php echo $photo['created_at'] ?>
      </td>
      <td>
	  	<ul class="sf_admin_actions" style="display:inline;">
		  <li class="sf_admin_action_edit"><?php echo link_to( __('Edit'), url_for( 'photo_edit', $photo ) ) ?></li>  
 		  <li class="sf_admin_action_delete"><?php echo link_to( __('Delete'), url_for( 'photo_delete', $photo ) ) ?></li>  
	  	</ul>
      </td>
    </tr>
  <?php endforeach; ?>
</table>