<?php
$e = new Update();
$e->editpost();

class Update
{

    function editpost(){


        include_once ('Connection.php');
        $conn = new Connection();
        $conn = $conn->getConnection();

        if (isset($_REQUEST['update'])) {

            require 'editproduct.html';
            $sql = "UPDATE products 
                    SET name ='".$_REQUEST['name']."',
                        content = '".$_REQUEST['content']."',
                        price = '".$_REQUEST['price']."',
                         image = '".$_REQUEST['image']."'
                         where id = '".$_REQUEST['id']."'";

            $results = mysqli_query($conn,$sql);

            if ($results === false) {
                echo mysqli_error($conn);
            }
            else {
                echo 'Allah Akbar';

            }
        }

        else {
            require('editproduct.html');
        }


    }

}
