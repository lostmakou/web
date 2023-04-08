<?php
$stmt = $mysqli->prepare("SELECT * FROM list ORDER BY BottomData DESC LIMIT $from, $n");
$stmt->execute();
$article=array();
$res=$stmt->get_result();
while($row=$res->fetch_assoc())
    $article[]=$row;
?>