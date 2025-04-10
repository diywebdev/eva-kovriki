<?php

class Controller_contact extends Controller {

    protected $permission = 0;

    function action_index() {
        $this->data['tr'] = $this->model->translite();
        $this->view->generate("contact.php");
    }
    
    function action_send(){
        $result = $this->checkCapcha($_POST['g-recaptcha-response']);
        $text = "Имя: ".$_POST['name']."<br>";
        $text.= "Номер телефона: ".$_POST['phone']."<br>";
        $text.= "Сообщение: ".$_POST['text'];
        if($result){
            MailSMTP::send(MAIL_ADDRESS,$text,"Письмо");
            MailSMTP::send(MAIL_ADDRESS_DEV,$text,"Письмо");   
        }
        echo json_encode($result);
    }

    function action_call(){
        $result = $this->checkCapcha($_POST['g-recaptcha-response']);

        $text = "Имя: " . $_POST['name'] . "<br>";
        $text .= "Номер телефона: " . $_POST['phone'] . "<br>";

        if($result){
            MailSMTP::send(MAIL_ADDRESS,$text,"Заказ звонка");
            MailSMTP::send(MAIL_ADDRESS_DEV,$text,"Заказ звонка");
        }

        echo json_encode($result);
    }

    function action_quick(){
        $text = "Имя: " . $_POST['name'] . "<br>";
        $text .= "Номер: " . $_POST['phone'] . "<br>";
        $text .= "Марка: " . $_POST['car_model'] . "<br>";
        
        MailSMTP::send(MAIL_ADDRESS,$text,"Заказ звонка");
        MailSMTP::send(MAIL_ADDRESS_DEV,$text,"Заказ звонка");

        echo json_encode(true);
    }

    function checkCapcha($response){
        $url = "https://www.google.com/recaptcha/api/siteverify";
        // Ключ для сервера
        $key = "6LcD34wcAAAAADk4zyWxkZlYDJQqY3orJoaayn2b";
        // Данные для запроса
        $query = array(
            "secret" => $key, // Ключ для сервера
            "response" => $response, // Данные от капчи
            "remoteip" => $_SERVER['REMOTE_ADDR'] // Адрес сервера
        );

        $result = false;

        // Создаём запрос для отправки
        $ch = curl_init();
        // Настраиваем запрос
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        // отправляет и возвращает данные
        $data = json_decode(curl_exec($ch), $assoc = true);
        // Закрытие соединения
        curl_close($ch);

        // Если нет success то
        if (!$data['success']) {
            // Останавливает программу и выводит "ВЫ РОБОТ"
            $result = false;
        } else {
            // Иначе выводим логин и Email
            $result = true;
        }
        return $result;
    }


}