<?php
//1~10 までを足した値を返す関数
function sum(){
    
    //$result は結果を保存する変数
    $result =0;
 
    // $i　は　1からはじまり　10より大きくなるまでループする
    for($i = 1; $i < 10; $i++){
        // $result に $iを順番に足していく
        $result += $i;
    }

// $result を結果として返す
return $result;
}
echo sum();
?>


<?php
//引数に数値を指定して実行すると数値が2倍
function sum2($max) {
    $result = $max *2;
    return $result;
}
echo sum2(10000);
?>

<?php
function add($a, $b){
    return $a + $b;
}
echo add(2,5);
?>


<?php

function arran($arr){
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $result *= $arr[$i];
    }
    return $result;
    
}
echo arran(array(1,3,5,7,9));
?>


<?php
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(2,3,4,5,6,));
?>



