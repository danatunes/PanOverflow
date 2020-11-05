<?php
session_start();
$username="";
$password="";


if(isset($_POST['submit'])) {

    $username = $_POST['name'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM users WHERE username = '" . $username . "'";

    $conn = new mysqli("localhost","guest","guest","task1");

    $result = mysqli_query($conn,$sql);

    $rows = mysqli_fetch_all($result);


    if($rows[0][1] == $username)
    {
        if($rows[0][2] == $password) {
            if($rows[0][3]) {
                $_SESSION['username'] = 'admin';
                $_SESSION['password'] = 'host';
                $_SESSION['admin'] = true;
            }
            else {
                $_SESSION['username'] = 'user';
                $_SESSION['password'] = 'user';
                $_SESSION['admin'] = false;
            }

            $_SESSION['name'] = $username;


            header("Location:task1_menu.php");
            exit;
        }
        else {
            header("Location:task1_mainmenu.php");
            exit;
        }
    }
    else {
        header("Location:task1_mainmenu.php");
        exit;
    }


    /*
    $_SESSION['username'] = 'admin';
    $_SESSION['password'] = 'host';
    $_SESSION['admin'] = true;

    header("Location: task1_menu.php");
    */
}
?>