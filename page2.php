<?php
// app.php
use Tutsplus\Code as TC;
use Tutsplus\Code\Tutorial as Tutorial;
 
require "mylib.php";
 
// instantiate the Tutorial class with namespace alias TC
$objTutorial = new TC\Tutorial();

//call the method of Tutorial class
$objTutorial->getSubject();
 
// instantiate the Tutorial class with class alias Tut
$objTutorial = new Tutorial();

//call the method of Tutorial class
$objTutorial->getSubject();
 
// call the function
echo TC\fooBar();
 
// display the constant
echo TC\RECORDS_PER_PAGE;
?>