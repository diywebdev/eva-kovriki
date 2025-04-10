<?php

class Controller_feedback extends Controller {

    protected $permission = 0;

    function action_index() {
        $this->data['mans'] = $this->model->getMan();
    	$this->data['tr'] = $this->model->translite();
        $this->view->generate("feedback.php");
    }
}