<?php

namespace App;

class Loan
{
    private $oder;
    private $client;
    private $type;
    private $amount;
    private $rate;
    private $duration;
    private $payment;
    private $payments;
    private $gain;
    private $visa;
    private $visa_date;

    /**
     * @return mixed
     */
    public function getOder()
    {
        return $this->oder;
    }

    /**
     * @param mixed $oder
     */
    public function setOder($oder): void
    {
        $this->oder = $oder;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client): void
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param mixed $rate
     */
    public function setRate($rate): void
    {
        $this->rate = $rate;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param mixed $payment
     */
    public function setPayment($payment): void
    {
        $this->payment = $payment;
    }

    /**
     * @return mixed
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @param mixed $payment
     */
    public function setPayments($payments): void
    {
        $this->payments = $payments;
    }

    /**
     * @return mixed
     */
    public function getGain()
    {
        return $this->gain;
    }

    /**
     * @param mixed $payment
     */
    public function setGain($gain): void
    {
        $this->gain = $gain;
    }

    /**
     * @return mixed
     */
    public function getVisa()
    {
        return $this->visa;
    }

    /**
     * @param mixed $visa
     */
    public function setVisa($visa): void
    {
        $this->visa = $visa;
    }

    /**
     * @return mixed
     */
    public function getVisaDate()
    {
        return $this->visa_date;
    }

    /**
     * @param mixed $visa_date
     */
    public function setVisaDate($visa_date): void
    {
        $this->visa_date = $visa_date;
    }

    /**
     * Loan constructor.
     * @param $data
     */
    public function __construct($data){
        $this->setType($data['type']);
        $this->setAmount($data['amount']);
        $this->setRate($data['rate']);
        $this->setDuration($data['duration']);
        $this->setPayment($data['payment']);
        $this->setPayments($data['payments']);
        $this->setGain($data['rates']);
        $this->setVisa(false);
    }

    /**
     *
     * @param void
     * @return boolean
     */
    public function create(){
        try {
            $link = Db::getInstance()->connect();

            $query = "INSERT INTO Loan VALUES('".$this->getOder()."','".$this->getClient()."','".$this->getType()."','".$this->getAmount()."','".$this->getRate()."','".$this->getDuration()."','".$this->getPayment()."','".$this->getPayments()."','".$this->getGain()."','".$this->getVisa()."',CURRENT_TIMESTAMP)";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur création de contrat: ".$e->getMessage());
        }
    }

    /**
     * @param string
     * @return boolean
     */
    public function approve($loan_oder){
        try {
            $link = Db::getInstance()->connect();

            $query = "UPDATE Contrat SET 'visa'=TRUE, 'visa_date'=current_date WHERE oder=$loan_oder";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur approbation du contrat: ".$e->getMessage());
        }
    }

    /**
     * @param string
     * @return string
     */
    public function read($loan_oder){
        try {
            $link = Db::getInstance()->connect();

            $query = "SELECT * From Contrat WHERE oder=$loan_oder";

            $exec = $link->query($query);

            $fetch = $exec->fetchAll();

            if(empty($fetch)){
                return "not found";
            }else{
                return json_encode($fetch);
            }
        } catch (PDOException $e) {
            die("Erreur lecture du contrat: ".$e->getMessage());
        }
    }

    /**
     *
     * @param string
     * @return boolean
     */
    public function cancel($contrat_id){
        try {
            $link = Db::getInstance()->connect();

            $query = "UPDATE Contrat SET 'contrat_visa'=FALSE WHERE contrat_id=$contrat_id";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur annulation du contrat: ".$e->getMessage());
        }
    }

    /**
     *
     * @param string
     * @return boolean
     */
    public function delete($contrat_id){
        try {
            $link = Db::getInstance()->connect();

            $query = "DELETE FROM Contrat WHERE contrat_id=$contrat_id";

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
    public function list(){
        try {
            $link = Db::getInstance()->connect();

            $query = "SELECT * From Contrat";

            $exec = $link->query($query);

            $fetch = $exec->fetchAll();

            if(empty($fetch)){
                return "not found";
            }else{
                return json_encode($fetch);
            }
        } catch (PDOException $e) {
            die("Erreur lecture liste de contrat: ".$e->getMessage());
        }
    }
}
