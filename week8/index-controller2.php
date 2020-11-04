<?php

# Static Class: invokes method outside the content of the class and doesn't need 'new' instance to be invoked, it can be accessed directly
//require 'Debug.php';

//Debug::dump(['a', 'b', 'c', ['x', 'y', 'z']]);


//----------------------------------------------------------------


# requiring two class files into this file below:
//require 'Number.php';
# sub class of Number
//require 'EvenNumber.php';



# will get half of the number, in this case 20, it will say '10'
//$example1 = new Number(20);
//var_dump($example1->getHalf());

# will get half of the number, in this case 20, it will say '10'
//$example2 = new EvenNumber(20);
//var_dump($example2->getHalf());



#checking to see if it's a number, since its text, the booleam expression will say 'false'
//$example1 = new Number('abc');
//var_dump($example1->isValid());

#checking to see if it's a number, since its text, the booleam expression will say 'false'
//$example2 = new EvenNumber('abc');
//var_dump($example2->isValid());



#checking to see if it's a number AND an even number by dividing by 2, the booleam expression will say 'true'
//$example1 = new Number(20);
//var_dump($example1->isValid());

#checking to see if it's a number AND an even number by dividing by 2,the booleam expression will say 'true'
//$example2 = new EvenNumber(20);
//var_dump($example2->isValid());



#checking to see if it's a number AND an even number by dividing by 2, the booleam expression will say 'false'
//$example1 = new Number(21);
//var_dump($example1->isValid());

#checking to see if it's a number AND an even number by dividing by 2,the booleam expression will say 'false'
//$example2 = new EvenNumber(21);
//var_dump($example2->isValid());

?>