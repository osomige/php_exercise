<?php 

$score = 70 ;

if($score > 60){
    echo '合格です' . '<br>';
    
}


$score = 50;

if($score >= 30 || $score <= 60 ){
    echo '追試です' . '<br>';
}

$score = 10;

if($score <= 30 ){
    echo '不合格です';
}
