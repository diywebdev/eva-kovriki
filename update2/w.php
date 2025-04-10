<?php

include"config.php";

            $result = mysqli_query($link, "SELECT * FROM `manufacture` ORDER BY `id` ASC LIMIT 0, 3000;");

        // Считаем количество полученных записей
        $num_result = mysqli_num_rows($result);
        
        // Выводим все записи текущей страницы
        for ($i = 0; $i<$num_result; $i++) {
        $row = mysqli_fetch_array($result);
        
        	$result2 = mysqli_query($link, "SELECT COUNT(*) FROM `seria` where `manufacture_id`='".$row['id']."'");
        	$result2 = mysqli_fetch_row($result2)[0];
        	
        
        	
        	if($result2 < 1){
        	print $row['id']." - ".$row['title']." - ".$result2."<br>";	
        	    mysqli_query($link, "delete from `manufacture` where `id`='".$row['id']."'");
        	}
        }



?>