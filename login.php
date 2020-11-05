<?php


header('Content-Type: application/json');

if (isset($_POST['submit'])) {

    $username = $_POST["inputUsername"];
    $pass = $_POST["inputPassword"];

    require_once "link.php";
    $link = $conn->connect();

    $stmt = $link->prepare("SELECT name,username,email,work FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $pass);

    $stmt->execute();

    $result = $stmt->get_result();

    $rows = $result->fetch_assoc();


    session_start();
    if ($rows[0][1] == $username) {
        if ($rows[0][2] == $password) {
            if ($rows[0][3]) {

                $_SESSION['username'] = 'moderator';
                $_SESSION['password'] = 'MyPa$$word123';
                $_SESSION['admin'] = true;
            } else {
                $_SESSION['username'] = 'user';
                $_SESSION['password'] = 'Qwerty123';
                $_SESSION['admin'] = false;
            }

            $_SESSION['name'] = $username;


            header("Location:main3.php");
            exit;
        } else {
            header("Location:login.php");
            exit;
        }
    } else {
        header("Location:login.php");
        exit;
    }
}

?>