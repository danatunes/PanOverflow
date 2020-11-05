<?php

session_start();
$image = $_GET['image'];
$title = $_GET['title'];
$content = $_GET['content'];
$date = date("Y - M - D");
$author = $_SESSION['user_id'];

include_once('link.php');

$link = $conn->connect();

$stmt = $link->prepare("INSERT INTO recepts (image,title,content,user_id,date) VALUES(?,?,?,?,?)");

$stmt->bind_param('sssss', $image, $title, $content, $author, $date);


if (!$stmt->execute()) {
    echo "Not Saved";
}else{
    echo "succes";
}


