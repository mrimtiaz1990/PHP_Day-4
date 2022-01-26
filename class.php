<?php
class Students
{
    public $id;
    public $name;
    public $email;
    public $cell;
    public $address;

    public function ShowStudents()
    {
        echo "ID is: {$this->id} <br>";
        echo "Name is: {$this->name} <br>";
        echo "Email is: {$this->email} <br>";
        echo "Cell is: {$this->cell} <br>";
        echo "Address is: {$this->address} <br><br>";
    }
}

$stdOne = new Students();
$stdOne->id = 1;
$stdOne->name = "Mr-X";
$stdOne->email = "x@gmail.com";
$stdOne->cell = 123456;
$stdOne->address = "Halishahar, CTG";
$stdOne->ShowStudents();

$stdTwo = new Students();
$stdTwo->id = 2;
$stdTwo->name = "Mr-y";
$stdTwo->email = "y@gmail.com";
$stdTwo->cell = 123456;
$stdTwo->address = "Halishahar, CTG";
$stdTwo->ShowStudents();

$stdThree = new Students();
$stdThree->id = 3;
$stdThree->name = "Mr-z";
$stdThree->email = "z@gmail.com";
$stdThree->cell = 234567;
$stdThree->address = "Nasirabad, CTG";
$stdThree->ShowStudents();

$stdFour = new Students();
$stdFour->id = 4;
$stdFour->name = "Mr-A";
$stdFour->email = "a@gmail.com";
$stdFour->cell = 345678;
$stdFour->address = "Agrabad, CTG";
$stdFour->ShowStudents();

?>