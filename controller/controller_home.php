<?php

class Controller_home extends Controller {

    protected $permission = 0;

    function action_index() {
    	$this->data['tr'] = $this->model->translite();
        $this->data['mans'] = $this->model->getMan();
        $this->view->generate("home.php");
    }

    function action_sale(){
        $_SESSION['sale'] = true;
    }
}


