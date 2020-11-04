#EXAMPLE 1: long code
<?php 
if ($coin == 'heads') {
    $winner = true;
} else {
    $winner = false;
}

#EXAMPLE 1: short code
$winner = $coin == 'heads';
?>



#EXAMPLE 2: long code
<?php
function getCelsius($temperature = NULL,$includeUnit = TRUE) {

    // $x = ($temperature * 1.8 + 32 # f -> c

    # https://en.wikipedia.org/wiki/Fahrenheit#Definition_and_conversion
    $x = ($temperature - 32) / 1.8;

    if ($includeUnit == TRUE) {
        // Return the temperature with C appended to the end
        $temp_celsuis = $x . ' C';
        return $temp_celsuis;
    }
    else{
        // Return just the temperature
        return $x;


    }
}
?>

#EXAMPLE 2: short code
<?php
function getCelsius($temperature = null, $includeUnit = true)
{
    # https://en.wikipedia.org/wiki/Fahrenheit#Definition_and_conversion
    $result = ($temperature - 32) / 1.8;

    if ($includeUnit) {
        $result .= ' C';
    }

    return $result;
}
?>




################################ NULL COALESCING OPERATOR ################################

#EXAMPLE 3: long code (using $_POST superglobal and built-in function isset that looks to see if the data we are looking
for is set)
# Searching for a value called 'action' within $_POST and if it is a variable called $action will get the value of
whatever is in $_POST, otherwise, if it's not availalble, it gets set to some default value, in this case a string
called 'default'
<?php
if (isset($_POST['action'])) { #checks to see if we have a value
$action = $_POST['action']; #setting it
} else {
$action = 'default'; # otherwise defaulting it
}

#EXAMPLE 3: short code
#if this value $_POST['action'] exists, that's what $action will set to, otherwise, if it doesn't,it will set to 'default'
$action = $_POST['action'] ?? 'default';
?>




#EXAMPLE 4: long code
Today is <?php echo $day ?>

#EXAMPLE 4: short code
Today is <?=$day ?>





#EXAMPLE 5: long code
<?php foreach ($orders as $orderId => $order) { ?>
[...]
<?php } ?>

#EXAMPLE 5: short code
<?php foreach ($orders as $orderId => $order) : ?>
[...]
<?php endforeach ?>





#EXAMPLE 6: long code
<input type='text' name='searchTerm' value='<?php if (isset($searchTerm)) echo $searchTerm; ?>'>

#EXAMPLE 6: short code
<input type='text' name='searchTerm' value='<?=$searchTerm ?? '' ?>'>





#EXAMPLE 6: long code
<?php
if($caseSensitive) {
$match = $title == $searchTerm;
} else {
$match = strtolower($title) == strtolower($searchTerm);
}
?>

#EXAMPLE 6: short code
<?php 
$match = ($caseSensitive) ? $title == $searchTerm : strtolower($title) == strtolower($searchTerm);
?>




#EXAMPLE 7: long code
<?php 
if($day == 'monday' or $day == 'tuesday' or $day == 'wednesday' or $day == 'thursday' or $day == 'friday') {
$dayType = 'Week day';
} else {
$dayType = 'Week end';
}
?>

#EXAMPLE 7: short code
<?php 
if(in_array($day, ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'])) {
$dayType = 'Week day';
} else {
$dayType = 'Week end';
}
?>

#EXAMPLE 7: even shorter code
<?php 
if(in_array($day, ['saturday', 'sunday'])) {
$dayType = 'Week end';
} else {
$dayType = 'Week day';
}
?>




################################ TERNARY OPERATOR ################################
#EXAMPLE 8: long code
<?php 
if($total > 0) {
$prefix = '+';
}
else {
$prefix = '-';
}
?>

#EXAMPLE 8: short code using ternary operator
# a is what $prefix will be if ($total > 0 is true and b is if it's not true
# ? true : false;
# p $prefix = ($total > 0) ? a : b;
<?php 
$prefix = ($total > 0) ? '+' : '-';
?>

<?php

?>



#EXAMPLE 9: code using curly brackets "{}" inxtead of ":" and "endif" as syntax
<?php if ($haveResults) {?>
<h2>
    RESULTS:
</h2>

<h4>Your Move: <?php echo $choice ?>
</h4>

<h4>Computer's Move: <?php echo $comp ?>
</h4>


<?php if ($winner) { ?>
<h3 style="color:#008000;">Congratulations !</h3>
<?php
    } else {
        ?>
<h4 style="color:#b30000;">Shoot again !</h4> <?php
    }
    }
  ?>

#EXAMPLE 9: short code using ":" and "endif" instead of curly brackets "{}" as syntax
<?php if ($haveResults): {?>

<?php echo $choice ?>

<?php echo $comp ?>

<?php if ($winner): ?>
<h3 style="color:#008000;">Congratulations !</h3>
<?php else :?>
<h4 style="color:#b30000;">Shoot again !</h4> <?php
         
   ?>
<?php endif ?>

#EXAMPLE 9 continued: ending 'foreach' istead of 'if'
<php? foreach($students as $student): ?>
    <? echo $student ['name'] ?>
    <?php endforeach ?>





    #EXAMPLE 10: shorten the echo command to =
    <? echo $student ['name'] ?>
    <?= $student ['name'] ?>





    #EXAMPLE 11: