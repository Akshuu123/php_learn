<?php
namespace Userinfor; //this File is used for user information

class Person{
    public $name;
    public $age;
    public $work;
    public $joiningmonth;
    public function __construct($name,$age,$work,$joiningmonth){
        $this->name = $name;
        $this->age = $age;
        $this->work = $work;
        $this->joiningmonth = $joiningmonth;
    }
    public function getname(){
        return "Name of person is ".$this->name;
    }
    public function setname($name){
        return $this->name = $name;
    }
    public function getage(){
        return "the age of person is ".$this->age;
    }
    // create method previouse method use krke
    public function userfulldetail(){
        return $this->getname() ." and ". $this->getage() . " and the profession of person is " . $this->work ." developer and the month of joining is ". $this->joiningmonth;
    }
}

$user1=new Person('akshay',27,'wordpress','january');
// print_r($user1->getname()."\n");

// print_r($user1->userfulldetail());

$user2=new Person('akshay',27,'developer','April');
// print_r($user2->getname());
$userrr=$user2->setname('vikas');

print_r($user2);
$objectt=get_object_vars($user2);
$imp_arr=implode('_',$objectt);
$exp_arr=explode('_',$imp_arr);
$arr_val=array_values($exp_arr);

/**use of ternary operator */
$userrr == $exp_arr ? print_r('ys'):print_r('no');
