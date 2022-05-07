<?php
    function db() {
        $connexion = null;
        $host = '	clwxydcjair55xn0.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
        $db_name = 'ivk1vpns5qho1kcg';
        $username = 'p7037fxtkvft3hzf';
        $password = 'u07yic6hx8ud3ujt';
        try{
            $connexion = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
            $connexion->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $connexion;
    }
?>