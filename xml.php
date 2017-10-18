<?php
$file = file_get_contents('example.xml');
$xml =new SimpleXMLElement($file);
echo "<pre>";
print_r((string)$xml->to);
die();