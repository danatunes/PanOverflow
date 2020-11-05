<!DOCTYPE html>

<?php
class printA
{
    private $conn;
    private $user;
    function __construct($conn,$user){
        $this->user = $user;
        $this->conn = $conn;
    }

    function printA()
    {
        $sql1 = "SELECT * from products
where id=1; ";
        $sql2 = "SELECT * from products
where id=2; ";
        $sql3 = "SELECT * from products
where id=3; ";
        $sql4 = "SELECT * from products
where id=4; ";
        $sql5 = "SELECT * from products
where id=5; ";
        $sql6 = "SELECT * from products
where id=6; ";
        $a = array($sql1,$sql2,$sql3,$sql4,$sql5,$sql6);

        echo "<div style='display: block ;width: 100%; border-radius: 15px;'>";
        echo "<h1 style='text-align: center'>Welcome to FlyToMoon Shop!!!</h1>";

            for ($i = 0; $i < 5; $i++) {

            include_once("SelectD.php");
            $sql = new SelectD($a[$i], $this->conn);
            $sql = $sql->request();


            echo "<div  style=' display: flex ;  flex-direction: row; margin: 15px;'>";
            print "<table style=\"color:black; height:100%; font-size: 20px\">";

            echo '<img src="'.$sql[0]['image'].'"  height="142px" width="142px">';
            print '<tr><td>№:</td><td>'.$sql[0]['id'].'</td></tr> <br>';
            print '<tr><td>Product:</td><td> '.$sql[0]['name'].'</td></tr> <br>';
            print '<tr><td>Specifications:</td><td> '.$sql[0]['content'].'</td></tr> <br>';
            print '<tr><td>Price:</td><td>'.$sql[0]['price'].'</td></tr> <br>';
            print "</table>";
            echo "</div>";
            if ($this->user == 'moderator'){
                echo "<a href='editproduct.html'><input type='submit' value=editpost></a>";
            }

            echo "<hr>";

        }



    }

}

?>
</html>;
