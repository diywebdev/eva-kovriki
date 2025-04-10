<?php

include"config.php";

    if($_SESSION['user']['permission']){
        
            $result = mysqli_query($link, "select * from `orders` where `id`='".$_GET['id']."'");
            $order = mysqli_fetch_array($result); 
            
                $ord = explode("|||", $order['text']);

            ?>


   
        <table style="border-collapse: collapse;width: 100%;margin-bottom: 50px;">
    <tr>
        <td colspan="2" style="padding: 7px;">
            <img src="https://ева-крым.рф/img/logo.png" style="width: 170px;height: 40px;margin-right: 10px"><br> Заказ № <?php print $order['number']; ?> от <?php print $order['date']; ?>


        </td>
    </tr>
     <tr>
        <td style="font-size: 12px;border: 1px solid #DDDDDD;background-color: #EFEFEF;font-weight: bold;text-align: left;padding: 7px;color: #222222;">Информация о заказе: </td>
        <td style="font-size: 12px;border: 1px solid #DDDDDD;background-color: #EFEFEF;font-weight: bold;text-align: left;padding: 7px;color: #222222;">Информация о клиенте:</td>
    </tr>
    <tr>
        <td style="font-size: 12px;border: 1px solid #DDDDDD;text-align: left;padding: 7px;">
           
            <b>Автомобиль:</b><br>
            <b><?php print $order['car']; ?></b><br>
            
            <?php print $ord[0]; ?>
            <hr>
            <b><p style="color: red">Всего на сумму: <?php print $order['price']; ?> руб.</p></b>
            
            <b>!!! Итоговая стоимость заказа с учетом Доставки по Крыму</b>
            <hr>
            <b>Доставка:</b> <?php print $order['delivery']; ?><br>
            <b>Способ оплаты:</b> <?php print $order['pay']; ?><br>
        </td>
        <td style="font-size: 12px;border: 1px solid #DDDDDD;text-align: left;padding: 7px;">
            <b>ФИО:</b> <?php print $order['fio']; ?><br>
            <b>Номер телефона:</b> <?php print $order['phone']; ?><br>
            <b>Почта:</b> <?php print $order['email']; ?><br>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="font-size: 12px;border: 1px solid #DDDDDD;text-align: left;padding: 7px;">
            <b>Комментарий к заказу:</b> <?php print $ord[1]; ?>
        </td>
    </tr>
</table>		
            
<?php
        
    }
    
    
?>