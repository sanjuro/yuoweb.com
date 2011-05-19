<?php use_helper('I18N') ?>

<?php echo __('No login ? ').link_to(__('Join this network.'),url_for( 'user_join', $network )) ?>
<?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form, 'network' => $network)) ?>