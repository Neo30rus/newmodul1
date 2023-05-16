<?php

class User
{
    public $organization = sberbank;
    public $adress = 'elm street';
    public $tinsberbank = '7707083893';

    public function cryptPassword()
    {
        $this->organization = $this->adress . ' crypt';
    }
     public function  self_dump($thissberbank){
        var_dump($this);
     }
}


$sber = new User();
$sber->organization = 'sberbank';
$sber->password = 'elm street 1';
$sber->tinsberbank = '7707083893';

$sber1 = new User();
$sber1->organization = newbank;
$sber1->adress = ELMSTREET;
$sber1 ->();

$sber1 -> self_dump(7707083893);
$sber->self_dump(7707083893);
