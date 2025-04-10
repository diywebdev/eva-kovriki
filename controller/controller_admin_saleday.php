<?php

class controller_admin_saleday extends Controller{
    protected $permission = 1;
    function action_index()
    {
        $this->data['sale'] = $this->model->getSale();
        $this->view->generate("admin_saleday.php", TPL_A);
    }

    function action_save(){
        $this->model->save($_POST[1],1);
        $this->model->save($_POST[2],2);
        $this->model->save($_POST[3],3);
        $this->model->save($_POST[4],4);
        $this->model->save($_POST[5],5);
        $this->model->save($_POST[6],6);
        $this->model->save($_POST[7],7);

        header("location:/admin_saleday");
    }

    function action_delete(){
        $this->model->deleteSale();
        header("location:/admin_saleday");
    }

}