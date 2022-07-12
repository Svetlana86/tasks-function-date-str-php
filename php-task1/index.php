<h2>Задача №1</h2>
<img src="img/math/1.png" width = "40%" alt="задание 1">
<form action="" method="post">
    <p>Введите значение х <input type="text" name="x_value" id=""></p>
    <p>Введите значение y <input type="text" name="y_value" id=""></p>
    <p><input type="submit" value="Вычислить"></p>
</form>

<?php
function getValueFunction($x, $y){
    if($x!="" and $y!=""){
        if($x!=0){
            $z = ($x+(2+$y)/($x**2))/($y+(1/(sqrt($x**2+10))));
        }else echo 'На ноль делить нельзя!';
        
        $q = 2.8*sin($x)+abs($y);
        echo "z = $z <br>";
        echo "q = $q <br>";
    }else echo "Введите значения х и у!";
}

getValueFunction(htmlspecialchars($_POST['x_value']),htmlspecialchars($_POST['y_value']));
?>