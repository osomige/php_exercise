<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。

class Car{
    
    protected $name;
    protected $number;
    protected $color;
    
    public function __construct($name, $number, $color)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
        
    }
    // ここからゲッターとセッター
    // getNameはそとから呼び出せないからよびだすための関数
    public function getName()
    {
        return $this->name;
    }
    public function getNumber()
    {
        return $this->number;
    }
    public function getColor()
    {
        return $this->color;
    }
    // setNameは書き換えるための
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    // ここから表示するためのメソッド
    
    
    public function infomation()
    {
        echo '車の車種:' . $this->name . '、車体番号:' . $this->number . '、カラー:' . $this->color . 'です。';
    }
}

class Taxi extends Car{
    private $passenger;
    
    public function getPassenger()
    {
        return $this->passenger;
    }
    
    public function pickUp($pickUp)
    {  
        // echo '乗車人数は' . $pickUp. '人です';
        $this->passenger += $pickUp;
    }
    public function infomation()
    {
        echo '車の車種:' . $this->name . '、車体番号:' . $this->number . '、カラー：' . $this->color . '、乗車人数は' . $this->passenger . '人です。' ;
        // parent::infomation();
        // echo '乗車人数は' . $this->passenger . '人です。';
        
    }
    public function lower($lower)
    {  
        if ($this->passenger >= $lower) {
            echo $lower . '人降車しました。';
            $this->passenger -= $lower;
        } else {
            echo '降車人数に誤りがあります';
        }
    }
    
    
}



// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー

$car1 = new Car('ランクル', 100, 'black');

// 車の情報を表示
echo $car1->infomation();
echo '<br>';
echo '<hr>';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->infomation();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 一人降車
$taxi1->lower(2);