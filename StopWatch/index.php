<?php
include_once "StopWatch.php";
$time = new StopWatch();
function sortNumber(){
    $arr = [];
    for ( $i = 0 ; $i<=100000 ; $i++){
        $arr[$i] = rand(100,10000);
    }
    sort($arr);
}
$time -> setTime();
sortNumber();
$time ->restartTime();
echo $time->getElapsedTime();


