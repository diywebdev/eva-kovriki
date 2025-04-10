<?php

class Controller_reviews extends Controller {

    protected $permission = 0;

    function action_index() {
        $this->data['reviews'] = $this->model->getAll();
    	$this->data['tr'] = $this->model->translite();
        $this->view->generate("reviews.php");
    }

    function action_new(){
        if($_POST){
            if($_FILES['img']['error'] == 0){
                $_POST['img'] = Image::addImage($_FILES['img']);
            }
            $this->model->addReview($_POST);
            echo json_encode(true);
        }
    }
}