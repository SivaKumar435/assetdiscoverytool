<?php

$db = mysqli_connect("remotemysql.com","zNLjhjpuhE","KYTewmTKrz","zNLjhjpuhE");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
