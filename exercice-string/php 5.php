<?php
$str= "PHP 5";
$nbreCarac=strlen($str);
$aff=str_split($str,1);

foreach ($aff as $value)
    echo $value."<br>";

//$tab= explode("",$str);


for($i=0;$i<strlen($str);$i++)
{
echo " $str[$i] "."<br>";
}

