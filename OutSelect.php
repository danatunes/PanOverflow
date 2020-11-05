<?php
require_once ('Sout.php');
require_once('link.php');


$link = $conn->connect();

$stmt = $link->prepare("SELECT users.username, products.image, products.title,products.content , products.date FROM products
INNER JOIN users 
on users.id=products.user_id");


$stmt->execute();

require_once('Sout.php');
Sout::print($stmt->get_result());
?>