<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

if($operator == 'addition'){

echo $num1 + $num2;

}elseif($operator == 'subtraction'){
echo $num1 - $num2;
}elseif($operator == 'multiplication'){
    echo $num1 * $num2;
}elseif($operator == 'division'){
    echo $num1 / $num2;
}else{
    echo '正しい演算子を指定して下さい';
}

// 一応caseの場合でもできる