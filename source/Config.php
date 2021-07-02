
<?php

define("SITE",[
"name"=>"Matics² | ",
"desc"=>"desc qualquer",
"domain"=>"",
"locale"=>"pt_BR",
"root"=>"http://200.193.217.229:888/matics2/",

]);

define("VIEWSPATH", dirname(__DIR__, 1)."/views/themes",); 

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "matics2",
    "username" => "root",
    "passwd" => "Banana123432",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
