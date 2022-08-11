<?php
require_once 'database.php';
class verification
{
    public function email($arg)
    {
        $t = 0;
        $db = new Database();
        $data = $db->get();
            for ($i = 0; $i < count($data['users']); $i++) {
                if($data['users'][$i]['email'] == $arg) {
                   $t++;
                }
            }
            if ($t > 0) {
                return True;
            } else {
                return False;
            }

    }
    public function password($arg)
    {
        if(strlen($arg) >= 6) {
            if(preg_match("/^[A-Za-zА-Яа-я0-9]+$/", $arg)) {
                return True;
            }
        } else {
            return False;
        }
    }
    public function login($arg)
    {
        if(strlen($arg) >= 6) {
            if (!preg_match('/ /', $arg)) {
                return True;
            } else {
                return False;
            }
        }

    }
    public function name($arg)
    {
        if(strlen($arg) >= 2 ) {
            if(preg_match("/^[A-Za-zА-Яа-я]+$/u", $arg)) { // FROM PREG
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