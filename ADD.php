<?php
session_start();
require_once('link.php');

$image = $_GET["image"];
$title = $_GET['title'];
$content = $_GET['content'];
$author = $_SESSION['user_id'];
$date = date("Y-m-d");


$link = $conn->connect();

$stmt = $link->prepare("INSERT INTO products (image,title,content,user_id,date) VALUES(?,?,?,?,?)");

$stmt->bind_param('sssss', $image, $title, $content,$author,$date);


if ($stmt->execute()) {
    echo "HELLOOOO ";
} else {
    echo "Not Saved";
}
