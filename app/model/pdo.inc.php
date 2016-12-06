<?php
    try
    {
        $dns= 'mysql:host=localhost;port=3306;dbname=test';
        $utilisateur= 'root';
        $motDePasse= '';

        $options = array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $connexion = new PDO( $dns, $utilisateur, $motDePasse, $options );
    }
    catch (Exception $e)
    {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
