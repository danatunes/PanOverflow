<?php
require_once('Sout.php');
require_once('link.php');


$link = $conn->connect();

$stmt = $link->prepare("SELECT users.username,questions.id, questions.image, questions.title,questions.content , questions.date FROM questions
INNER JOIN users 
on users.id=questions.user_id");


$stmt->execute();


Sout::print($stmt->get_result());
?>