<?php

function checkYear(){
    if(isset($_POST['bt_submit']) && isset($_POST['input_year'])){
        $year = $_POST['input_year'];
        if (is_numeric($year)){
            if ($year % 400 == 0)
                print "Високосный год. Дней в году: 366";
            else if ($year % 100 == 0)
                print "Не високосный год. Дней в году: 365";
            else if ($year % 4 == 0)
                print "Високосный год. Дней в году: 366" ;
            else
                print "Не високосный год. Дней в году: 365";
        } else
            print "Введите год для проверки";
    }
}

function GetRandomEnglishLetters(){
    if(isset($_POST['bt_submit'])){
        for ($i = 0; $i < 6; ++$i){
            for($j = 0; $j < 6; ++$j){
                $letter = chr(rand(65, 90));
                print " $letter";
            }
            print "<br>";
        }
    }
}

function lab3_1(){

}

function lab3_2(){

}


?>
