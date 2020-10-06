<?php
#COVERS: Associative Arrays, Array Functions, Foreach Loop, Multi-dimensional Arrays, Shuffle, Date, Strtolower, Rand
//_______________________________________________
#Associative Arrays
/*
Example w/o array -
$penny_value = .01;
$nickel_value = .05;
$dime_value = .10;
$quarter_value = .25;
$half_dollars = .50;
*/
$coin_values = [ #example with information above in array (penny is the name KEY and .01 is the VALUE)
    'penny' => .01,
    'nickel' => .05,
    'dime' => .10,
    'quarter' => .25
];
/*
#Example w/o array -
$pennies = 100;
$nickels = 25;
$dimes = 100;
$quarters = 34;
*/
$coin_counts = [ #example with information above in array
    'penny' => 100,
    'nickel' => 25,
    'dime' => 100,
    'quarter' => 34,
];
//_______________________________________________
#Array Functions (for above associative arrays):

#asort(); & ksort(); Functions:

     //var_dump($coin_values['quarter']); # dumps out the value for the quarter, which is .25
asort($coin_counts); #Sorts alphabetically and numerically with smallest VALUE at top
arsort($coin_counts); #Sorts reverse/opposite order alphabetically and numerically with largest VALUE at top
ksort($coin_counts); #k is short for KEY. Sorts by KEY names instead of the value, in this case (penny, nickel, etc instead of 300, 5 etc)
krsort($coin_counts); #k is short for KEY. Sorts reverse/oposite order by KEY names instead of the value, in this case (penny, nickel, etc instead of 300, 5 etc)
     //var_dump($coin_counts);
//_______________________________________________
#Foreach Loops:

foreach ($coin_counts as $key => $value) { #dumps out the VALUE of each KEY, in this case: the value of each penny, nickel, etc
    //var_dump($value); #dumps the value amount
    //var_dump($key); #dumps the key name
}
#                         KEY      VALUE
foreach ($coin_counts as $coin => $count) {
    //var_dump($coin);
    //var_dump($count);
}

//_______________________________________________
#Multi-dimensional Array (stores multiple pieces of information)
$total = 0; #begin by setting a value for total, which the foreach loop will update everytime it itterates through the array

$coins = [
    'penny' => [100,0.1],
    'nickel' => [25,.05],
    'dime' => [100,.10],
    'quarter' => [34,.25],
    'halfDollar' => [10,.50]
];

//_______________________________________________
#Foreach Loops:
#                   KEY     VALUE
#        $coins is th array we are iterrating through
foreach ($coins as $coin => $info) {
#                            0 because VALUE count is in 0 position (100, 25, 100, 34, 10)
#                         multiplied by 1 because that's our VALUE. It's multiplying both positions within the VALUE
    $total = $total + ($info[0] * $info[1]); #sets it to whatever the total was + the VALUE (the info)
     //var_dump($total);
}


foreach ($coin_counts as $coin => $count) {
#                                             $coin doesn't hardcode it but instead dynamically chooses the VALUE by KEY (in this case, names $coin)
    $total = $total + ($count * $coin_values[$coin]);
    //var_dump($coin);
    //var_dump($count);
}

//_______________________________________________

$coins = [
    'penny' => [
        'count' => 100,
        'value' => .01
    ],
    'nickel' => [
        'count' => 25,
        'value' => .05
    ],
    'dime' => [
        'count' => 100,
        'value' => .10
    ],
    'quarter' => [
        'count' => 34,
        'value' => .25
    ],
    'halfDollar' => [
        'count' => 10,
        'value' => .50
    ]
];
//_______________________________________________
#Foreach Loops:
foreach ($coins as $coin => $info) {
#                            0 because VALUE count is in 0 position (100, 25, 100, 34, 10)
#                         multiplied by 1 because that's our VALUE. It's multiplying both positions within the VALUE
    $total = $total + ($info['count'] * $info['value']); #sets it to whatever the total was + the VALUE (the info)
     //var_dump($total);
}
//_______________________________________________
#Variation card game that shuffles cards
$cards = [1,2,3,4,5,6,7,8,9,10];
shuffle($cards);
     //var_dump($cards);
#                          $cards = array that it will parse through
#                                  0 is the position we are telling it to start parsing from
#                                     5 is the length we are splicing the data out of this array
$playerCards= array_splice($cards, 0, 5); #OR ($cards, 0, count($cards)/2);
     //var_dump($playerCards);
$computerCards = $cards;

//$playerDraw = $playerCards[4];

$playerDraw = array_pop($playerCards); #gets last element

     //var_dump($playerDraw);
     //var_dump($playerCards);
//_______________________________________________
#Various Functions
var_dump(date('F j Y', )); #Live Date Function

var_dump(strtolower('ABCD')); #makes string lowercase

var_dump(rand()); #no parameters so # can be as large as it wants
var_dump(rand(0, 10)); #between 0 and 10
//_______________________________________________
#Conditionals (control structures)
