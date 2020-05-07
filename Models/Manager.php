<?php


namespace CESI\ConnectLife;


class Manager
{
    protected $db;

    public function __construct()
    {
        $this->db = new \PDO('mysql:host=localhost;dbname=ConnectLife;charset=UTF8','root');
    }
}