<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseTerritoryType extends Doctrine_Record
{

  public function setTableDefinition()
  {
    $this->setTableName('TerritoryTypes');
    $this->hasColumn('TerritoryID', 'integer', 4, array('unsigned' => 0, 'primary' => true, 'notnull' => true, 'autoincrement' => true));
    $this->hasColumn('TerritoryName', 'string', 50, array('fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('TerritoryDescription', 'string', 250, array('fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('MSAccessTime', 'timestamp', null, array('primary' => false, 'notnull' => false, 'autoincrement' => false));
  }

  public function setUp()
  {
    parent::setUp();
  }

}