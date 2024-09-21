<?php

class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $database = 'resumebuider';
    private $password = 'localhost';

function _construct(){
  return new mysqli($host,$this->username,$this->password,$this->database);
}
}

$db = new Database();

