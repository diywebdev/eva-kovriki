<?php

abstract class Controller
{
    protected $model;
    protected $view;
    protected $data;
    protected $permission = 0;
    protected $Image_db;
    function __construct($model)
    {
        session_start();
        if(!isset($_SESSION['card'])){
            $_SESSION['card'] = array();
        }
        if(!isset($_SESSION['like'])){
            $_SESSION['like'] = array();
        }
        $this->model = new $model;
        $this->view = new View();
        $this->checkLg();
        $this->data = &$this->view->data;
        $this->data['like'] = $_SESSION['like'];
        $this->checkPermision();
        $this->view->header = $this->model->getHeader();
        $this->view->footer = $this->model->getFooter();
        if($_POST){
            $_POST = $this->h_encode($_POST);
        }
        $_SESSION['sale'] = false;
    }

    function action_lg($args)
    {
        $_SESSION['lg'] = $args[0];
        echo json_encode(true);
    }

    function checkLg()
    {
        if(!isset($_SESSION['lg'])){
            $_SESSION['lg'] = 1;
        }
        define("LG",$_SESSION['lg']);
    }

    function checkPermision(){
        if($this->permission > 0){
            if(!$_SESSION['user']){
                header("location:/login");
            }elseif($_SESSION['user']['permission'] < $this->permission){
                header("location:/login");
            }
        }
        if(isset($_SESSION['user'])){
            $this->data['user'] = $_SESSION['user'];
        }
    }

    abstract protected function action_index();
    
    protected function h_decode($arr){
        if(!is_array($arr)){
            return $arr;
        }
        foreach ($arr as $k => $v) {
            if(is_array($v)){
                $arr[$k] = $this->h_decode($v);
            }else{
                $arr[$k] = htmlspecialchars_decode($v);
                $arr[$k] = str_replace("<ul>", "<p><ul>", $arr[$k]);
                $arr[$k] = str_replace("</ul>", "</ul></p>", $arr[$k]);
            }
        }
        return $arr;
    }

    protected function h_encode($arr){
        foreach ($arr as $k => $v) {
            if(is_array($v)){
                $arr[$k] = $this->h_decode($v);
            }else{
                $arr[$k] = htmlspecialchars($v,ENT_QUOTES);
            }
        }
        return $arr;
    }

    function randomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return md5($randomString);
    }

}