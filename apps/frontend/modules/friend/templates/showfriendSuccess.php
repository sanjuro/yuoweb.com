<?php use_stylesheet('message.css') ?>
<?php slot( 'title', $network->getTitle().' - Friends' )?>
<?php slot( 'pagetitle', '<h1>'.$network->getTitle().' - Friends</h1>' )?>	<?php if (!empty($userprofile)) : ?>		<h3>Profile: Pic</h3>	<p>				<?php $profilepic =  $userprofile->getProfilePic(); ?>		<?php if (empty($profilepic)) : ?>		  			<img src="http://<?php echo $_SERVER['SERVER_NAME'] ?><?php echo $sf_request->getRelativeUrlRoot() ?>/uploads/profilepics/270x270/default_profile_pic.gif">		<?php else : ?>			<img src="http://<?php echo $_SERVER['SERVER_NAME'] ?><?php echo $sf_request->getRelativeUrlRoot() ?>/uploads/profilepics/270x270/<?php echo $userprofile->getProfilePic() ?>">		<?php endif; ?>			</p>		<h3>Profile: Friends</h3>	<p>		<?php echo $user->getFullname().' has '.link_to($friendcount.' friend(s)', url_for('friend_showall', $user)); ?>	</p>			<h3>Profile: Description</h3>	<p>		<?php echo $userprofile->getDescription(); ?>	</p>		<?php endif; ?>	<h3>Profile: Showing <?php echo $user->getFullname() ?></h3>	<p>	<fieldset>		  <table class="formtable"> 		 	 <tr>			      <th>First Name:</th>			      <td>			        <?php echo $user->getFirstName()  ?>			      </td>			 </tr>		 	 <tr>			      <th>Last Name:</th>			      <td>			         <?php echo $user->getLastName()  ?>			      </td>			 </tr>		 	 <tr>			      <th>Email:</th>			      <td>			         <?php echo $user->getEmailAddress()  ?>			      </td>			 </tr>		  </table> 	</fieldset>	</p>	
	<h3>Profile: Photos</h3>  	<p>		<?php include_partial('photo/photos', array( 'photos' => $photos, 'network' => $network ))?>	</p>