<?php
/**
 *
 *
 */

class Man {

   private $manName;

   private $manAge;

   public function __construct($newManName, $newManAge) {
      try {
         $this->setManName($newManName);
         $this->setManAge($newManAge);
      } catch(\RangeException $exception) {
         //determine exception thrown
         $exceptionType = get_class($exception);
         throw(new $exceptionType($exception->getMessage(), 0, $exception));
      }
      //end exception
   }
   //end constructor

   //accessor method for

}