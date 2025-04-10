<?php



class Controller_cart extends Controller
{
    protected $permission = 0;
    
   

    function action_index()
    {
        $cart = $_SESSION['cart'];

        if($cart){
            foreach ($cart as $k => $v){
                if($v['car_id'] > 0){
                    $cart[$k]['img'] = $this->model->getCarImg($v['car_id']);
                }elseif($v['car_id'] == 0){
                    $cart[$k]['img'] = "other.jpg";
                }
            }
        }else{
            $cart = array();
        }
        $this->data['cart'] = $cart;
        $this->data['tr'] = $this->model->translite();
        
        $this->data['order_number'] = $this->model->numberOrder();

        $this->data['order_date'] = date("d.m.Y");


        $regions = $this->regionsList();
        $this->data['regions'] = $regions['regions'];
        $this->data['price_value'] = $this->model->getSaleDay();
        $this->data['regions_price'] = $regions['regions_price'];
        $this->view->generate("cart.php");
    }

    function regionsList() {
        $tr = $this->model->translite();
        $regions = array();
        $regions_price = array();
        foreach ($tr['regions'] as $key => $value) {
            $region_ = explode('|', $value);
            $regions[$key] = $region_[0] ?? $value;
            $regions_price[$key] = floatval($region_[1]) ?? 0;
        }
        return [
            "regions" => $regions,
            "regions_price" => $regions_price,
        ];
    }

    function action_remove_card($args)
    {
        $id = $args[0];
        $card = $_SESSION['cart'];
        unset($card[$id]);
        $_SESSION['cart'] = $card;
        echo json_encode(true);
    }

    function action_change_count($args){
        $id = $args[0];
        $count = $args[1];
        $card = $_SESSION['cart'];
        foreach ($card as $k => $v) {
            if($k == $id){
                $card[$k]['count'] = $count;
            }
        }
        $_SESSION['cart'] = $card;
        echo json_encode(true);

    }   

    function action_order()
    {
        
        $regions = $this->regionsList();
        $headerUser = '
        <table style="border-collapse: collapse;width: 100%;margin-bottom: 50px;">
            <tr>
                <td colspan="2" style="padding: 7px;">
                    <img src="https://ева-крым.рф/img/logo.png" style="width: 170px;height: 40px;margin-right: 10px"> <br>
                    Заказ №'.$_POST['order_number'].' от '.date("d.m.Y").'
                </td>
            </tr>.';

                $headerAdmin = '
                <table style="border-collapse: collapse;width: 100%;margin-bottom: 50px;">
            <tr>
                <td colspan="2" style="padding: 7px;">
                    <img src="https://ева-крым.рф/img/logo.png" style="width: 170px;height: 40px;margin-right: 10px"><br> Вы получили заказ №'.$_POST['order_number'].' от '.date("d.m.Y").'


                </td>
            </tr>.';
            $region = ($_POST['region'] == 0-23) ? "Заберу со склада" : $regions['regions'][$_POST['region']];
            $addres = ($_POST['addres'] === null) ? 'Не указан' : $_POST['addres'];
                $text = ' <tr>
                <td style="font-size: 12px;border: 1px solid #DDDDDD;background-color: #EFEFEF;font-weight: bold;text-align: left;padding: 7px;color: #222222;">Информация о заказе </td>
                <td style="font-size: 12px;border: 1px solid #DDDDDD;background-color: #EFEFEF;font-weight: bold;text-align: left;padding: 7px;color: #222222;">Информация о клиенте</td>
            </tr>
            <tr>
                <td style="font-size: 12px;border: 1px solid #DDDDDD;text-align: left;padding: 7px;">
                    <b>Регион доставки:</b> '.$region.'<br>
                    <b>Адрес доставки:</b> '.$addres.'<br>
                    <b>Способ оплаты:</b> '.$_POST['oplata'].'<br>
                </td>
                <td style="font-size: 12px;border: 1px solid #DDDDDD;text-align: left;padding: 7px;">
                    <b>Имя:</b> '.$_POST['name'].'<br>
                    <b>Номер телефона:</b> '.$_POST['phone'].'<br>
                    <b>Почта:</b> '.$_POST['email'].'<br>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="font-size: 12px;border: 1px solid #DDDDDD;text-align: left;padding: 7px;">
                    <b>Комментарий к заказу:</b> '.$_POST['text'].'
                </td>
            </tr>
        </table>';

        $text.=  htmlspecialchars_decode($_POST['table']);

        $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/reviews';

        $textUser = '<div style="display: block;width: 100%;margin: 30px 0 40px 0;">Благодарим Вас за заказ. Наши специалисты свяжутся с Вами для уточнения деталей заказа в рабочее время: с Пн по Пт: 10.00-19.00 и Сб: 10.00-17.00. Спасибо что выбрали ЕВА-Крым.рф . Будем рады видеть Вас снова.<br> Вы можете оставить свой отзыв <a href="' . $url .'">ЗДЕСЬ</a></div>';

        $newText .= $headerAdmin . $text;
        $text = $headerUser . $text . $textUser;    
            
        MailSMTP::send(MAIL_ADDRESS,$newText,"ЕВА-Крым.рф-Новый заказ");
        MailSMTP::send(trim($_POST['email']),$text,"ЕВА-Крым.рф Ваш Заказ");
        MailSMTP::send(MAIL_ADDRESS_PRODUCTION,$newText,"ЕВА-Крым.рф-Новый заказ");
        MailSMTP::send(MAIL_ADDRESS_DEV,$newText,"ЕВА-Крым.рф-Новый заказ");
            
        $pcar = explode('<p class="name">', $text);
        
        $pex = explode('</p>', $pcar[1]);
        
        $car_name = str_replace(",", "\,", $pex[0]);
        $car_name = str_replace("(", "\(", $car_name);
        $car_name = str_replace(")", "\)", $car_name);
        $car_name = str_replace("'", "\'", $car_name);
        $car_name = str_replace('"', '\"', $car_name);
        
        
        $ptext = explode('<div class="text_description">', $text);
        
        $tex = explode('</div>', $ptext[1]);
        
        $car_description = str_replace(",", "\,", $tex[0]);
        $car_description = str_replace("(", "\(", $car_description);
        $car_description = str_replace(")", "\)", $car_description);
        $car_description = str_replace("'", "\'", $car_description);
        $car_description = str_replace('"', '\"', $car_description);  
        
        $pprice = explode('<span class="allPrice">', $text);
        
        $zex = explode('</span', $pprice[1]);
        
        $car_price = $zex[0];  

        $this->model->addToOrders($_POST['order_number'], date("d.m.Y"), $_POST['name'], $car_name, $region.", ".$addres, $_POST['oplata'], $_POST['email'], $_POST['phone'], $car_price, $car_description."|||".$_POST['text']);

        unset($_SESSION['cart']);
        echo json_encode(true);

    }
}