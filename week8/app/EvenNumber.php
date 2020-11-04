<?php
#     sub class          parent super class
class EvenNumber extends Number

# Custom functionality of the class by adding on additional functionality
{
# Subclasses can overwrite their superclasses as long as they use the SAME NAME that this file is using
public function isValid()
{
# They can also invoke methods from their superclasses using `parent::`, in this case 'Number' is the parent class and the 'isValid()' method gets invoked from the 'Number.php' class file, which in this case is seeing if '$this' is a numerical value using 'isValid' and the number/boolean expresion returns as either 'true' or 'false'
# Perfect example of how you can use whats in the parent class and add/tailor this child class file to do what you want
# Use 'parent::' to invoke method (isValid()) from parent class
# Use '$this->' to invoke property (num) from parent class
return parent::isValid() and ($this->num % 2 == 0);
# Determines if '$this' is a number AND determines if number is even by taking the 'num' and % (dividing it) by '2'
// Return is_numeric($this->num) and ($this->num % 2 == 0);
}
}