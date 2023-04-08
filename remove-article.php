<?php
include("connect-with-bd.php");

$stmt = $mysqli->prepare("SELECT CardPicture FROM list WHERE id = ?");
$stmt->bind_param("i", $id);
$id = $_POST['id'];
$stmt->execute();
$result = $stmt->get_result();
$article=array();
$article=$result->fetch_assoc();
$head_folder = ".pics/" . $article['CardPicture'];
if (file_exists($head_folder))
    unlink($head_folder);

$stmt = $mysqli->prepare("SELECT MainPicture FROM list WHERE id = ?");
$stmt->bind_param("i", $id);
$id = $_POST['id'];
$stmt->execute();
$result = $stmt->get_result();
$article=array();
$article=$result->fetch_assoc();
$main_folder = ".pics/" . $article['FullPicture'];
if (file_exists($main_folder))
    unlink($main_folder);

$stmt = $mysqli->prepare("DELETE FROM list WHERE ID = ?");
$stmt->bind_param("i", $id);
$id = $_POST['id'];
$stmt->execute();
header('Location: '."./index.php");
?>