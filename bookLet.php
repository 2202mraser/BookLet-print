<?php
$pages = 12;
$isvalid = $pages/4;

if(is_int($isvalid)==1){
echo "1-printga: ";
$front1=$pages;
$front2=1;
echo $front1. "," . $front2. ",";
$half_page = $pages/4;
for($i=1; $i<=$half_page; $i++){
    $front1 = $front1 - 2;
    if($front1>$pages/2){
    echo $front1;   
    echo ",";
    }
    $front2 = $front2 + 2;
    if($front2<$pages/2){
    echo $front2;   
    echo ",";
    }
}
$back1 = $pages/2;
$back2 = $pages/2+1;
echo "\n" . "2-printga: ";
echo $back1 . "," . $back2 . ",";
for($y=1; $y<=$half_page; $y++){
    $back1 = $back1 - 2;
    $back2 = $back2 - 2;
    if($back1>0 && $back2>0){
    echo $back1;   
    echo ",";
    echo $back2;   
    echo ",";
    }
}
}else{
    echo $pages . " soni 4ga bo'linmiydi";
}
?>
