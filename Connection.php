
<?php

class Connection{
    private $host;
    private $user;
    private $pass;
    private $db_name;
    private $conn;

    function  __construct1(){

    }
    function __construct($user,$pass)
    {
        $this->host = 'localhost';
        $this->user = $user;
        $this->pass = $pass;
        $this->db_name = 'practice4-2';
        $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db_name);
    }

    function connect(){

        $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db_name);
        if (!mysqli_connect_error()) {

            require('main3.php');


        }
        else {
            echo "ERROR connect";
            echo mysqli_connect_error();

        }

    }

    function getConnection(){
        return  $this->conn;
    }

}
?>
