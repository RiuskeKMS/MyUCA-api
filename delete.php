<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'connection.php';
        $id = $_POST["id"];
        $my_query = "delete from estudiante where id =".$id;
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'registry deleted sucessful';
        } else { 
            echo 'error';
        }
    } else {
        echo 'unknown error';
    }

?>