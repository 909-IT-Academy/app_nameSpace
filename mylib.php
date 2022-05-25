<?php
// mylib.php
namespace Tutsplus\Code;
 
// define a class
class Tutorial {
   public function __construct() {
      echo "Fully qualified class name: ".__CLASS__."<br/>";
      
   } 

   public function getSubject(){
       echo "Math"."<br/>";
   }
}
 
// define a function
function fooBar() {
    echo "Fully qualified function name: ".__FUNCTION__."<br/>";
}
 
// define a constant
const RECORDS_PER_PAGE = 50;
?>