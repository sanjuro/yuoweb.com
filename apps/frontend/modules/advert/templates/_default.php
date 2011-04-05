<?php if ($adverts && !empty($adverts[0]['Advert'])) : ?>
<a href="">	<img src="<?php echo "http://".$_SERVER['SERVER_NAME'].$sf_request->getRelativeUrlRoot()."/images/adverts/".$adverts[0]['Advert']['image_path'] ?>"></a>
<?php endif;?>