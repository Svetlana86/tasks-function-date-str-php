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

<h2>Задача №3</h2>
<img src="img/math/3.png" width = "40%" alt="задание 3">
<form action="" method="post">
    <p>Введите значение x <input type="text" name="x-value-task3" id=""></p>
    <p><input type="submit" value="Вычислить"></p>
</form>

<?php
function getValueFunction2($x){
    if($x!=""){
        if($x>0) $y = (sin($x))**2;
        else $y=1-2*sin($x**2);
        echo "y = $y <br>";
    }else echo "Введите значения x!";
}

getValueFunction2(htmlspecialchars($_POST['x-value-task3']));
?>

<h2>Задача №4</h2>
<img src="img/math/4.png" width = "40%" alt="задание 4">
<br><br>
<?php
function getTablePrice($price){
    echo "<table><thead>
        <tr>
            <th>шт</th>
            <th>стоимость в руб.</th>
        </tr>
    </thead>
    <tbody>";
    for ($i=2; $i <= 20; $i++) { 
    $price += $price;
     echo "<tr><td>$i </td> <td>$price </td></tr>";
   }    
    echo "</tbody></table>";
   
}

getTablePrice(20.4);
?>

<h2>Задача №5</h2>
<img src="img/math/5.png" width = "40%" alt="задание 5">
<br><br>
<?php
    for($i=100; $i <= 200; $i++){
        if($i%3==0) echo "$i; ";
    }
?>

<h2>Задача №6</h2>
<img src="img/math/6.png" width = "40%" alt="задание 6">
<form action="" method="post">
    <p>Введите название города <input type="text" name="city" id=""></p>
    <p><input type="submit" value="Определить"></p>
</form>

<?php
    $city = htmlspecialchars($_POST['city']);
    
    if($city!=""){
        $citylen = iconv_strlen($city, 'UTF-8');
        if($citylen%2==0) echo "четное";
        else echo "нечетное";
    }else echo "Введите название города";
?>

<h2>Задача №7</h2>
<img src="img/math/7.png" width = "40%" alt="задание 7">
<form action="" method="post">
    <p>Введите любое слово <input type="text" name="word" id=""></p>
    <p><input type="submit" value="Определить"></p>
</form>

<?php
    $word = $_POST['word'];
    if($word!=""){
        if($word[1]==$word[3]) echo "одинаковые";
        else echo "неодинаковые";
    }else echo "Введите слово";

?>

