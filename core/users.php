<?php

abstract class Users
{
    abstract function login($data);
    abstract function register($data);
}