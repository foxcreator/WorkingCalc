<?php

function calcDay($timeIn, $timeOut)
{
   $timeIn = strtotime($timeIn);
    $timeOut = strtotime($timeOut);

    $dayTime =  $timeOut - $timeIn;
    $dayTime = date('H:i', $dayTime);

    return $dayTime;

}




//
//$a = strtotime($_POST['timein']);
//$b = strtotime($_POST['timeout']);
//$c = $b - $a;
//$c = date('h:i', $c);
//dd($c);