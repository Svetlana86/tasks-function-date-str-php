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
