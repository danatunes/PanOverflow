<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style media="screen">
        table {
            margin:350px auto;
            height:auto;
            width:auto;
            border:1px solid black;
            border-radius:15px;
            background-color:#ec8011;
        }
        td {
            text-align:center;
        }
    </style>
</head>
<body>

<form action="AddUser.php" method="post">
    <table>
        <tr>
            <td><input type="text" id="name" name="name" placeholder="Username"></td>
        </tr>

        <tr>
            <td><input type="text" id="password" name="password" placeholder="Password"></td>
        </tr>

        <tr>
            <td> <button name = "submit">sign in</button></td>
        </tr>
    </table>
</form>


<?php
include_once('Connection.php');
$conn = new Connection('guest','guest');
$conn = $conn->getConnection();


if (isset($_POST['submit'])) {
    $sql = "INSERT INTO users(username,password,admin)
                    VALUES('" . $_POST['name'] . "',
                    '" . $_POST['password'] . "',
                    '" . 0 . "')";

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        echo mysqli_error($conn);
    }
    else{
        require ('login.php');
    }

}
?>
</body>
</html>