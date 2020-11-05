<?php
require_once('Sout.php');
require_once('link.php');


$link = $conn->connect();

$stmt = $link->prepare("SELECT users.username,recepts.id, recepts.image, recepts.title,recepts.content , recepts.date FROM recepts
INNER JOIN users 
on users.id=recepts.user_id");


$stmt->execute();


Sout::print($stmt->get_result());
?>