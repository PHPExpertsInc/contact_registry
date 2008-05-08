<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseCustomerContact extends Doctrine_Record
{

  public function setTableDefinition()
  {
    $this->setTableName('CustomerContacts');
    $this->hasColumn('ContactID', 'integer', 4, array('unsigned' => 0, 'primary' => true, 'notnull' => true, 'autoincrement' => true));
    $this->hasColumn('RollupID', 'integer', 4, array('unsigned' => 0, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('ContactFirstName', 'string', 255, array('fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('ContactLastName', 'string', 255, array('fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('ContactNumber', 'string', 50, array('fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('ContactNumberTypeID', 'integer', 4, array('unsigned' => 0, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('ContactEmail', 'string', 250, array('fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('RecordDate', 'timestamp', null, array('primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('MSAccessTime', 'timestamp', null, array('primary' => false, 'notnull' => false, 'autoincrement' => false));
  }

  public function setUp()
  {
    parent::setUp();
  }

}