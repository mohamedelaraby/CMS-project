<?php
/*
[  author ] ;- Muhammed alaraby
[  Date   ] ;- 5/12/19
[  Info   ] ;- Handle database operations
*/
?>

<!------------------------------------------------------------->

<?php

class Database
{
    protected $host = 'localhost';
    protected $db_user = 'root';
    protected $db_password = '';
    protected $db_name = 'loginapp';

    public function __construct()
    {
        $this->databaseConnection();
    }

    //[ databaseConnection ] ;- Handle the connection to the database
    private function databaseConnection()
    {
        $link = mysqli_connect($this->host, $this->db_user, $this->db_password, $this->db_name);

        ///configuresthe connection
        if (!$link) {
            die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
        }
        $link->close();
    }
}

$database = new Database();
?>