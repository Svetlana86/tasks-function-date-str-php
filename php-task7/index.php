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

