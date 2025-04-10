<?php

class Model extends MySqlDB{

    function sumPriceCart($array)
    {
        $result = 0;
        foreach ($array as $value) {
            $result = $result + ($value['price'] * $value['count']);
        }
        return $result;
    }

    function getHeader(){
        if ($_SESSION['cart']) {
            $count = count($_SESSION['cart']);
            $price = $this->sumPriceCart($_SESSION['cart']);
        } else {
            $count = 0;
            $price = 0;
        }

        $out = array();
        $header = array(
            1 => array(
                "count" => $count,
                "price" => $price,
                "home" => "Главная",
                "products" => "Продукция",
                "about" => "О нас",
                "reviews" => "Отзывы",
                "shipping" => "Доставка и оплата",
                "feedback" => "Условия возврата",
                "contact" => "Свяжитесь с нами",
                "cart" => "Корзина",
                "call_btn" => "Заказать звонок",
                "addres_1" => "Пункты выдачи заказов в Крыму",
                "addres_2" => "Ялта, ул.Дарсановская, д.3",
                "addres_3" => "Симферополь, ул.Трансформаторная, д.7",
                "addres_4" => "Керчь",
                "addres_5" => "Севастополь, ул.Вакуленчука, д.53/7",
                "addres_6" => "Судак",
                "addres_7" => "Бахчисарай",
                "addres_8" => "Белогорск",
                "addres_9" => "Кировское",
                "addres_10" => "Красногвардейск",
                "addres_11" => "Ленино",
                "addres_12" => "Нижнегорск",
                "addres_13" => "Первомайск",
                "addres_14" => "Раздольное",
                "addres_15" => "Советское",
                "addres_16" => "Черноморское",
                "addres_17" => "Алушта",
                "addres_18" => "Армянск",
                "addres_19" => "Джанкой",
                "addres_20" => "Евпатория",
                "addres_21" => "Красноперекопск",
                "addres_22" => "Саки",
                "addres_23" => "Феодосия",
                
                "search_label" => "Поиск",
                "search_btn" => "Искать",
            ),
            2 => array(
                "home" => "Головна",
                "products" => "Продукція",
                "about" => "Про нас",
                "reviews" => "Відклики",
                "shipping" => "Доставка і оплата",
                "feedback" => "Умови повернення",
                "contact" => "Зв'язатися з нами",
                "cart" => "Корзина",
                "call_btn" => "Замовити дзвінок",
                "addres_1" => "Пункты выдачи заказов в Крыму",
                "addres_2" => "Ялта, ул.Дарсановская, д.3, тел.+7(978)284-34-10",
                "addres_3" => "Симферополь, ул.Бахчисарайская, д.3 тел.+7(978)120-05-62",
                "addres_4" => "Керчь",
                "addres_5" => "Севастополь ул.Вакуленчука, д.53/7, тел.+7(978)120-05-62",
                "addres_6" => "Судак",
                "addres_7" => "Бахчисарай",
                "addres_8" => "Белогорск",
                "addres_9" => "Кировское",
                "addres_10" => "Красногвардейск",
                "addres_11" => "Ленино",
                "addres_12" => "Нижнегорск",
                "addres_13" => "Первомайск",
                "addres_14" => "Раздольное",
                "addres_15" => "Советское",
                "addres_16" => "Черноморское",
                "addres_17" => "Алушта",
                "addres_18" => "Армянск",
                "addres_19" => "Джанкой",
                "addres_20" => "Евпатория",
                "addres_21" => "Красноперекопск",
                "addres_22" => "Саки",
                "addres_23" => "Феодосия",
                
                "search_label" => "Пошук",
                "search_btn" => "Шукати",
            ),
            3 => array(
                "home" => "Төп",
                "products" => "Житештерү",
                "about" => "Безнең турында",
                "reviews" => "Шаһитләр",
                "shipping" => "Тапшыру һәм түләү",
                "feedback" => "Кайту шартлары",
                "contact" => "Контактлар",
                "cart" => "Кәрзин",
                "call_btn" => "Шалтыратуны сора",
                "addres_1" => "Пункты выдачи заказов в Крыму",
                "addres_2" => "Ялта, ул.Дарсановская, д.3, тел.+7(978)284-34-10",
                "addres_3" => "Симферополь, ул.Бахчисарайская, д.3 тел.+7(978)120-05-62",
                "addres_4" => "Керчь",
                "addres_5" => "Севастополь ул.Вакуленчука, д.53/7, тел.+7(978)120-05-62",
                "addres_6" => "Судак",
                "addres_7" => "Бахчисарай",
                "addres_8" => "Белогорск",
                "addres_9" => "Кировское",
                "addres_10" => "Красногвардейск",
                "addres_11" => "Ленино",
                "addres_12" => "Нижнегорск",
                "addres_13" => "Первомайск",
                "addres_14" => "Раздольное",
                "addres_15" => "Советское",
                "addres_16" => "Черноморское",
                "addres_17" => "Алушта",
                "addres_18" => "Армянск",
                "addres_19" => "Джанкой",
                "addres_20" => "Евпатория",
                "addres_21" => "Красноперекопск",
                "addres_22" => "Саки",
                "addres_23" => "Феодосия",
                
                "search_label" => "Эзләү",
                "search_btn" => "Эзләү",
            ),
        );
        $out['header'] = $header[LG];
        $out['LG'] = LG;

        $url = $_SERVER['REQUEST_URI'];
        $a = explode("/",$url);

        $name = $a[3];
        
        $newName = str_replace('_',' ', urldecode($name));
        $sql = "SELECT * FROM model WHERE `title` = '$newName'";
        $arr = $this->query($sql);
        
        $sql2 = "SELECT * FROM `manufacture` WHERE `title` = '".$name."'";
        $arr2 = $this->query($sql2);
        
        if($a[2] == "models"){
            
            $out['title'] = "Производство ковриков ЭВА на ".ucfirst($arr[0]['title']).", Ялта, Симферополь, Севастополь, Крым, недорого, скидки, акциии в Крыму";    
            
        }elseif($a[2] == "model"){
            
            $out['title'] = "Производство ковриков ЭВА на автомобили ".ucfirst($arr2[0]['title']).", Ялта, Симферополь, Севастополь, Крым, недорого, скидки, акциии в Крыму";    
            
        }elseif($a[1] == "home"){
            
            $out['title'] = "Производство ковриков ЭВА на все авто, Ялта, Симферополь, Севастополь, Крым, недорого, скидки, акциии в Крыму";    
            
        }else{
            
            $out['title'] = "Производство ковриков ЭВА на все авто, Ялта, Симферополь, Севастополь, Крым, недорого, скидки, акциии в Крыму";    
            
        }


        if($a[2] == "models"){
            
            $out['description'] = "Качественные коврики ЭВА на ".$arr[0]['title'].", доставка по Крыму. Сделано в Крыму. Цена рынка, без подделок. Сертификат на сырье, не китай";    
            
        }
        elseif($a[2] == "model"){
            
            $out['description'] = "Качественные коврики ЭВА на ".$arr2[0]['title'].", доставка по Крыму. Сделано в Крыму. Цена рынка, без подделок. Сертификат на сырье, не китай";    
            
        }
        elseif($a[1] == "home"){
            
            $out['description'] = "Качественные коврики ЭВА на любое авто, доставка по Крыму. Сделано в Крыму. Цена рынка, без подделок. Сертификат на сырье, не китай";    
            
        }else{
            
            
            $out['description'] = "Качественные коврики ЭВА на любое авто, доставка по Крыму. Сделано в Крыму. Цена рынка, без подделок. Сертификат на сырье, не китай";    
            
        }
        
        $out['pagerating'] = strlen($out['title'])*3;
        
        $out['fb_meta'] = $this->getProdMeta();
        return $out;
    }
    


