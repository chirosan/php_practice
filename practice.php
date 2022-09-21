<?php
echo 'hello php';
$a = 3;
$b = 7;
echo $a + $b;
$array_month = [
    "1" => "1月",
    "2" => "2月",
    "3" => "3月",
    "4" => "4月",
    "5" => "5月",
    "6" => "6月",
    "7" => "7月",
    "8" => "8月",
    "9" => "9月",
    "10" => "10月",
    "11" => "11月",
    "12" => "12月",
    ];
echo $array_month["8"];
$hello = "hello";
$name = "aya";
$world = "'s world";
echo $hello.$name.$world;
$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;

$calender_2018 = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "Novenber" => "11月",
    "December" => "12月",
    ];
echo $calender_2018["December"];

$name = "aya";
if ($name == "aya"){
    echo"私はあやです";
}else{
    echo"私はあやではありません";
}

for($i = 0; $i <=10000; $i++) {
    $total += $i;
}
echo $total;

$fruits = ["イチゴ", "ぶどう", "イチジク", "もも", "みかん",];
$fruits = array("イチゴ", "ぶどう", "イチジク", "もも", "みかん",);
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}

for($i = 0; $i <= 100; $i++){
    if($i % 5 == 0){
        echo $i;
    }
}
















