<?php
    function db() {
        $connexion = null;
        $host = 'localhost';
        $db_name = 'ecomerce';
        $username = 'root';
        $password = '';
        try{
            $connexion = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
            $connexion->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Impossible de se connecter. Erreur: " . $exception->getMessage();
        }

        return $connexion;
    }
?>