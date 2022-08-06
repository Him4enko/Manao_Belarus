<?php

class Database
{
    private $path;
    public function __construct()
    {
        $this->path = './database.json';
    }

    public function get()
    {
        if(file_exists($this->path)) {
            $json_data = file_get_contents($this->path);
            $data = json_decode($json_data, true);
            return $data;
        }
    }

    public function insert($arg)
    {
        if(file_exists($this->path)) {
            $json_data = file_get_contents($this->path);
            $data = json_decode($json_data, true);
            array_push($data['users'], $arg);
            file_put_contents($this->path, json_encode($data));
        }
    }

    public function search($arg)
    {
        if(file_exists($this->path)) {
            $json_data = file_get_contents($this->path);
            $data = json_decode($json_data, true);
            foreach ($data['users'] as $key) {
                if ($key['login'] == $arg) {
                    return True;
                }
            }
        }
    }

    public function id()
    {
        $json_data = file_get_contents($this->path);
        $data = json_decode($json_data, true);
        return count($data['users']);
    }
}