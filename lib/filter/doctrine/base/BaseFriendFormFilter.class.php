<?php

/**
 * Friend filter form base class.
 *
 * @package    Spark
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFriendFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'friender_id'    => new sfWidgetFormFilterInput(),
      'friendee_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUsers'), 'add_empty' => true)),
      'strength'       => new sfWidgetFormFilterInput(),
      'frienders_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'NetworkUser')),
      'friendees_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Friend')),
    ));

    $this->setValidators(array(
      'friender_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'friendee_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('NetworkUsers'), 'column' => 'id')),
      'strength'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'frienders_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'NetworkUser', 'required' => false)),
      'friendees_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Friend', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('friend_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addFriendersListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.sfGuardUserGroup sfGuardUserGroup')
      ->andWhereIn('sfGuardUserGroup.group_id', $values)
    ;
  }

  public function addFriendeesListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.Friend Friend')
      ->andWhereIn('Friend.friendee_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Friend';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'friender_id'    => 'Number',
      'friendee_id'    => 'ForeignKey',
      'strength'       => 'Number',
      'frienders_list' => 'ManyKey',
      'friendees_list' => 'ManyKey',
    );
  }
}
