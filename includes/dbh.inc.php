<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpProjectLog";

$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if(!$conn)
{
    die("Connection failed: " .mysqli_connect_error());
}

/*create table users(
    usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usersName varchar(128) NOT NULL,
    usersEmail varchar(128) NOT NULL,
    usersUid varchar(128) NOT NULL,
    pwd varchar(128) NOT NULL
    );*/