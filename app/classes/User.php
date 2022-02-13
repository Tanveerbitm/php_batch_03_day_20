<?php


namespace App\classes;


class User
{
    protected $name = 'BITM';
    protected $city = 'DHAKA';
    public static $area ='FARMGATE';
    protected function index(){
        echo 'Institute name is '.$this->name.' and city is '.$this->city;
    }
}