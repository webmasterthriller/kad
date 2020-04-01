<?php

namespace App;

use PDO;

use PDOException;

class Db{
    /**
     * @var Db
     * @access private
     * @static
     */
    private static $dBinstance = null;

    private $hostname;
    private $dbname;
    private $username;
    private $password;
    private $charset;

    /**
     * Constructeur de la classe
     *
     * @param void
     * @return void
     */
    private function __construct(){
        $this->hostname = "91.216.107.162";
        $this->dbname = "kredi856964";
        $this->username = "kredi856964";
        $this->password = "gr4zwnpfql";
        $this->charset = "utf8mb4";
    }

    public function connect(){
        try{
            $dns = "mysql:host=".$this->hostname.";dbname=".$this->dbname.";charset=".$this->charset;
            $link = new PDO($dns,$this->username,$this->password);
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $link;
        }catch (PDOException $e) {
            die("Erreur connection: ".$e->getMessage());
        }
    }

    /**
     * Méthode qui crée l'unique instance de la classe
     * si elle n'existe pas encore puis la retourne.
     *
     * @param void
     * @return Db
     */
    public static function getInstance(){
        if(is_null(self::$dBinstance)){
            $dBinstance = new Db;
        }
        return $dBinstance;
    }

    function __destruct(){
        self::$dBinstance = null;
    }
}
?>
