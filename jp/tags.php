<?php

$titleTag="$";
echo "<center >";
echo "<font color=\"green\">";
$myFile = "data.txt";
$lines = file($myFile);//file in to an array
#echo all # tags
#echo "tags=";

foreach ($lines as &$value) {

//del line brake

$value = trim(preg_replace('/\s\s+/', ' ', $value));

if((substr( $value, 0,  strlen($titleTag)  ) === "$titleTag"))
{
$value=substr( $value, 1,  strlen($value));
echo "<a href=\"#$value\">$value</a> - ";
}
}
unset($value);
echo"</font>";


echo "</ center>";

?>
