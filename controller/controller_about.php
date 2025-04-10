<?php

class Controller_about extends Controller {

    protected $permission = 0;

    function action_index() {
    	$this->data['tr'] = $this->model->translite();
        $this->data['about'] = $this->h_decode($this->model->getText());
        $this->data['staff'] = $this->model->getStaff();
        $this->data['partners'] = $this->model->getPartners();
        $this->data['partner_show'] = $this->model->getShowPartners();
        $this->view->generate("about.php");
    }

    function action_get_staff($args){
        $id = $args[0];
        $arr = $this->model->getStaffSingle($id);
        echo json_encode($arr);
    }

}