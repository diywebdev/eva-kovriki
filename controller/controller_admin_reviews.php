<?php

class Controller_admin_reviews extends Controller {

    protected $permission = 1;

    function action_index() {
        $this->data['reviews'] = $this->model->getAll();
        $this->view->generate("admin_reviews.php", TPL_A);
    }

    function action_status($args){
        $id = $args[0];
        $status = $args[1];
        $this->model->changeStatus($id,$status);
        header("location:/admin_reviews");
    }

    function action_delete($args){
        $id = $args[0];
        $this->model->deleteReview($id);
        header("location:/admin_reviews");
    }

}
