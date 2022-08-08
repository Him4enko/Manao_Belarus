<?php
require_once 'database.php';
class verification
{
    public function space($arg)
    {
        for ( $i = 0; $i < strlen($arg); $i++ ) {
            if($arg[$i] == " ") {
                return False;
                break;
            } else {
                return True;
            }
        }
    }
    public function email($arg)
    {
        $db = new Database();
        $data = $db->get();
        if(preg_match("/^.+@.+\..+$/", $arg)) {
            for ($i = 0; $i < count($data['users']); $i++) {
                if($data['users'][$i]['email'] == $arg) {
                    return True;
                } else {
                    return False;
                }
            }
        }

    }
    public function password($arg)
    {
        if(strlen($arg) >= 6 && $this->space($arg)) {
            if(preg_match("/^[A-Za-zА-Яа-я0-9]+$/", $arg)) {
                return True;
            }
        } else {
            return False;
        }
    }
    public function login($arg)
    {
        if(strlen($arg) >= 6 && $this->space($arg)) {
            return True;
        } else {
            return False;
        }
    }
    public function name($arg)
    {
        if(strlen($arg) > 2 && $this->space($arg)) {
            if(preg_match("/^[A-Za-zА-Яа-я]+$/u", $arg)) {
                return True;
            } else {
                return False;
            }
        }
    }
    public  function verpass ($arg1, $arg2)
    {
        if($arg1 == $arg2) {
            return True;
        } else {
            return False;
        }
    }
}