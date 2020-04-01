<?php

namespace App\Mail;

use App\Client;
use App\Db;
use App\Loan;
use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Demand extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data){
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        try {
            $link = Db::getInstance()->connect();

            $client = $link->query ( "SELECT id FROM Client ORDER BY register_date DESC LIMIT 1" );

            $client = $client->fetch();

            if (is_array ( $client )) {
                $id = $client['id'];
                $id++;
            } else {
                $id = 10101;
            }

            $_client = new Client($this->data);
            $_client->setId($id);

            $_loan = new Loan($this->data);
            $_loan->setOder("KAD".$_client->getId());
            $_loan->setClient($_client->getId());

            if ($_client->create() and $_loan->create()) {
                return $this->from('kad-gmbh@kreditangebote-deutsch.com',$this->data['name'].' '.$this->data['surname'])
                    ->to('kad-gmbh@kreditangebote-deutsch.com','kreditangebote-deutsch')
                    ->view('templates.demand',['data'=>$this->data])
                    ->subject('Nouvelle demande de crédit')
                    ->replyTo($this->data['email'],$this->data['name'].' '.$this->data['surname']);
            }
        }catch(PDOException $e){
            die('Erreur : '.$e->getMessage());
        }
    }
}
