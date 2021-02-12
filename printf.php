<?php
$fname= "delower";
$lname="dfds";

$output = printf('hi is fist name %2$s, %1$s' ,strtolower($fname), $lname);

echo $output;


Php logic creation start

$n= 12;
if($n%2 == 0){
    echo "number is even";
}
else{
    echo "number is odd";
}
