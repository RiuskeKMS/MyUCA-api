<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    require_once('../connection.php');
    $my_query = 'select * from estudiante';

    require_once('generical_return.php');

    $result->close();
    $mysql->close();
}

?>