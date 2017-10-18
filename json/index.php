<?php
header('Content-Type: text/html; charset=utf-8');

echo '<a href="?action=encode">Encode</a> ';
echo '<a href="?action=decode">Decode</a><br/><br/>';

if (empty($_GET['action'])) {
    die('no action');
}
$action = $_GET['action'];

switch ($action) {
    default:
        $data = array(
            "countries" => array(
                array("title" => "Россия"),
                array("title" => "США"),
                array("title" => "Испания"),
                array("title" => "Австралия"),
            )
        );

        $jsonString = json_encode($data);
        file_put_contents('1.json', $jsonString);
        echo $jsonString;
        break;
    case 'decode':
        $jsonPath = './1.json';
        $jsonFile = file_get_contents($jsonPath);
//        echo $jsonFile;
//        die();
        $jsonArray = json_decode($jsonFile, true);
        echo '<pre>';
        print_r($jsonArray);
//        $countries = $jsonArray['response']['items'];
        //$countries = $jsonArray->response->items;
        foreach ($jsonArray['countries'] as $country) {
            echo $country['title'] . '<br/>';
        }
        break;
}

