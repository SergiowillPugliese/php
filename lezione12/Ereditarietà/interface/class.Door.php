<?php

require_once('interface.Openable.php');

class Door implements Openable {

  private $_locked = false;
  private $_stato = 'close';


  public function open() {
    if ($this->_stato == 'open') { 
      if($this->_locked) {
        print "Can't open the door.  It's locked.";
      } else {
        $this->_stato = 'open';
        print "creak...<br>";
      }
    } else {
      print "can't open the door, it's already opened!";
    }
  }
 
  public function close() {
    if ($this->_stato == 'close') { 
      print "Slam!!<br>";
    } else {
      print "can't close the door, it's already closed!";
    }
  }


  public function lockDoor() {
    $this->_locked = true;
  }

  public function unlockDoor() {
    $this->_locked = false;
  }


}

?>
