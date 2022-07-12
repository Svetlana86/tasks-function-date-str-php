<h2>Задача №2</h2>
<img src="img/math/2.png" width = "40%" alt="задание 2">
<form action="" method="post">
    <p>Введите значение n <input type="text" name="n_value" id=""></p>
    <p><input type="submit" value="Вычислить"></p>
</form>

<?php
function secondToTime($n){
    if($n!=""){
        $hours = $n/3600;
        $fullHours = floor($n/3600);
        $minutes = ($hours-$fullHours)*60;
        $fullminutes = floor($minutes);
        $seconds = ($minutes - $fullminutes)*60;
           
        echo "a) $fullHours <br>";
        echo "б) $fullminutes <br>";
        echo "с) $seconds <br>";
    }else echo "Введите значения n!";
}

secondToTime(htmlspecialchars($_POST['n_value']));
?>