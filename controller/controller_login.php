<?php
class Controller_login extends Controller{
    protected $permission = 0;
    function action_index() {
        $this->view->generate("login.php",TPL_A);
    }
    
    function action_login(){
        $login = $_POST['login'];
        $pass = md5($_POST['pass']);
        $admin = $this->model->checkLoginAdmin($login,$pass);
        if(count($admin) == 1){
            $_SESSION['user'] = $admin[0];
            $_SESSION['user']['permission'] = 1;
            header("location:/admin");
        }else{
            header("location:/login/error");
        }
    }
    
    function action_error() {
        $this->data['error'] = true;
        $this->view->generate("login.php",TPL_A);
    }
    
    function action_logout(){
        unset($_SESSION['user']);
        header("location:/admin");
    }
}