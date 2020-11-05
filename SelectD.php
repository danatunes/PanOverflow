<?php

class  SelectD
{
    private $sql;
    private $conn;
    public function __construct($sql,$conn)
    {
        $this->sql = $sql;
        $this->conn =  $conn;
    }
    public function request(){
        $results = mysqli_query($this->conn, $this->sql);

        if ($results === false){
            echo mysqli_error($this->conn);
        }
        else{
            $posts = mysqli_fetch_all($results,MYSQLI_ASSOC);
            return $posts;
        }
    }

}