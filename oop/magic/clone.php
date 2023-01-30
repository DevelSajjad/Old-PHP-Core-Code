<?php

    class student {
        public $name,$course,$time;
        function __construct($n)
        {
            $this->name = $n;
        }
        function course(course $cn){
            $this->course = $cn;
        }
        function __clone()
        {
            $this->course = clone $this->course;
            $this->time = clone $this->time;
        }
        function time(time $t){
            $this->time = $t;
        }
    }
    class time{
        public $tname;
        function __construct($tn)
        {
            $this->tname = $tn;
        }
    }
    class course{
        public $cname;
        function __construct($cn)
        {
            $this->cname = $cn;
        }
    }

    $student1 = new student("Sajjad");
    $course1 = new course("PHP");
    $time = new time("3.00");
    $student1->time($time);
    $student1->course($course1);
    $student2 = clone $student1;
    $student2->course->cname = "Java";
    $student2->time->tname = "10.00";
    $student3 = clone $student1;
    $student3->name = "Motaleb";
    $student3->course->cname = "Jquery";
    $student3->time->tname = "5.00pm";
    $student4 = clone $student3;
    $student4->name = "Shaim";
    $student4->course->cname = "Python";
    $student4->time->tname = "8.00pm";
echo "<pre>";
    print_r($student1);
    print_r($student2);
    print_r($student3);
    print_r($student4);
    echo "</pre>";
?>