<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseConsultant extends Doctrine_Record
{

  public function setTableDefinition()
  {
    $this->setTableName('Consultants');
    $this->hasColumn('ConsultantID', 'integer', 4, array('unsigned' => 0, 'primary' => true, 'notnull' => true, 'autoincrement' => true));
    $this->hasColumn('ConsultantFirstName', 'string', 50, array('fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('ConsultantLastName', 'string', 50, array('fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('UserName', 'string', 50, array('fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('Password', 'string', 42, array('fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('StartDate', 'timestamp', null, array('primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('EndDate', 'timestamp', null, array('primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('AccountTypeID', 'integer', 4, array('unsigned' => 0, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('MSAccessDate', 'timestamp', null, array('primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('Active', 'integer', 1, array('unsigned' => 0, 'primary' => false, 'notnull' => false, 'autoincrement' => false));
    $this->hasColumn('PasswordExpires', 'date', null, array('primary' => false, 'notnull' => false, 'autoincrement' => false));
  }

  public function setUp()
  {
    parent::setUp();
  }

}