<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>

    </style>
</head>
<body>

<?php
$check = new Checker();
if ($_POST['moderator'] === 'true'){
    $check->checkModer();
}
else{
    $check->checkUser();
}
class Checker {
    private $db_host;
    private $db_name;
    private $db_moder;
    private $db_passM;
    private $db_passU;
    private $db_user;

    function __construct()
    {   $this->db_host = 'localhost';
        $this->db_name ='practice4-1';
        $this->db_moder = 'moderator';
        $this->db_passM = 'MyPa$$word123';
        $this->db_user = 'user';
        $this->db_passU = 'Qwerty123';
    }
    function checkModer(){
        if ($_POST['name'] === $this->db_moder && $_POST['password'] === $this->db_passM){
            if (!mysqli_connect_error()){
                include_once("Connection.php");
                $host = new Connection($this->db_moder,$this->db_passM);
                $host->connect();
            }
        }else{
            echo "Incorrect date";
            require ('signIN.html');

        }
    }
    function checkUser(){
        if ($_POST['name'] === $this->db_user && $_POST['password'] === $this->db_passU){
            if (!mysqli_connect_error()){

                $host = new Connection($this->db_user,$this->db_passU);
                $host->connect();
            }
        }else{
            echo "Incorrect date";
            require('signIN.html');
        }
    }

}
"</body>";
"</html>";