<?php
$mysqli = new mysqli("localhost", "root", "123", "basic");
if (mysqli_connect_errno()) {
    printf("Ошибка соединения: %s\n", mysqli_connect_error());
    exit();
}
$sql = "INSERT INTO users (name, age) VALUES ('1111', 25)";
//$sql = "select * from users";
$result = $mysqli->query($sql);

if ($result->num_rows) {
    $data=$result->fetch_all();
    echo "<pre>";
    print_r($data);
    die();
} else {
    echo "Был запрос без данных";
}
