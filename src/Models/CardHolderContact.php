<?php

namespace Hafael\Fitbank\Models;

class CardHolderContact
{

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $mail;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['phone'])) {
            $this->phone($data['phone']);
        }
        if(isset($data['mail'])) {
            $this->mail($data['mail']);
        }
    }

    /**
     * @param string $phone
     */
    public function phone(string $phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param string $mail
     */
    public function mail(string $mail)
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'Phone' => $this->phone,
            'Mail'  => $this->mail,
        ], function($value) {
            return !is_null($value);
        });
    }

    


}