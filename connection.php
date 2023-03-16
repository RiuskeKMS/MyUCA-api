<?php

$mysql = new mysqli("localhost","root","","dbuca");

if($mysql->connect_error){
    echo "error";
    die("Connection error");
} else{ 
    echo "sucessful connection";
}

?>