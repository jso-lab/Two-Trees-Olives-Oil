<?php
    function db() {
        $connexion = null;
        $host = 'clwxydcjair55xn0.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
        $db_name = 'ikeqeo8swliybja6';
        $username = 'a84h6arzwszj1xuo';
        $password = 'bhtbonpcp0lz0j60';
        try{
            $connexion = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
            $connexion->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $connexion;
    }
?>