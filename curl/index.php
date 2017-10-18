<?php
//$url = "https://en.wikipedia.org/w/api.php?action=query&prop=revisions&titles=New_York_Yankees&rvprop=timestamp|user|comment|content&format=json";

$url = "http://tfile.cc/login.php";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);

$useragent = 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0';

curl_setopt($curl, CURLOPT_USERAGENT, $useragent);
curl_setopt($curl, CURLOPT_REFERER, 'https://yandex.ru/');
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, 0);
//TRUE для возврата результата передачи в качестве строки из curl_exec()
// вместо прямого вывода в браузер.

curl_setopt($curl, CURLOPT_POST, 1);

curl_setopt($curl, CURLOPT_POSTFIELDS, "username=value1&password=value2");
//curl_setopt($curl, CURLOPT_POSTFIELDS,
//    http_build_query([
//        'email' => 'asd@asd.ru',
//        'password' => 'password',
//    ])
//);

$result = curl_exec($curl);
curl_close($curl);
echo $result;


//$message = "asdasdasd";
//mail('asd@asd.ru', 'asd', $message);

?>
