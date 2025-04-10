<?php

class controller_admin_price extends Controller{
    protected $permission = 1;
    function action_index()
    {
        $price = $this->model->getPrice();
        $this->data['price'] = $price;

        $this->view->generate("admin_price.php", TPL_A);
    }

    function action_save(){
        $this->model->save($_POST[1],1);
        $this->model->save($_POST[2],2);
        header("location:/admin_price");
    }
}