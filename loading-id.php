<?php
$stmt = $mysqli->prepare("SELECT * FROM list WHERE ID = ?");
$stmt->bind_param("i", $id);
$id = $_GET['id'];
$stmt->execute();
$res=$stmt->get_result();
$oneNews=$res->fetch_assoc()
?>