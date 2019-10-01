<?php
    class Student{
        var $fisrtName;
        var $lastName;
        var $dateOfBirth;
        var $placeOfBirth;
        function __construct($_fn, $_ln, $doB, $poB){
            $this ->fisrtName= $_fn;
            $this ->lastNamee= $_ln;
            $this ->dateOfBirth= $doB;
            $this ->placeOfBirth= $poB;

        }
        function display(){
            echo   "Họ Tên:" .$this->fisrtName." ".$this->lastName ." <br>  ";
        }

    };