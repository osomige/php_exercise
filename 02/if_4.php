<?php  

$score_math = 80;

$scrore_english = 75;

if($score_math >= 60 && $scrore_english >=60){
    echo '合格です';
}

// score_math、score_inglishのどちらかが30点以上、60点未満の数字が入力された場合

$score_math = 50;
$score_english = 24;

if($score_math >= 30 || $score_math <= 60 || $score_english >= 30 || $score_english <= 60){
    echo '追試です';
}
$score_math = 15;
$score_english = 24;
if($score_math <= 30 && $score_english <= 30){
    echo '不合格';
}