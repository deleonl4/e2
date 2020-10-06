<?php
#EXAMPLES OF ARRAY TYPES (DECLARING ARRAYS)

#           0       1        2
$moves = ['rock','paper','scissors']; #Array of strings

#                  0 1 2 3 4 5 6
//$strawLengths = [2,2,2,2,2,2,1]; #Array of numerical values

#              0    1    2    3
//$mixed = ['rock', 1, .04, true]; #Array containing a mix of values: string, integer, floating point number, and boolean data types

//_______________________________________________
#Extracting data from the array:
echo $moves [0]; #value should be rock since it's in the 0 position
#echo $moves [1]; #value should be paper since it's in the 1 position
#echo $moves [2]; #value should be scissors since it's in the 2 position
# If you add a number in [] that is not defined in the array, it will generate an error


//var_dump($moves); # var_dump is used for de-bugging only to test the output on the page, not proper code, shows all moves above


//rand($min, $max); #needs min and max value - example ONLY
#Gets random numbers from the array:
$randomNumber = rand(0, 2); #Gets values between the min # and the max # (min,max)
//$randomNumber = rand(); #Gets any value, no limit to numbers
//var_dump($randomNumber); #Checks random numbers 0-2 are working

$move = $moves [$randomNumber]; #doesn't hard code it, gets randomNumber from above
var_dump($move); #To double check the results from above line are working
