<?php
// test/unit/JobeetTest.php
include(dirname(__FILE__).'/../../bootstrap/Doctrine.php');
 
$t = new lime_test(11);

$network = Doctrine_Core::getTable('Network')->findOneById(1);

$t->is($network->getTitleSlug() == Yuoweb::slugify($network->getTitle()), true, 'getTitleSlug: Check getTitleSlug '.$network->getTitleSlug());

$theme = $network->getCurrentTheme()->fetchArray();
$t->is(count($theme),  1, 'getCurrentTheme: Check getCurrentTheme');

$t->is(count($network->getFeatures()),  4, 'getFeatures: Check getFeatures');

$users = $network->fetchUsersQuery()->count();
$t->is(count($network->getUsers()),  $users, 'getUsers: Check getUsers');

$t->is(count($network->getPublicUsers('Ray')),  1, 'getPublicUsers: Check getPublicUsers');

$user = $network->getUser(3);
$t->is($user->getId(),  1, 'getUser: Check getUser');

$photos = $network->getPhotos()->fetchArray();
$t->is(count($photos),  1, 'getPhotos: Check getPhotos');

$categorys = $network->getSpeakoutCategorys();
$t->is(count($categorys),  2, 'getSpeakoutCategorys: Check getSpeakoutCategorys');

$adverts = $network->getActiveAdverts();
$t->is(count($adverts),  1, 'getActiveAdverts: Check getActiveAdverts');

$networkusers = $network->fetchUsersQuery();
$t->is(count($networkusers),  2, 'fetchUsersQuery: Check fetchUsersQuery');

$adverts = $network->fetchAdvertsQuery();
$t->is(count($adverts),  1, 'fetchAdvertsQuery: Check fetchAdvertsQuery');