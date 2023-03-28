<?php 

namespace App\Model;

class About{

    private $name;
    private $address;
    private $mail;
    private $phone;

    public function __construct()
    {
        
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

}