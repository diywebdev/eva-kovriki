<?php

class Image {

    static public function addImage($file) {
        return self::upload($file);
    }
    
    
    
    static public function updataImage($name,$file){
        self::deleteImage($name);
        return self::upload($file);
    }
    
    static public function deleteImage($name){
        $uploaddir = IMG_P;
        if (file_exists($uploaddir . $name)) {
            unlink($uploaddir . $name);
        }
        if (file_exists($uploaddir . "t/" . $name)) {
            unlink($uploaddir . "t/" . $name);
        }
    }

    private function randomName() {
        $str = "0 1 2 3 4 5 6 7 8 9 a b c d e f";
        $arr = explode(" ", $str);
        shuffle($arr);
        return md5(join("", $arr));
    }

    static public function copyImage($file){
        $t = explode(".",$file);
        $type = $t[count($t) - 1];
        $name = self::randomName() . "." . $type;
        $uploaddir = IMG_P;
        $uploadfile = $uploaddir . $name;
        copy($file,$uploadfile);
        return $name;
    }

    private function upload($file) {
        $tmp_name = $file['tmp_name'];
        $type = self::getType($file['type']);
        $name = self::randomName() . "." . $type;
        $uploaddir = IMG_P;
        $uploadfile = $uploaddir . $name;
        if (file_exists($uploaddir . $name)) {
            unlink($uploaddir . $name);
        }
        if (file_exists($uploaddir . "t/" . $name)) {
            unlink($uploaddir . "t/" . $name);
        }
        if (move_uploaded_file($tmp_name, $uploadfile)) {
            self::resize($name,$type);
            return $name;
        } else {
            return false;
        }
    }

    private function resize($filename,$type , $width = IMG_S_W) {
        switch ($type) {
            case "jpg":
                self::resizeJPG($filename,$width);
                break;
            case "png":
                self::resizePNG($filename,$width);
                break;
            case "gif":
                self::resizeGIF($filename,$width);
                break;
        }
    }
    
    private function resizeJPG($filename, $width){
        $image = imagecreatefromjpeg(IMG_P . $filename);
        $info = getimagesize(IMG_P . $filename);
        $w = $info[0];
        $h = $info[1];
        $height = ($width * $h) / $w;
        $new_image = imagecreatetruecolor($width, $height);
        imagecopyresampled($new_image, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));
        $image = $new_image;
        imagejpeg($image, IMG_P . "t/" . $filename, 80);
    }
    
    private function resizePNG($filename, $width){
        $image = imagecreatefrompng(IMG_P . $filename);
        $info = getimagesize(IMG_P . $filename);
        $w = $info[0];
        $h = $info[1];
        $height = ($width * $h) / $w;
        $new_image = imagecreatetruecolor($width, $height);
        imagealphablending($new_image, false);
        imagesavealpha($new_image,true);
        $transparent = imagecolorallocatealpha($new_image, 255, 255, 255, 127);
        imagefilledrectangle($new_image, 0, 0, $width, $height, $transparent);
        imagecopyresampled($new_image, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));
        $image = $new_image;
        imagepng($image, IMG_P . "t/" . $filename, 9);
    }
    
    private function resizeGIF($filename, $width ){
        $image = imagecreatefromgif(IMG_P . $filename);
        $info = getimagesize(IMG_P . $filename);
        $w = $info[0];
        $h = $info[1];
        $height = ($width * $h) / $w;
        $new_image = imagecreatetruecolor($width, $height);
        imagecopyresampled($new_image, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));
        $image = $new_image;
        imagejpeg($image, IMG_P . "t/" . $filename, 80);
    }
    
    private function getType($type) {
        switch ($type) {
            case "image/jpeg":
                return "jpg";
                break;
            case "image/png":
                return "png";
                break;
            case "image/gif":
                return "gif";
                break;
        }
    }

}
