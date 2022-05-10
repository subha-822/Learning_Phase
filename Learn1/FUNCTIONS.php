<?php
# return a value
function add($a,$b)
{
    return $a+$b;
}
echo add(5,5);


# pass by reference
function add1(&$num)
{
    $num=5;
}
$num=2;
add1($num); # add1(2) -- error
echo $num;



?>