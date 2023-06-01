<?php
class Database
{
    private $db_name = 'opps';
    private $db_username = 'root';
    private $db_password = '';

    // private $db_name = 'tstarghserver_egsssupport';
    // private $db_username = 'tstarghserver_egsssupport';
    // private $db_password = 'tstarghserver_egsssupport';
    
    private $db_host = 'localhost';
    public $url = "http://localhost/eglobal-support/";
    // public $url = "https://thetestingserver.com/eglobal-support/";
    protected $conn;

    function __construct()
    {
        $this->conn = new mysqli($this->db_host, $this->db_username, $this->db_password, $this->db_name);
    }
    public function getConnection()
    {
        return $this->conn;
    }
}