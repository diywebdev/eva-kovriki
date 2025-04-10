<?php

include"config.php";

	if($_SESSION['user']['permission']){
		
		
$quantity = 10;

$page = $_GET['page'];


// Ограничиваем количество ссылок, которые будут выводиться перед и
// после текущей страницы
$limit=5;

// Если значение page= не является числом, то показываем
// пользователю первую страницу
if(!is_numeric($page)) $page=1;

// Если пользователь вручную поменяет в адресной строке значение page= на нуль,
// то мы определим это и поменяем на единицу, то-есть отправим на первую
// страницу, чтобы избежать ошибки
if ($page<1) $page=1;

// Узнаем количество всех доступных записей

	$result = mysqli_query($link, "SELECT COUNT(*) FROM `orders`");
	$num = mysqli_fetch_row($result)[0];

		$content = "<h2>Заказы (".$num.")</h2>";


if($num==0){

$content .= "Заказов нет";

}else{
	
	$content .= "<table class='table' border=1>
	<thead class='thead-dark'>
	<tr>
		<th>№</th><th>Дата</th><th>ФИО</th><th>Заказ</th><th>Доставка</th><th>Оплата</th><th>E-mail</th><th>Телефон</th><th>Цена (общая)</th>
	</tr>
	</thead>";
		



		// Вычисляем количество страниц, чтобы знать сколько ссылок выводить
		$pages = $num/$quantity;

		// Округляем полученное число страниц в большую сторону
		$pages = ceil($pages);

		// Здесь мы увеличиваем число страниц на единицу чтобы начальное значение было
		// равно единице, а не нулю. Значение page= будет
		// совпадать с цифрой в ссылке, которую будут видеть посетители
		$pages++;

		// Если значение page= больше числа страниц, то выводим первую страницу
		if ($page>$pages) $page = 1;

		// Выводим заголовок с номером текущей страницы


		// Переменная $list указывает с какой записи начинать выводить данные.
		// Если это число не определено, то будем выводить
		// с самого начала, то-есть с нулевой записи
		if (!isset($list)) $list=0;

		// Чтобы у нас значение page= в адресе ссылки совпадало с номером
		// страницы мы будем его увеличивать на единицу при выводе ссылок, а
		// здесь наоборот уменьшаем чтобы ничего не нарушить.
		$list=--$page*$quantity;

		// Делаем запрос подставляя значения переменных $quantity и $list
		
				$content .= "<h4>Страница ".$_GET['page']." из ".$pages."</h4>";


		$result = mysqli_query($link, "SELECT * FROM  `orders` ORDER BY `id` DESC LIMIT $quantity OFFSET $list;");

		// Считаем количество полученных записей
		$num_result = mysqli_num_rows($result);

		// Выводим все записи текущей страницы
		for ($i = 0; $i<$num_result; $i++) {
		$row = mysqli_fetch_array($result);
		
		
				$ord = explode("|||", $row['text']);
	
		// Вывод массива данных в переменной $row

			
	$content .= "
	<tr>
		<td><a class='btn btn-primary' onClick='orderDetails(".$row['id'].");' data-toggle='modal' data-target='#exampleModal'>".$row['number']."</a></td><td>".$row['date']."</td><td>".$row['fio']."</td><td><b>".$row['car']."</b><br>".$ord[0]."</td><td>".$row['delivery']."</td><td>".$row['pay']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['price']." руб</td>
	</tr>";            
			
			

		}

	$content .= "</table>";
		
		
	}
		
		
$content .= "

<style>
.page{
display: block;
padding: 9px 15px;
margin-bottom: 30px;
}

.page li{
list-style: none;
float: left;
}

</style>

";		
		
	

$content .= "<ul class=\"page\">";


	$cat = "update2/orders.php";


$pnx="?page=";


// _________________ начало блока 1 _________________

// Выводим ссылки "назад" и "на первую страницу"
if ($page>=1) {
    // Значение page= для первой страницы всегда равно единице,
    // поэтому так и пишем
#	print "<a class=\"pagination__link\" href=\"/".$cat."\">&lt;&lt;</a>";
	    // Так как мы количество страниц до этого уменьшили на единицу,
    // то для того, чтобы попасть на предыдущую страницу,
    // нам не нужно ничего вычислять


		$content .=  "<li class=\"previous\"><a style=\"float: left;\" class=\"btn btn-primary\" href=\"/".$cat.$pnx.$page."\"> << Предыдущая страницы</a>&nbsp;&nbsp;&nbsp;</li>";
           
	}
// __________________ конец блока 1 __________________
// На данном этапе номер текущей страницы = $page+1
$thisz = $page+1;
// Узнаем с какой ссылки начинать вывод
$start = $thisz-$limit;
// Узнаем номер последней ссылки для вывода
$end = $thisz+$limit;
// Выводим ссылки на все страницы
// Начальное число $j в нашем случае должно равнятся единице, а не нулю
for ($j = 1; $j<$pages; $j++) {
    // Выводим ссылки только в том случае, если их номер больше или равен
    // начальному значению, и меньше или равен конечному значению
    if ($j>=$start && $j<=$end) {

        // Ссылка на текущую страницу выделяется жирным
        if ($j==($page+1))

        if($j==1){
 #	print "<a class=\"pagination__link pagination__link--active\" href=\"/".$cat."\">$j</a>";

        }else{
#	print "<a class=\"pagination__link pagination__link--active\" href=\"/".$cat.$pnx.$j."\">$j</a>";
        }


	        // Ссылки на остальные страницы
        else

             if($j==1){
 #	print "<a class=\"pagination__link\" href=\"/".$cat."\">".$j."</a>";

             }else{
#	print "<a class=\"pagination__link\" href=\"/".$cat.$pnx.$j."\">".$j."</a>";
                   }


    }
}
// _________________ начало блока 2 _________________
// Выводим ссылки "вперед" и "на последнюю страницу"
if ($j>$page && ($page+2)<$j) {
    // Чтобы попасть на следующую страницу нужно увеличить $pages на 2
   $content .=  "<li class=\"next\"><a style=\"float: right;\" class=\"btn btn-primary\" href=\"/".$cat.$pnx.($page+2)."\">Следующая страница >> </a></li>";
    // Так как у нас $j = количество страниц + 1, то теперь
    // уменьшаем его на единицу и получаем ссылку на последнюю страницу
#	print "<a class=\"pagination__link\" href=\"/".$cat.$pnx.($j-1)."\">&nbsp;&gt;&gt;&nbsp;</a>";

}
// __________________ конец блока 2 __________________


$content .= "</ul>";

           	
		
		
		
		
		
		
		include ("../tpl/tpl_admin.php");
		
	}else{
		header("location: /login");
	}

?>