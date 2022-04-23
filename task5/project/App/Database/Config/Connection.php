<?php
namespace App\Database\Config;
use mysqli;
class Connection {
    protected string $dbhostname = 'localhost';
    protected string $dbusername = 'root';
    protected string $dbpassword = '';
    protected string $dbdatabase = 'ecomerce';
    protected int    $dbport = 3306;
    public  mysqli $con;
    public function __construct() {
        $this->con = new mysqli($this->dbhostname , $this->dbusername, $this->dbpassword , $this->dbdatabase , $this->dbport);
    }

    public function __destruct () {
        $this->con->close();
    }
}