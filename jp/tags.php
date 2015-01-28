 <?php
echo "<center >";
echo "<font color=\"green\">";
$dataFile = "data.txt";
$lines = file($dataFile);//file in to an array
#echo all # tags
$hashtag="#";
#echo "tags=";
foreach ($lines as &$value) {
if(substr( $value, 0,  strlen($hashtag)  ) === "$hashtag")
{
$value=substr( $value, 1,  strlen($value));
echo "<a href=\"#$value\">$value</a> - ";
}
}
unset($value);
#<a href="#positive">Positive Endearments</a> - 
#<a href="#negative">Negative Endearments</a> - 
#<a href="#places">Places</a> - 
#<a href="#compass">Compass Directions</a> - 
#<a href="#professions">Professions</a> - 
#<a href="#races">Races</a> - 
#<a href="#daysmonths">Days &amp; Months</a> - 
#<a href="#holidays">Holidays</a> - 
#<a href="#titles">Officer Titles</a> - 
#<a href="#pronouns">Pronouns</a> - 
#<a href="#list">Complete Alphabetical Phrase List</a>
echo"</font>";
echo "</ center>";
?>
