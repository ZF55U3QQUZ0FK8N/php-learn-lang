<?php 
$type = "Numbers";
##
$myFile = "data.txt";
$lines = file($myFile);//file in to an array
#echo all # tags
$hashtag="#";
#########
foreach ($lines as &$value) {
if(!(substr( $value, 0,  strlen($hashtag)  ) === "$hashtag"))
{
$token = explode(':', $value);
echo createDataBlock($token[0],$token[1],$token[2]);
#echo "<hr/>";
}else{
echo createTitleBlock(substr( $value, 1,  strlen($value)));
#echo "</ br>";
#echo "<hr/>";
}
}
unset($value);
##
function createTitleBlock($Type) {
$a = "33%";
$VarA=$Type;
$VarB="Romaji Translation";
$VarC="Kanji Translation";

return"<!--  title block -->".
"<a name=\"$VarA\"></a>".
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




?>
