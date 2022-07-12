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