<?php
$str="bonjour, tout le monde! ceci un test";
//if (!empty($str [$delimiters = " \t\r\n\f\v"])) {
 //   $phrase= ucwords ( $str [  $delimiters = " \t\r\n\f\v" ] );
//}
 $x=ucwords ( $str );
echo $x;
echo "<br>";
echo strlen($str);
