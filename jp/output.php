<?php 
$type = "____";
##
$myFile = "data.txt";
$lines = file($myFile);//file in to an array
unset($myFile);
$commentTag="#";

#########

echo"<table width=\"94%\">";
echo"<tbody>";
foreach ($lines as &$value) 
{
//del line brake
$value = trim(preg_replace('/\s\s+/', ' ', $value));
if(!(substr( $value, 0,  strlen($commentTag)  ) === "$commentTag")){


if(!(substr( $value, 0,  strlen($titleTag)  ) === "$titleTag"))
{
if((isNotEmpty($value)))
{
$token = explode(':', $value);
echo createDataBlock($token[0],$token[1],$token[2]);
}
//echo "<hr/>";
}
else
{
createTitleBlock(substr( $value, 1,  strlen($value)));
//echo "</ br>";
//echo "<hr/>";
}#if titleTag
}#if commentTag
}#foreach
unset($type);
unset($type);
unset($type);

unset($value);
echo"</tbody>";
echo"</table>
<br wp=\"br1\">";

##function
function createTitleBlock($Type) {

$a = "33%";
$VarA=$Type;
$VarB="Romaji Translation";
$VarC="Kanji Translation";

echo "<!--  title block -->".
"</tbody></table>";


echo"<br wp=\"br1\">";
 
echo"<br wp=\"br1\">";
 
echo"<br wp=\"br1\">";
 
include ('./tags.php');

echo"<br wp=\"br1\">";
 
echo"<br wp=\"br1\">";
 

echo"<br wp=\"br1\">";
 
echo "<a id=\"$VarA\"></a>".
"<table width=\"94%\"><tbody>".
"<tr>".
"<td align=\"center\" valign=\"top\" width=\"$a\"><p></p><center><strong>$VarA</strong></center></td>".
"<td align=\"center\" valign=\"top\" width=\"$a\"><p></p><center><strong>$VarB</strong></center></td>".
"<td align=\"center\" valign=\"top\" width=\"$a\"><p></p><center><strong>$VarC</strong></center></td>".
"</tr>";
}
function createDataBlock($s1,$s2 ,$s3 ) {
$a = "33%";
$VarA=$s1;
$VarB=$s2;
$VarC=$s3;

return"<!--  data block -->".
"<tr>".
"<td align=\"center\" valign=\"top\" width=\"$a\"><p></p><center>$VarA</center></td>".
"<td align=\"center\" valign=\"top\" width=\"$a\"><p></p><center>$VarB</center></td>".
"<td align=\"center\" valign=\"top\" width=\"$a\"><p></p><center>$VarC</center></td>".
"</tr>";


}

#
function isNotEmpty($input) 
{
    $strTemp = $input;
    $strTemp = trim($strTemp);

    if($strTemp !== '') //Also tried this "if(strlen($strTemp) > 0)"
    {
         return true;
    }

    return false;
}


?>
