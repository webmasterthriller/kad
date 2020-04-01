<?php

namespace App;

class Client{
    private $id;
    private $gender;
    private $name;
    private $surname;
    private $address;
    private $post_code;
    private $city;
    private $country;
    private $telephone;
    private $email;
    private $register_date;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPostCode()
    {
        return $this->post_code;
    }

    /**
     * @param mixed $post_code
     */
    public function setPostCode($post_code): void
    {
        $this->post_code = $post_code;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getRegisterDate()
    {
        return $this->register_date;
    }

    /**
     * @param mixed $register_date
     */
    public function setRegisterDate($register_date): void
    {
        $this->register_date = $register_date;
    }

    public function __construct($data){
        $this->setGender($data['gender']);
        $this->setName($data['name']);
        $this->setSurname($data['surname']);
        $this->setAddress($data['address']);
        $this->setPostCode($data['post_code']);
        $this->setCity($data['city']);
        $this->setCountry($data['country']);
        $this->setTelephone($data['phone']);
        $this->setEmail($data['email']);
    }

    /**
     *
     * @param void
     * @return boolean
     */
    public function create(){
        try {
            $link = Db::getInstance()->connect();

            $query = "INSERT INTO Client VALUES('".$this->getId()."','".$this->getGender()."','".$this->getName()."','".$this->getSurname()."','".$this->getAddress()."','".$this->getPostCode()."','".$this->getCity()."','".$this->getCountry()."','".$this->getTelephone()."','".$this->getEmail()."',CURRENT_TIMESTAMP)";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur création de demande: ".$e->getMessage());
        }
    }

    /**
     * @param string
     * @return string
     */
    public static function read($client){
        try {
            $link = Db::getInstance()->connect();

            $query = "SELECT * From Client WHERE id=$client";

            $exec = $link->query($query);

            $fetch = $exec->fetchAll();

            if(empty($fetch)){
                return "not found";
            }else{
                return json_encode($fetch);
            }
        } catch (PDOException $e) {
            die("Erreur lecture de demande: ".$e->getMessage());
        }
    }

    /**
     * @param void
     * @return boolean
     */
    public static function activate($demande_id):bool {
        try {
            $link = Db::getInstance()->connect();

            $query = "UPDATE Demande SET 'dmd_statut'=TRUE WHERE dmd_id=$demande_id";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur activation de demande: ".$e->getMessage());
        }
    }

    /**
     *
     * @param string
     * @return boolean
     */
    public static function archive($demande_id){
        try {
            $link = Db::getInstance()->connect();

            $query = "UPDATE Demand SET 'dmd_statut'=FALSE WHERE dmd_id=$demande_id";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur archivage de demande: ".$e->getMessage());
        }
    }

    /**
     *
     * @param string
     * @return boolean
     */
    public static function delete($demande_id){
        try {
            $link = Db::getInstance()->connect();

            $query = "DELETE FROM Demand WHERE dmd_id=$demande_id";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur suppression de demande: ".$e->getMessage());
        }
    }

    /**
     * @param void
     * @return string
     */
    public static function list(){
        try {
            $link = Db::getInstance()->connect();

            $query = "SELECT * From Demande";

            $exec = $link->query($query);

            $fetch = $exec->fetchAll();

            if(empty($fetch)){
                return "not found";
            }else{
                return json_encode($fetch);
            }
        } catch (PDOException $e) {
            die("Erreur lecture liste des demandes: ".$e->getMessage());
        }
    }
}
