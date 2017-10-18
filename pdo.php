<?php
$dsn = "mysql:host=localhost;dbname=basic;charset=utf8";
$pdo = new PDO($dsn, 'root', '123');
$stmt = $pdo->query('SELECT * FROM users');
$prepare = $pdo->prepare('SELECT * FROM users where id > :id');
$prepare->execute(['id' => $_GET['id']]);
echo "<pre>";
print_r($prepare->fetchAll(PDO::FETCH_OBJ));


//while ($row = $stmt->fetch())
//{
//    echo $row['id'].': '.$row['name'] . "<br>";
//}