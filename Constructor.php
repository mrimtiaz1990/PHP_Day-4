<?php
class allStudents{
    public $id;
    public $name;
    public $email;
    public $cell;
    public $address;
    
    public function __construct($myId, $myName, $myEmail, $myCell, $myAddress,)
    {
        $this->id = $myId;
        $this->name = $myName;
        $this->email = $myEmail;
        $this->cell = $myCell;
        $this->address = $myAddress;
    }

    public function ShowStudents()
    {
        echo "ID is: {$this->id} <br>";
        echo "Name is: {$this->name} <br>";
        echo "Email is: {$this->email} <br>";
        echo "Cell is: {$this->cell} <br>";
        echo "Address is: {$this->address} <br><br>";
    }
}


$stdOne = new allStudents(1, "Mr-A", "a@gmail.com", 123, "Agrabad, CTG");
$stdOne->ShowStudents();

$stdOne = new allStudents(1, "Mr-B", "b@gmail.com", 123, "Halishahar, CTG");
$stdOne->ShowStudents();

$stdOne = new allStudents(1, "Mr-C", "c@gmail.com", 123, "Nasirabad, CTG");
$stdOne->ShowStudents();

$stdOne = new allStudents(1, "Mr-D", "d@gmail.com", 123, "Patiya, CTG");
$stdOne->ShowStudents();

?>