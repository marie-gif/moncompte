<?php

class Database
{
    //Nos constantes
    const DB_HOST = 'mysql:host=localhost;dbname=revision;charset=utf8';
    const DB_USER = 'root';
    const DB_PASS = '';

    //Méthode de connexion à notre base de données
    public function getCo()
    {
        //Tentative de connexion à la base de données
        try{
            $co = new PDO(self::DB_HOST, self::DB_USER, self::DB_PASS);
            $co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //On renvoie un message avec le mot-clé return
            return $co;
        }
        //On lève une erreur si la connexion échoue
        catch(Exception $errorCo)
        {
            die ('Erreur de connection :'.$errorCo->getMessage());
        }

    }
}