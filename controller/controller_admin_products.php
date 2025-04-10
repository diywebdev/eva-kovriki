<?php

class Controller_admin_products extends Controller {

    protected $permission = 1;

    function action_index() {
        $this->data['mans'] = $this->model->getMan();
        $this->view->generate("admin_products.php", TPL_A);
    }

    function action_id($args){
        $id = $args[0];
        $this->data['cats'] = $this->model->getCats($id);
        $this->data['man'] = $this->model->getManSingle($id);
        $this->view->generate("admin_products_id.php", TPL_A);
    }

    function action_save(){
        foreach ($_POST['pos'] as $k => $v){
            $this->model->updataMan($v,$k);
        }
    }

    function action_new_car($args){
        $man_id = $args[0];
        $cat_id = $args[1];
        $arr['car'] = Image::addImage($_FILES['car']);
        $arr['cov'] = Image::addImage($_FILES['cov']);
        $arr['title'] = $_POST['title'];
        $arr['seria_id'] = $cat_id;
        $this->model->addCar($arr);
        header("location:/admin_products/id/".$man_id);
    }

    function action_delete_car($args){
        $man_id = $args[0];
        $car_id = $args[1];
        $this->model->deleteCar($car_id);
        header("location:/admin_products/id/".$man_id);
    }

    function action_delete_cat($args){
        $man_id = $args[0];
        $cat_id = $args[1];
        $this->model->deleteCat($cat_id);
        header("location:/admin_products/id/".$man_id);
    }

    function action_sale($args){
        $man_id = $args[0];
        $this->model->setSale($_POST);
        header("location:/admin_products/id/".$man_id);
    }

    function action_change_type($args){
        $id = $args[0];
        $type = $_POST['type'];
        $this->model->updataType($id,$type);
    }

}
