<?php 
class Person{
    public $name ='no name';
    protected $money = 20;
    private $age = 30;

    function getName(){
        return $this -> name;
    }
    function getMoney(){
        return $this -> money;
    }
    function getAge(){
        return $this -> age;
    }
    function setMoney(){
        $this-> money = $number;
    }
    function getInfo(){
        return 'Ban '.$this->name.' có tống số tiền là '.this->getMoney().' tỉ';
    }
}

 $p = new Person;

// $p-> name ='Nam';
// echo 'Ban '.$p-> name.' co tong tien la '.$p-> getMoney().' ';
// echo $p->getName();
// echo $p-> getMoney();



?>