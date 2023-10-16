<?php

session_start();

require "vendor/autoload.php";


use myPHPnotes\Microsoft\Auth;

$tenant = "common";
$client_id = "dc74008c-639a-40e9-a358-057b2cc557d7";
$client_secret = "F0H8Q~7D1k6NeAyNTAhhJDDvSv9qykaR2VWe7bkv";
$callback = "http://localhost:8080/PruebaLogin/index.html";
$scopes = ["User.Read"];

$microsoft = new Auth($tenant, $client_id, $client_secret, $callback, $scopes);

header("location: " . $microsoft->getAuthUrl());

?>