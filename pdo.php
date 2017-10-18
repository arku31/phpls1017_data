<?php
$dsn = "mysql:host=localhost;dbname=basic;charset=utf8";
$pdo = new PDO($dsn, 'root', '123');
$stmt = $pdo->query('SELECT * FROM users');
$prepare = $pdo->prepare('SELECT * FROM users where id > :id AND id < :id2');
$prepare->execute(['id' => $_GET['id'], 'id2' => 10]);

$json = $prepare->fetchAll(PDO::FETCH_OBJ);
$string = json_encode($json);
$array = json_decode($string);
print_r($array);
die();
echo "<pre>";
print_r();


while ($row = $stmt->fetch())
{
    echo $row['id'].': '.$row['name'] . "<br>";
}