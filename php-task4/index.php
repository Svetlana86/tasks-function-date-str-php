<h2>Задача №4</h2>
<img src="img/math/4.png" width = "40%" alt="задание 4">
<br><br>
<table>
    <thead>
        <tr>
            <th>шт</th>
            <th>стоимость в руб.</th>
        </tr>
    </thead>
    <tbody>
        <?php
            function getTablePrice($price){
                for ($i=2; $i <= 20; $i++) { 
                    $price += $price;
                    echo "<tr><td>$i </td> <td>$price </td></tr>";
                }    
                echo "";            
            }
            getTablePrice(20.4);
        ?>
    </tbody>
</table>