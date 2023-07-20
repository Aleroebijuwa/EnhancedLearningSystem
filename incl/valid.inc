<?php





function encrypt($text, $num){

$encrypted = "";
$count = strlen($text);
$strbuildersg = "";
if (((empty($num)) || ($num == '0'))) {

$encrypted = $text;
}
else
{

for ($countresg = 0;
     $countresg < $count;
     $countresg++)
{

$strcharsg = substr($text, $countresg, 1);
$encrypted .= chr($num + ord($strcharsg));
 }


}

return $encrypted;

}




function decrypt($text, $num){

$decrypted = "";
$count = strlen($text);
$strbuildersg = "";
if (((empty($num)) || ($num == '0'))) {

$decrypted = $text;
}
else
{

for ($countresg = 0;
     $countresg < $count;
     $countresg++)
{

$strcharsg = substr($text, $countresg, 1);
$decrypted .= chr(ord($strcharsg) - $num);
 }


}

return $decrypted;


}




?>


