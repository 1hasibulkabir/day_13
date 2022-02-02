<?php


namespace App\classes;


class User
{
    protected $user = [];

    public function getAllUser(){
        $this->user=[
            0=>[
                'name' => 'Hasib',
                'mobile' => '123456',
                'location' => 'Pirojpur',
            ],
            0=>[
                'name' => 'zaid',
                'mobile' => '223456',
                'location' => 'Pirojpur',
            ],
        ];
        return $this->user;
    }

}