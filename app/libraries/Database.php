<?php
/*
[  author ] ;- Muhammed alaraby
[  Date   ] ;- 5/12/19
[  Info   ] ;- Handle database operations
*/
?>

<!------------------------------------------------------------->

<?php

class Database{
    protected $db_host = 'localhost';
    protected $db_user = 'root';
    protected $db_password = '';
    protected $db_name = 'cms';

    public function __construct(){
        $this->databaseConnection();
    }

    //[ databaseConnection ] ;- Handle the connection to the database
    private function databaseConnection(){

        // Convert database variables into constants
        $db['db_host'] = $this->db_host;
        $db['db_user'] = $this->db_user;
        $db['db_pass'] = $this->db_password;
        $db['db_name'] = $this->db_name;

        foreach($db as $key => $value){
            define(strtoupper($key), $value);
        }


        $link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        ///configuresthe connection
        if (!$link) {
            die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
        }
        $link->close();
    }

    
}

$database = new Database();
?>