    function getProdMeta(){
        $url = $_SERVER['REQUEST_URI'];
        $a = explode("/",$url);
        if(count($a) < 4){
            return array();
        }
        if(isset($a[1]) && $a[1] == "products" && isset($a[2]) && $a[2] == "single" && isset($a[3])){
            $id = $a[3];
            $prod = $this->getProd($id);
            $out['url'] = "https://ева-крым.рф".$url;
            $out['title'] = $prod['title'];
            $out['description'] = strip_tags($prod['text']);
            $out['image'] = "https://ева-крым.рф/uploads/".$prod['img'];
            return $out;
        }
        return array();
    }

    function getProd($id){
        $sql = "SELECT cat_id,id,title_".$this->getLG(LG)." as title,text_".$this->getLG(LG)." as text,img,price,time FROM services WHERE id = ".$id;
        $arr = $this->query($sql);
        return $arr[0];
    }
    
    function getFooter(){
        $out = array();
        $footer = array(
            1 => array(
                "home" => "Главная",
                "modal_title_1" => "Заказать звонок",
                "modal_title_2" => "Быстрый заказ",
                "modal_name" => "Имя",
                "modal_phone" => "Номер",
                "modal_email" => "Эл.адрес",
                "modal_text" => "Сообщение",
                "modal_car_model" => "Марка машины",
                "modal_send" => "Отправить",
                "modal_response_text" => "Ваше сообщение отправлено",
                "tell" => "Позвонить",
                "addres" => "АР Крым",
                "full_day" => "Обслуживание",
                "call_btn" => "Заказать звонок",

                "footer_title_1" => "Быстрые ссылки",
                "footer_title_2" => "Контакты",
                "footer_title_3" => "Мы в соцсетях",
                "footer_menu_item_1" => "Главная",
                "footer_menu_item_2" => "О нас",
                "footer_menu_item_3" => "Продукция",
                "footer_menu_item_4" => "Отзывы",
                "footer_menu_item_5" => "Доставка и оплата",
                "footer_menu_item_6" => "Условия возврата",
                "footer_menu_item_7" => "Корзина",
                "footer_contact_item_1" => "АР Крым (бахчисарай, белогорск, кировское, красногвардейск, ленино, нижнегорск, первомайск, раздольное, советское, черноморское, алушта, армянск,  джанкой, евпатория,  керчь, красноперекопск, саки, симферополь, судак, феодосия, ялта)",
                "footer_contact_item_2" => "Номер телефона",
                "footer_contact_item_3" => "Оставить сообщение",
                "response_text" => "Ваше письмо отправлено",
                "response_call_text" => "Наши специалисты свяжутся с вами в ближайшее время",
                "copyright_text" => "© ЕВА-Крым.рф производитель ковриков и аксессуаров EVAtuning в Крыму,",
            ),
            2 => array(
                "home" => "Головна",
                "modal_title_1" => "Замовити дзвінок",
                "modal_title_2" => "Швидке замовлення",
                "modal_name" => "Ім'я",
                "modal_phone" => "Номер",
                "modal_email" => "Эл.адрес",
                "modal_text" => "Повідомлення",
                "modal_car_model" => "Марка авто",
                "modal_send" => "Відправити",
                "modal_response_text" => "Ваше повідомлення відправлено",
                "tell" => "Зателефонувати",
                "addres" => "АР Крим",
                "full_day" => "Обслуговування",
                "call_btn" => "Замовити дзвінок",

                "footer_title_1" => "Швидкі посилання",
                "footer_title_2" => "Контакти",
                "footer_title_3" => "Ми в соцмережах",
                "footer_menu_item_1" => "Головна",
                "footer_menu_item_2" => "Про нас",
                "footer_menu_item_3" => "Продукція",
                "footer_menu_item_4" => "Відклики",
                "footer_menu_item_5" => "Доставка і оплата",
                "footer_menu_item_6" => "Умови повернення",
                "footer_menu_item_7" => "Корзина",
                "footer_contact_item_1" => "АР Крим (бахчисарай, белогорск, кировское, красногвардейск, ленино, нижнегорск, первомайск, раздольное, советское, черноморское, алушта, армянск,  джанкой, евпатория,  керчь, красноперекопск, саки, симферополь, судак, феодосия, ялта)",
                "footer_contact_item_2" => "Номер телефону",
                "footer_contact_item_3" => "Залишити повідомлення",
                "response_text" => "Ваш лист відправлено",
                "response_call_text" => "Наші фахівці зв'яжуться з вами найближчим часом",
                "copyright_text" => " © ЕВА-Крим.рф виробник килимків і аксесуарів EVAtuning в Криму,",
            ),
            3 => array(
                "home" => "Төп",
                "modal_title_1" => "Шалтыратуны сора",
                "modal_title_2" => "Тиз тәртип",
                "modal_name" => "Исем",
                "modal_phone" => "Бүлмә",
                "modal_email" => "Электрон почта",
                "modal_text" => "Хәбәр",
                "modal_car_model" => "Машина бренды",
                "modal_send" => "Хәбәр җибәр",
                "modal_response_text" => "Сезнең хәбәр җибәрелде",
                "tell" => "Шалтыратыгыз",
                "addres" => "АР Крым",
                "full_day" => "Хезмәт",
                "call_btn" => "Шалтыратуны сора",

                "footer_title_1" => "Тиз сылтамалар",
                "footer_title_2" => "Контактлар",
                "footer_title_3" => "Без социаль челтәрләрдә",
                "footer_menu_item_1" => "Төп",
                "footer_menu_item_2" => "Безнең турында",
                "footer_menu_item_3" => "Житештерү",
                "footer_menu_item_4" => "Шаһитләр",
                "footer_menu_item_5" => "Тапшыру һәм түләү",
                "footer_menu_item_6" => "Кайту шартлары",
                "footer_menu_item_7" => "Кәрзин",
                "footer_contact_item_1" => "АР Крым (бахчисарай, белогорск, кировское, красногвардейск, ленино, нижнегорск, первомайск, раздольное, советское, черноморское, алушта, армянск,  джанкой, евпатория,  керчь, красноперекопск, саки, симферополь, судак, феодосия, ялта)",
                "footer_contact_item_2" => "Телефон номеры",
                "footer_contact_item_3" => "Хәбәр калдыру",
                "response_text" => "Сезнең хат җибәрелде",
                "response_call_text" => "Тиздән безнең белгечләр сезнең белән элемтәгә керәчәк",
                "copyright_text" => "© EVA-Crimea.rf келәм һәм аксессуарлар җитештерүче Кырымда EVAtuning,",
            ),
        );
        $out['footer'] = $footer[LG];
        return $out;
    }

    function getImages($gallery_id){
        $sql = "SELECT * FROM imgs WHERE gallery_id = ".$gallery_id." ORDER BY pos";
        $arr = $this->query($sql);
        return $arr;
    }

    function deleteImage($name){
        $this->delete("imgs",array("name" => $name));
    }

    function addImage($arr){
        $this->insert("imgs",$arr);
    }

    function updataImage($arr,$where){
        return $this->updata("imgs",$arr,$where);
    }

    function getLG(){
        $arr[1] = "ru";
        $arr[2] = "uk";
        $arr[3] = "tt";
        return $arr[LG];
    }
}