<?php 

// Database connection
Class ConnectDB 
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $chartset;

    public function connect()
    {
        $this->host = "localhost";
        $this->dbname ="blogi";
        $this->username ="root";
        $this->password ="";
        $this->chartset ="utf_8";
    }
}