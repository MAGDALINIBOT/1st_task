<?php
session_start();
if($_SESSION['N']==1){
    $_SESSION['myarray']=array();
}

$city=$_POST['c_name'];

$url="http://api.weatherapi.com/v1/current.json?key=510eb7be47904818b8a174646202809&q='.$city.'";
$contents = file_get_contents($url);
$clima=json_decode($contents);

$cityname = $clima->location->name;
$region = $clima->location->region;
$country = $clima->location->country;

$localtime = $clima->location->localtime;

$temp = $clima->current->temp_c;

$text=$clima->current->condition->text;

echo $cityname . " - " .$region.  " - " .$country."<br>";
echo $localtime."<br>"; 

echo "Current temperature: " . $temp."&deg;C  - " .$text. "<br>";

$b=array("$cityname", $region, $country, $localtime, $temp ,$text);
array_push($_SESSION['myarray'],$b);

$_SESSION['N']=$_SESSION['N'] + 1;



?>