<?php

class Controller_eva_kovriki extends Controller
{
    protected $permission = 0;

    function action_index()
    {
        $this->data['mans'] = $this->model->getMan();
        $this->data['tr'] = $this->model->translite();
        $this->view->generate("products.php");
    }


    function action_id($args)
    {
        $id = $args[0];
        $this->data['cats'] = $this->model->getCats($id);
        $this->data['mans'] = $this->model->getMan();
        
        $man = $this->model->getManSingle($id);
        
        $this->data['man'] = $man;
        $this->data['tr'] = $this->model->translite();

        $this->view->generate("category.php");
    }

    function action_model($args)
    {
        $name = $args[0];
        $this->data['cats'] = $this->model->getCatsNew($name);
        $this->data['mans'] = $this->model->getMan();
        
        $man = $this->model->getManSingleNew($name);
        
        #print_r( $this->data['cats'] );
        
        $this->data['man'] = $man;
        $this->data['tr'] = $this->model->translite();

        $this->view->generate("category.php");
    }

    function action_models($args)
    {
        $name = urldecode($args[0]);
        $car = $this->model->getCar($name);

        $this->data['car'] = $car;
        $this->data['price'] = $this->model->getPrice($car['type']);

        $this->data['man'] = $this->model->getManufacturerFromCarName($car);        

        $this->data['seria'] = $this->model->getSeriaFromCarName($car);        

        $this->data['adr'] = ADR;   
        
       # print_r($args[0]);


        $this->data['tr'] = $this->model->translite();
        if ($name === 0 || $name == '') {
            $this->data['price'] = $this->model->getPrice(1);
            $this->data['price_1'] = $this->model->getPrice(2);
            $this->view->generate("product_other.php");
        }
        else {
            $this->view->generate("product.php");
        }
    }

    function action_add_cart($args){
        $id = $args[0];
        $_POST['car_id'] = $id;
        //делаем проверку стоимости на стороне сервера
        $car = $this->model->getCarID($id);
        $price = $this->model->getPrice($car['type']);
        // if($_POST['icon_count']){
        //     $_POST['icon_count'] = $_POST['count'];
        // }
        $_POST['count'] = 1;
        // echo "<pre>";
        // print_r($_POST);
        // exit;

        //проверка совпадения стоимости
        $priceTmp = $priceProcent = 0;
        foreach ($_POST as $key => $value){
            $check = (is_array($value)) ?'array' :strpos($value,'|');
            if ($check === 'array') {
                foreach ($value as $key_arr => $value_arr){
                    $valueTmp = explode('|',$value_arr);
                    $priceTmp = $priceTmp + $price[$valueTmp[0]];
                    $_POST['complact'][$key_arr] = $valueTmp[1];
                    $priceProcent = $priceTmp;
                }
            } else if ($check !== false) {
                $valueTmp = explode('|', $value);
                if ($valueTmp[0] == 'type_3') {
                    $priceProcent = $priceProcent * $price[$valueTmp[0]] / 100;
                    $priceTmp = $priceTmp + $priceProcent;
                } else {
                    $priceTmp = $priceTmp + $price[$valueTmp[0]];
                }
                $_POST[$key] = $valueTmp[1];

            }
        }

        $_POST['price'] = ($priceTmp == $_POST['price'])
            ? $_POST['price']
            : ($priceTmp > $_POST['price']) ? $priceTmp : $_POST['price'];

        if($_POST['complact']){
            $_POST['complact'] = implode(",&nbsp",$_POST['complact']);
        }

        $_SESSION['cart'][] = $_POST;
        header("location:/cart");
    }

    function action_search(){

        $s = $_POST['search'];
        $this->data['cars'] = $this->model->searchCars($s);
        $this->data['search'] = $s;
        $this->data['mans'] = $this->model->getMan();
        $this->data['tr'] = $this->model->translite();

        $this->view->generate("category_search.php");
    }
}

