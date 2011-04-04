<?php echo $form['_csrf_token'] ?>
 
<?php echo $form['network_id']->renderLabel() ?>
<br>
<?php echo $form['network_id'] ?>
<br>
<?php echo $form['network_id']->renderError() ?>
<br>

<?php echo $form['title']->renderLabel() ?>
<br>
<?php echo $form['title'] ?>
<br>
<?php echo $form['title']->renderError() ?>
<br>

<?php echo $form['full_price']->renderLabel() ?>
<br>
<?php echo $form['full_price'] ?>
<br>
<?php echo $form['full_price']->renderError() ?>
<br>

<?php echo $form['deal_price']->renderLabel() ?>
<br>
<?php echo $form['deal_price'] ?>
<br>
<?php echo $form['deal_price']->renderError() ?>
<br>

<?php echo $form['discount_percent']->renderLabel() ?>
<br>
<?php echo $form['discount_percent'] ?>
<br>
<?php echo $form['discount_percent']->renderError() ?>
<br>

<?php echo $form['buyer_count']->renderLabel() ?>
<br>
<?php echo $form['buyer_count'] ?>
<br>
<?php echo $form['buyer_count']->renderError() ?>
<br>

<?php echo $form['tipping_count']->renderLabel() ?>
<br>
<?php echo $form['tipping_count'] ?>
<br>
<?php echo $form['tipping_count']->renderError() ?>
<br>

<?php echo $form['status']->renderLabel() ?>
<br>
<?php echo $form['status'] ?>
<br>
<?php echo $form['status']->renderError() ?>
<br>

<?php echo $form['g_lat']->renderLabel() ?>
<br>
<?php echo $form['g_lat'] ?>
<br>
<?php echo $form['g_lat']->renderError() ?>
<br>

<?php echo $form['g_long']->renderLabel() ?>
<br>
<?php echo $form['g_long'] ?>
<br>
<?php echo $form['g_long']->renderError() ?>
<br>

<?php echo $form['expires_at']->renderLabel() ?>
<br>
<?php echo $form['expires_at'] ?>
<br>
<?php echo $form['expires_at']->renderError() ?>
<br>

<?php echo $form['backendwebuyproductform'] ?>
<br>


<ul class="sf_admin_actions">
	<li class="sf_admin_action_list"><a href="<?php echo url_for( 'photo_index' ) ?>">Back to list</a></li>  
	<li class="sf_admin_action_save"><input type="submit" value="Save"></li>  
</ul>