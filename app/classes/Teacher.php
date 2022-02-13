<?php


namespace App\classes;


abstract class Teacher
{
    protected $name = 'BITM';
    protected $city = 'DHAKA';

    public function add(){
        echo $this->name + $this->city;
    }

}