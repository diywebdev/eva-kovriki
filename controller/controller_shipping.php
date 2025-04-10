<?php

class Controller_shipping extends Controller {

    protected $permission = 0;

    function action_index() {
        $this->data['mans'] = $this->model->getMan();
    	$this->data['tr'] = $this->model->translite();
        $this->view->generate("shipping.php");
    }

}