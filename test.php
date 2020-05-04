<?php
use Sabre\DAV\Client;

include './vendor/autoload.php';

$settings = array(
	'baseUri' => 'http://172.16.108.190:8080/',
	'userName' => 'alice',
	'password' => 'alice',
//	'proxy' => 'locahost:8888',
);

$client = new Client($settings);
$response = $client->request('GET');
print_r($response);