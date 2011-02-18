<?php
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 */
//include_once $GLOBALS['THRIFT_ROOT'].'/Thrift.php';


$GLOBALS['LiveConnect_E_LiveConnectOp'] = array(
  'opAdd' => 1,
  'opEdit' => 2,
  'opRemove' => 3,
  'opClone' => 4,
  'all' => 255,
);

final class LiveConnect_LiveConnectOp {
  const opAdd = 1;
  const opEdit = 2;
  const opRemove = 3;
  const opClone = 4;
  const all = 255;
  static public $__names = array(
    1 => 'opAdd',
    2 => 'opEdit',
    3 => 'opRemove',
    4 => 'opClone',
    255 => 'all',
  );
}

$GLOBALS['LiveConnect_E_LiveConnectConditionOp'] = array(
  'present' => 1,
  'eq' => 2,
  'lt' => 3,
  'lte' => 4,
  'gt' => 5,
  'gte' => 6,
);

final class LiveConnect_LiveConnectConditionOp {
  const present = 1;
  const eq = 2;
  const lt = 3;
  const lte = 4;
  const gt = 5;
  const gte = 6;
  static public $__names = array(
    1 => 'present',
    2 => 'eq',
    3 => 'lt',
    4 => 'lte',
    5 => 'gt',
    6 => 'gte',
  );
}

class LiveConnect_Condition extends TBase {
  static $_TSPEC;

  public $column = null;
  public $operation = null;
  public $value = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'column',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'operation',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'value',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'Condition';
  }

  public function read($input)
  {
    return $this->_read('Condition', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('Condition', self::$_TSPEC, $output);
  }
}

class LiveConnect_EventDefinition extends TBase {
  static $_TSPEC;

  public $table = null;
  public $operations = null;
  public $columns = null;
  public $conditions = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'table',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'operations',
          'type' => TType::SET,
          'etype' => TType::I32,
          'elem' => array(
            'type' => TType::I32,
            ),
          ),
        3 => array(
          'var' => 'columns',
          'type' => TType::SET,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        4 => array(
          'var' => 'conditions',
          'type' => TType::SET,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => 'LiveConnect_Condition',
            ),
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'EventDefinition';
  }

  public function read($input)
  {
    return $this->_read('EventDefinition', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('EventDefinition', self::$_TSPEC, $output);
  }
}

class LiveConnect_Subscription extends TBase {
  static $_TSPEC;

  public $clientKey = null;
  public $ev = null;
  public $expiry = null;
  public $renewals = null;
  public $eventReceived = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'clientKey',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'ev',
          'type' => TType::STRUCT,
          'class' => 'LiveConnect_EventDefinition',
          ),
        3 => array(
          'var' => 'expiry',
          'type' => TType::I32,
          ),
        4 => array(
          'var' => 'renewals',
          'type' => TType::I32,
          ),
        5 => array(
          'var' => 'eventReceived',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'Subscription';
  }

  public function read($input)
  {
    return $this->_read('Subscription', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('Subscription', self::$_TSPEC, $output);
  }
}

class LiveConnect_ClientInfo extends TBase {
  static $_TSPEC;

  public $clientKey = null;
  public $numEventsRegistered = null;
  public $numEventsTotal = null;
  public $uptime = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'clientKey',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'numEventsRegistered',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'numEventsTotal',
          'type' => TType::I32,
          ),
        4 => array(
          'var' => 'uptime',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'ClientInfo';
  }

  public function read($input)
  {
    return $this->_read('ClientInfo', self::$_TSPEC, $input);
  }
  public function write($output) {
    return $this->_write('ClientInfo', self::$_TSPEC, $output);
  }
}

?>
