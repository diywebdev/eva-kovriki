<?php

class Controller_admin extends Controller {

    protected $permission = 1;

    function action_index() {
        $this->view->generate("admin.php", TPL_A);
    }

    function action_add_image_textarea(){
        $img = Image::addImage($_FILES["upload"]);
        echo json_encode(array("url" => "/uploads/".$img));
    }

    function action_parse(){
        $dir = 'cars/';
        $this->addMan($dir);
    }

    function addMan($dir){
        $files = scandir($dir);
        foreach($files as $file) {
            if($file != "." && $file != ".."){
                if(is_dir($dir.$file)){
                    $files_2 = scandir($dir.$file);
                    $man['title'] = $file;
                    $man_id = 0;
                    foreach($files_2 as $file_2) {
                        if($file_2 != "." && $file_2 != "..") {
                            if(is_file($dir.$file."/".$file_2)){
                                $man['logo'] = Image::copyImage($dir.$file."/".$file_2);
                                $man_id = $this->model->addMan($man);
                                $this->addSer($dir.$file."/",$man_id);
                            }
                        }
                    }
                }
            }
        }
    }

    function addSer($dir,$man_id){
        $files = scandir($dir);
        foreach($files as $file) {
            if($file != "." && $file != ".."){
                if(is_dir($dir.$file)){
                    $files_2 = scandir($dir.$file);
                    foreach($files_2 as $file_2) {
                        if($file_2 != "." && $file_2 != "..") {
                            if(is_file($dir.$file."/".$file_2)){
                                $title = file_get_contents($dir.$file."/".$file_2);

                                $ser['manufacture_id'] = $man_id;
                                $ser['title'] = $title;
                                $ser_id = $this->model->addSer($ser);
                                $this->addCar($dir.$file."/",$ser_id);
                            }
                        }
                    }
                }
            }
        }
    }

    function addCar($dir,$ser_id){
        $files = scandir($dir);
        foreach($files as $file) {
            if ($file != "." && $file != "..") {
                if(is_dir($dir.$file)){
                    $d = $dir.$file."/";
                    $car['title'] = file_get_contents($d."title.txt");
                    if(file_exists($d."car.jpg")){
                        $car['car'] = Image::copyImage($d."car.jpg");
                    }
                    if(file_exists($d."car.png")){
                        $car['car'] = Image::copyImage($d."car.png");
                    }
                    if(file_exists($d."covrik.jpg")){
                        $car['cov'] = Image::copyImage($d."covrik.jpg");
                    }
                    if(file_exists($d."covrik.png")){
                        $car['cov'] = Image::copyImage($d."covrik.png");
                    }
                    $car['seria_id'] = $ser_id;
                    $this->model->addCar($car);
                }
            }
        }

    }
}
