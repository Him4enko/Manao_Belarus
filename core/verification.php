<?php

class verification
{
    public function password($arg)
    {
        if(count_chars($arg) >= 6) {
            if(preg_match("/^[a-zа-яё\d][a-zа-яё\d]{1}$/i", $arg)) {
                return True;
            }
        } else {
            return False;
        }
    }
    public function login($arg)
    {
        if(count_chars($arg) >= 6) {
            return True;
        } else {
            return False;
        }
    }
    public function name($arg)
    {
        if(count_chars($arg) >= 2) {
            if(preg_match("[a-z]/i")) {
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