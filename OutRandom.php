<?php
require_once('link.php');


$id = rand(1, 4);
$link = $conn->connect();

$stmt = $link->prepare("SELECT users.username,recepts.id, recepts.image, recepts.title,recepts.content , recepts.date FROM recepts
INNER JOIN users 
on users.id=recepts.user_id
WHERE id=$id");


$stmt->execute();

Sout::print($stmt->get_result());
