<?php

class Model_contact extends Model{
  function translite() {
   $tr = array(
      1 => array(
          "title" => "Связаться с нами ",
          "name" => "Имя",
          "phone" => "Номер",
          "email" => "Эл.адрес",
          "text" => "Сообщение",
          "addres_title" => "Адрес",
          "addres" => "АР Крым",
          "send" => "Отправить",
          "response_text" => "Ваше сообщение отправлено",
          "phone_title" => "Номер телефона",
          "vk_title" => "Мы в соцсетях",
          "call_btn" => "Заказать звонок",
      ),
      2 => array(
         "title" => "Зв'язатися з нами",
         "name" => "Ім'я",
         "phone" => "Номер",
         "email" => "Ел.адреса",
         "text" => "Повідомлення",
         "addres_title" => "Адрес",
         "addres" => "АР Крим",
         "send" => "Надіслати",
         "response_text" => "Ваше повідомлення відправлено",
         "phone_title" => "Номер телефону",
         "vk_title" => "Ми в соцмережах",
          "call_btn" => "Замовити дзвінок",
      ),
      3 => array(
           "title" => "Безнең белән бәйләнегез",
           "name" => "Исем",
           "phone" => "Бүлмә",
           "email" => "Эл.адрес",
           "text" => "Хәбәр",
           "addres_title" => "Адрес",
           "addres" => "АР Крым",
           "send" => "Хәбәр җибәр",
           "response_text" => "Сезнең хәбәр җибәрелде",
           "phone_title" => "Номер телефона",
           "vk_title" => "Без социаль челтәрләрдә",
          "call_btn" => "Шалтыратуны сора",
       ),
   );
   return  $tr[LG];
  }
}