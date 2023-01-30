<?php

    class employee {

        public $name,$age,$salary;

        function __construct($n,$a,$s)
        {
            $this->name = $n;
            $this->age = $a;
            $this->salary= $s;            
        }

        function info(){
            echo "<h1> Employee Info </h1> <br> ";
            echo "<h3> Employee Name: </h3>" . $this->name;
            echo "<h3> Employee age: </h3>". $this->age;
            echo "<h3> Employee Salary: </h3>".$this->salary;
        }
    }

    class manager extends employee{
        public $ta=4000,$phone=500,$travel=800,$totalS;
        
        function info(){
            $this->totalS =$this->salary+ $this->ta + $this->phone+$this->travel;
            echo "<h1> Manager Info </h1> ";
            echo "<h3> Manage Name ".$this->name."<br>";
            echo "<h3> Manage AGe ".$this->age."<br>";
            echo "<h3> Manage Salary ".$this->totalS;
        }
    }
    $e = new employee("Sajjad",27,18000);
    $e->info();
    $e1 = new manager("Mamun",24,22000);
    $e1->info();

?>