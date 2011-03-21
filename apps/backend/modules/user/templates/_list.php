<table class="users">
  <tr>
  	<th>Pic</th>
  	<th>Username</th>
  	<th>Fullname</th>
  	<th>Gender</th>
  	<th>City</th>
  	<th>Country</th>
  	<th></th>
  	<th></th>
  <tr>
  <?php foreach ($users as $i => $user): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>" valign="middle" onmouseover="this.style.backgroundColor='#F2F2F2';" onmouseout="this.style.backgroundColor='white';" style="background-color: rgb(242, 242, 242); ">
      <td class="pic">
        <img src="<?php echo "http://".$_SERVER['SERVER_NAME'].$sf_request->getRelativeUrlRoot()."/uploads/pictures/50x50/".$user['sfGuardUser']['UserProfile'][0]['profile_pic'] ?>">
      </td>
      <td class="username">
        <?php echo $user['sfGuardUser']['username'] ?>
      </td>
      <td class="fullname">
        <?php echo ucwords($user['sfGuardUser']['first_name']).' '.ucwords($user['sfGuardUser']['last_name']) ?>
      </td>
      <td class="email">
        <?php if($user['sfGuardUser']['UserProfile'][0]['gender'] == 1)  :?>
        	Male
        <?php elseif($user['sfGuardUser']['UserProfile'][0]['gender'] == 2) : ?>
        	Female
        <?php else : ?>
        	n/a
        <?php endif;?>
      </td>
      <td class="city">
        <?php echo $user['sfGuardUser']['UserProfile'][0]['city'] ?>
      </td>
      <td class="country">
        <?php echo $user['sfGuardUser']['UserProfile'][0]['country'] ?>
      </td>
      <td></td>
      <td></td>
    </tr>
  <?php endforeach; ?>
</table>