<?php

// 1 divisible by 4 
// 2 divisible by 100
// 3 divisible by 400

$year = 2016;
if($year % 4 && $year % 100 ==0 && $year % 400 ==0){
    echo "{$year} is a leap year";
}
elseif($year % 4==0){
    echo "{$year} is leap year";
}
else{
    echo "{$year} in not leap year";
}

// Read able Advance ---------

if($year % 4==0 &&($year% 100 !=0 || $year % 400==0)){
    echo "is a leapear";
}else {
    echo "is a not lepear";
}