<?php

	DEFINE('ROOT', realpath(dirname(__FILE__)));

// Set the content type header - in this case image/jpeg



/**
* Масштабирование изображения
*
* Функция работает с PNG, GIF и JPEG изображениями.
* Масштабирование возможно как с указаниями одной стороны, так и двух, в процентах или пикселях.
*
* @param string Расположение исходного файла
* @param string Расположение конечного файла
* @param integer Ширина конечного файла
* @param integer Высота конечного файла
* @param bool Размеры даны в пискелях или в процентах
* @return bool
*/

function resize($file_input, $w_o) {
	list($w_i, $h_i, $type) = getimagesize($file_input);
	if (!$w_i || !$h_i) {
		echo 'Невозможно получить длину и ширину изображения';
		return;
	}

	$ext = pathinfo($file_input, PATHINFO_EXTENSION);

	if($ext == "jpg"){
		$ext = "jpeg";
		header('Content-Type: image/jpeg');
	}

	if($ext == "png"){
		$ext = "png";
		header('Content-Type: image/png');
	}
	
	if($ext == "gif"){
		$ext = "gif";
		header('Content-Type: image/png');
	}
	
	if($type == 18){
		$ext = "webp";
		header('Content-Type: image/jpeg');
	}	
	
	if ($ext) {
		$func = 'imagecreatefrom'.$ext;
		$img = $func($file_input);
	} else {
		echo 'Некорректный формат файла';
		return;
	}
	if ($percent) {
		$w_o *= $w_i / 100;
		$h_o *= $h_i / 100;
	}
	if (!$h_o) $h_o = $w_o/($w_i/$h_i);
	if (!$w_o) $w_o = $h_o/($h_i/$w_i);
	$img_o = imagecreatetruecolor($w_o, $h_o);
	imagecopyresampled($img_o, $img, 0, 0, 0, 0, $w_o, $h_o, $w_i, $h_i);
	if ($type == 2) {
		return imagejpeg($img_o);
	}
	
	elseif($type == 18){
	
		$func = 'imagewebp';
		return $func($img_o); 
		
	}
	else {
		$func = 'image'.$ext;
		return $func($img_o);
	} 
}


resize(ROOT."/..".$_GET['photo'], $_GET['w']);

?>