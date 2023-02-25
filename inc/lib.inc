<?php

include "{$_SERVER['DOCUMENT_ROOT']}/php-class-proj/inc/dbworker.php";


function print_site_head(){
    print "<h1>Структура сайна на языке PHP</h1>";
}

function load_menu(){
?>
    <div class="block_nav">
        <ul class="navigation">
            <li><a href="index.php">Главная</a></li>
            <li><a href="LR1.php">ЛР1</a></li>
            <li><a>ЛР2</a>
                <ul>
                    <li><a href=".">Задание 1</a></li>
                    <li><a href=".">Задание 2</a></li>
                </ul>
            </li>
            <li><a>ЛР2</a>
                <ul>
                    <li><a href=".">Задание 1</a></li>
                    <li><a href=".">Задание 2</a></li>
                </ul>
            </li>
        </ul>
    </div>
<?php
}

function load_LR1_content(){
?>
    <form id="frmlb1" method="post" action="">
        <fieldset id="fslb1">
            <legend><b>КИНОАФИША</b></legend>
            <SELECT name="cinema_selector" size="1">
                <option value="-1"></option>
                <?php get_cinemas(); ?>
            </SELECT>
            <input type="submit" name="bt_submit" value="Показать"/>
            <?php get_cinema_name();?>
            <br>
            <?php get_cinema_data(); ?>
        </fieldset>
    </form>
<?php
}

function load_index_content(){
    print "<p>Это главная страница</p>";
}

function print_page_head($head){
    print $head;
}

function load_page(){
    global $page;

    if ($page=="index"){
        load_index_content();
    }
    if ($page=="LR1"){
        load_LR1_content();
    }
}

function print_copyright(){
    print "<h2>&copy Студент 214.31 Карпенко Д. А. Верхнепортовая 50. 2023г</h2>";
}

?>
