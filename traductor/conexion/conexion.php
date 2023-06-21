<?php
    try{
        $conexion=new PDO('mysql: host=localhost; dbname=traductor','root','root');
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
?>