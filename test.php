<?php
// $a1=array("bookcode"=>"Y001","bookdesc"=>"Y002","c"=>"Y003","d"=>"Y004");
// $a2=array("bookcode"=>"Y001","bookdesc"=>"Y004","c"=>"Y005");

// $a3=array("a"=>"red","b"=>"black","h"=>"yellow");

// $result=array_diff($a1,$a2);
// print_r($result);
// echo "<br/>";
// print_r($a3);
// echo "<br/>";
// foreach($a1 as $row){
    // $aTmp1[] = $row;
// }

// foreach($a2 as $row){
    // $aTmp2[] = $row;
// }

// $new_array = array_diff($aTmp1,$aTmp2);
// print_r($new_array);
echo "<br/>";
echo "<br/>";
$cars1 = array
  (
  array("Volvo",22,18)
  );
 $cars2 = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2)
  );
 function udiffCompare($a, $b){
    if ($a===$b){
		return 0;
	}
   return ($a>$b)?1:-1;
 }

 $arrdiff = array_udiff($cars2, $cars1, 'udiffCompare');
 print_r($cars1);
 echo "<br/>";
 print_r($cars2);
 echo "<br/>";
 print_r($arrdiff);
 

?>