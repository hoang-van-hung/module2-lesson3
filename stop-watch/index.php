<?php
include_once "class-stop-watch.php";
$watch= new StopWatch();
$startTime = time();
echo $milliseconds = round(microtime(true) * 1000);

$watch->setStartTime(round(microtime(true) * 1000));


 for ($i=0;$i<10000;$i++){
     echo $i;
     echo "<br><br>";
 }
 $endTime= time();
$watch->setEndTime(round(microtime(true) * 1000));
 $watch->count();
