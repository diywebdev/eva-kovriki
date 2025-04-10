<?php

header("Content-type: text/xml");

include "config.php";

    print '<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0">

<channel>
  <title>EVA</title>
  <link>https://www.w3schools.com</link>
  <description>EVA kovrik</description>
';


            $result = mysqli_query($link, "SELECT * FROM `manufacture` ORDER BY rand() ASC LIMIT 0, 5;");
            // Считаем количество полученных записей
            $num_result = mysqli_num_rows($result);
            // Выводим все записи текущей страницы
            for ($i = 0; $i<$num_result; $i++) {
            $row = mysqli_fetch_array($result);


print '<item>
    <title>Автомобільні коврики EVA для '.$row['title'].' купити в Україні</title>
    <link>http://1autrailers.com/product/%d0%ba%d1%96%d0%b3%d1%83%d1%80%d1%83%d0%bc%d1%96-%d0%b7%d0%be%d1%80%d1%8f%d0%bd%d0%b8%d0%b9-%d1%94%d0%b4%d0%b8%d0%bd%d0%be%d1%80%d1%96%d0%b3-%d0%b4%d0%bb%d1%8f-%d0%b4%d0%be%d1%80%d0%be%d1%81%d0%bb/</link>
    <description>
	<![CDATA[
	Повна візуалізація: килимків та кріплень саме для вашої моделі авто, кольорових рішень, комплектації та існуючих варіантів лекал. 
	Власне виробництво в Україні - виготовлення до 3-ох робочих днів. 
	Основні переваги:
	 - всесезонність;
	 - надійна фіксація;
	 - чистота в салоні;
	 - максимальне покриття салону;
	 - надійна фіксація;
     - зручно очищуються.
	]]>
	</description>
	
		<image>
		  <url>http://ева-крым.рф/uploads/'.$row['logo'].'</url>
		  <title>Лого</title>
		  <link>http://ева-крым.рф/uploads/'.$row['logo'].'</link>
		</image> 

		<image>
		  <url>http://ева-крым.рф/update2/kovrik.jpg</url>
		  <title>Лого</title>
		  <link>http://ева-крым.рф/update2/kovrik.jpg</link>
		</image> 

	

</item>';                
                
            
            }
            
            
            
            print '</channel>
</rss>';