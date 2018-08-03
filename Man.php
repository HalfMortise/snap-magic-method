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
      } catch(\InvalidArgumentException | \RangeException $exception) {
         //determine exception thrown
         $exceptionType = get_class($exception);
         throw(new $exceptionType($exception->getMessage(), 0, $exception));
      }
      //end exception
   }
   //end constructor

   //accessor method for manName
   public function getManName(): string {
      return ($this->manName);
   }

   //mutator method for manName, <= 64 characters
   public function setManName(string $newManName) : void {
      $newManName = trim($newManName);
      if(strlen($newManName) <= 64) {
         throw(new \RangeException("name is too long"));
      }
      //end throw
   }
   //end mutator method for manName

   //accessor method for manAge
   public function getManAge(): int {
      return ($this->manAge);
   }

   //mutator method for manAge
   public function setManAge(int $newManAge) : void {
      if(is_integer($newManAge) < 0) {
         throw(new \InvalidArgumentException("not born yet"));
      }
      if(is_integer($newManAge) < 19) {
         throw(new \RangeException("Hi, Caleb!"));
      }
      if(is_integer($newManAge) > 119) {
         throw(new \RangeException("Captain @DeepDiveDylan"));
      }
      //end throws
   }
   //end mutator method

   public function __toString() {
      return "<td><td>" . $this->manName . "</td></td>" . $this->manAge . "</td></tr>";
   }

}
$man = new Man("Jude", 20);
$echo = $man;