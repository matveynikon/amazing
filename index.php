<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
require 'vendor/autoload.php';
$client = \Symfony\Component\Panther\Client::createChromeClient();
//use Goutte\Client;
//$client = new Client();
$crawler = $client->request('GET', 'https://www.youtube.com/results?search_query=despacito');
sleep(3);
$client->clickLink('Luis Fonsi - Despacito ft. Daddy Yankee');
?>
</body>
</head>

