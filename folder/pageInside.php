<?php
// app.php
use Tutsplus\Code;
 
require "../mylib.php";
 
// instantiate the Tutorial class
$objTutorial = new Code\Tutorial();

//call the method of Tutorial class
$objTutorial->getSubject();
 
// call the function
echo Code\fooBar();
 
// display the constant
echo Code\RECORDS_PER_PAGE;
?>