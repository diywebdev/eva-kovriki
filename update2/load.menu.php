<?php

include "config.php";

if($_GET['act']=="load-brands"){
    
            $result = mysqli_query($link, "SELECT * FROM `manufacture` ORDER BY `title` ASC LIMIT 0, 3000;");

        // Считаем количество полученных записей
        $num_result = mysqli_num_rows($result);
        
        // Выводим все записи текущей страницы
        for ($i = 0; $i<$num_result; $i++) {
        $row = mysqli_fetch_array($result);
        
            print '<option  value="'.$row['id'].'"';
            
                if($_GET['manufacturer']==$row['id']){
                    print ' selected';
                }
            
            print '>'.ucfirst($row['title']).'</option>';
        
        }
    
}

if($_GET['act']=="load-seria"){
    
            $result = mysqli_query($link, "SELECT * FROM `seria` where `manufacture_id`='".$_GET['brand_id']."' ORDER BY `title` ASC LIMIT 0, 15000;");

        // Считаем количество полученных записей
        $num_result = mysqli_num_rows($result);
        
        // Выводим все записи текущей страницы
        for ($i = 0; $i<$num_result; $i++) {
        $row = mysqli_fetch_array($result);
        
            print '<option data-filter=".category-'.$row['id'].'" value="'.$row['id'].'">'.$row['title'].'</option>';
        
        }
    
}

if($_GET['act']=="load-model"){
    
            $result = mysqli_query($link, "SELECT * FROM `model` where `seria_id`='".$_GET['seria_id']."' ORDER BY `title` ASC LIMIT 0, 15000;");

        // Считаем количество полученных записей
        $num_result = mysqli_num_rows($result);
        
        // Выводим все записи текущей страницы
        for ($i = 0; $i<$num_result; $i++) {
        $row = mysqli_fetch_array($result);
        
            print '<option value="'.$row['id'].'">'.$row['title'].'</option>';
        
        }
    
}




