<?php

class verification
{
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
            return True;
        } else {
            return False;
        }
    }
    public function name($arg)
    {
        if(strlen($arg) > 2) {
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