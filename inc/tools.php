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
    if(isset($_POST['bt_submit'])){
        $startStr = htmlentities(file_get_contents("{$_SERVER['DOCUMENT_ROOT']}/php-class-proj/txt/lab3.txt"));
        $str = "попрыгунья стрекоза $startStr";
        $strToDel = "оглянуться не успела";        
        $str = str_replace($strToDel, "", $str);
        $firstLetter = mb_substr($str, 0, 1, 'utf-8');
        $firstLetter = mb_strtoupper($firstLetter, 'utf-8'); 
        $str = mb_substr($str, 1, mb_strlen($str, 'utf-8') - 1, 'utf-8');
        $str = "{$firstLetter}{$str}";
        print "<p>$str</p>";
    }
}

function lab3_2(){
    if(isset($_POST['bt_submit'])){
        $startStr = htmlentities(file_get_contents("{$_SERVER['DOCUMENT_ROOT']}/php-class-proj/txt/lab3.txt"));
        $strToChange = mb_substr($startStr, 3, 5, 'utf-8');
        $str = str_replace($strToChange, "!!!", $startStr);
        print "<p>$str</p>";
    }
}


?>
