<?php

class Model_eva_kovriki extends Model{
    function translite() {
        $tr = array(
            1 => array(
                "products_title" => "Выберите свой коврик в каталоге производителя ЕВА-Крым.рф",
                "products_under_title" => "Подбор ковриков по модели автомобиля",

                "category_title" => "Выберите модель своего автомобиля",
                "category_left_title_1" => "Автомобильные коврики EVAtuning для",
                "category_left_title_2" => "купить в Крыму",
                "category_all_models_btn" => "Все модели",

                "product_title" => "Автомобильные коврики EVAtuning для ",
                "product_text_1_1" => "Коврики EVAtuning для автомобиля",
                "product_text_1_2" => "купить в Ялте",
                "product_text_2_1" => "Размеры ковров для модели",
                "product_text_2_2" => "взяты непосредственно с пола автомобиля, на котором ковры покрывают 95% пола автомобиля. Ковры EVAtuning изготовлены из специального сырья, этиленвинилацетат. Они не растрескиваются зимой, гибки и не ломаются. Экологически чистые, не деформируются от жары и не имеют запаха, что также подходит для лета. Благодаря специальным отверстиям вода и грязь остаются в отверстиях до тех пор, пока они не будут очищены. Специальные клипсы надежно зафиксируют коврик в салоне.
Заказывая коврики EVAtuning  от производителя ЕВА-Крым.рф Вы всегда уверены в качестве и долговечности нашей продукции. Гарантия на коврики составляет 1год.",
                "product_other_title" => "Коврики для автомобиля",
                "product_other_text" => "Размеры ковров для вашей машины взяты непосредственно с пола автомобиля, на котором ковры покрывают 95% пола автомобиля. Ковры Eva изготовлены из специального сырья, этиленвинилацетата. Они не растрескиваются зимой, гибки и не ломаются. Они экологически чистые, не деформируются от жары и не имеют запаха, что также подходит для лета. Благодаря специальным отверстиям вода и грязь остаются в отверстиях до тех пор, пока они не будут очищены. Легко чистить Они убираются очень быстро.",

                "product_order_title" => "Сформируйте свой заказ",
                "product_order_sub_step_1" => "1 шаг: ",
                "product_order_sub_step_2" => "2 шаг: ",
                "product_order_sub_step_3" => "3 шаг: ",
                "product_order_sub_step_4" => "4 шаг: ",
                "product_order_sub_step_5" => "5 шаг: ",
                "product_order_sub_step_6" => "6 шаг: ",
                "product_order_sub_step_7" => "7 шаг: ",
                "product_order_sub_title_1" => "выберите комплектацию",
                "product_order_sub_title_2" => "выберите форму ячейки",
                "product_order_sub_title_3" => "выберите цвет коврика",
                "product_order_sub_title_4" => "выберите цвет окантовки",
                "product_order_sub_title_5" => "выберите тип коврика",
                "product_order_sub_title_6" => "наличие тунеля на заднем или переднем ряду",
                "product_order_sub_title_7" => "Подарок",
                "product_order_type_1" => "Тип кузова",
                "product_order_type_2" => "Седан",
                "product_order_type_3" => "Внедорожник",

                "product_order_sub_title_1_text_1" => "Комплект ковриков в салон",
                "product_order_sub_title_1_text_2" => "Коврик в багажник",
                "product_order_sub_title_1_text_3" => "Шильдик",
                "product_order_sub_title_1_text_4" => "Подпятник (пластиковый)",
                "product_order_sub_title_1_text_41" => "Подпятник (алюминиевый)",
                "product_order_sub_title_1_text_42" => "Подпятник (металический)",
                "product_order_sub_title_1_text_43" => "Подпятник (Z-металический)",
                "product_order_sub_title_1_text_11" => "Комплект ковриков на передний ряд (коммерческий транспорт)",

                "product_order_sub_title_1_text_5" => "+Купить отдельно",
                "product_order_sub_title_1_text_6" => "1: Водительский коврик",
                "product_order_sub_title_1_text_7" => "2: Комплект передних ковриков",
                "product_order_sub_title_1_text_8" => "3: Комплект задних ковриков",

                "product_order_sub_title_2_text_1" => "Сота",
                "product_order_sub_title_2_text_2" => "Ромб",

                "product_order_sub_title_3_text_1" => "2d (с разрезом)",
                "product_order_sub_title_3_text_2" => "2d (с 3d лапкой)",
                "product_order_sub_title_3_text_3" => "3d (с бортами)",

                "product_order_sub_title_4_text_1" => "с тунелем",
                "product_order_sub_title_4_text_2" => "без тунеля",

                "product_order_sub_title_5_text_1" => "Подарок!!!",




                "product_order_color_black" => "черный",
                "product_order_color_white" => "белый",
                "product_order_color_gray" => "серый",
                "product_order_color_light_gray" => "светло-серый",
                "product_order_color_blue" => "синий",
                "product_order_color_dark_blue" => "темно-синий",
                "product_order_color_green" => "салатовый",
                "product_order_color_dark_green" => "темно-зеленый",
                "product_order_color_burgundy" => "бордовый",
                "product_order_color_dark_burgundy" => "бордовый",
                "product_order_color_brown" => "коричневый",
                "product_order_color_beige" => "бежевый",
                "product_order_color_dark_beige" => "темно-бежевый",
                "product_order_color_red" => "красный",
                "product_order_color_purple" => "фиолетовый",
                "product_order_color_orange" => "оранжевый",
                "product_order_color_yellow" => "желтый",

                "product_order_color_green_new" => "зеленый",
                "product_order_color_brown_new" => "коричневый",
                "product_order_color_orange_new" => "оранжевый",
                "product_order_color_yellow_new" => "желтый",
                "product_order_color_red_new" => "красный",
                "product_order_color_beige_new" => "бежевый",
                "product_order_color_gray_new" => "серый",
                "product_order_color_blue_new" => "синий",

                "product_order_currancy" => "руб",
                "product_order_send_btn" => "Заказать",
                "category_other" => "Другое",
                "search_label" => "Поиск",
                "search_btn" => "Искать",
                "empty_search" => "По вашему запросу ничего не найдено",
                "product_order_title_text" => "Для увеличения нажмите",
                "select_quantity" => "Выберите количество",
            ),
            2 => array(
                "products_title" => "Знаменитый EVA коврики",
                "products_under_title" => "Лучшое только у нас",

                "category_title" => "Автомобильные коврики",
                "category_left_title_1" => "Автомобильные коврики для",
                "category_left_title_2" => "",
                "category_all_models_btn" => "Все модели",

                "product_title" => "Автомобильные коврики для ",
                "product_text_1_1" => "Коврики для автомобиля",
                "product_text_1_2" => "",
                "product_text_2_1" => "Размеры ковров для модели",
                "product_text_2_2" => "взяты непосредственно с пола автомобиля, на котором ковры покрывают 95% пола автомобиля. Ковры Eva изготовлены из специального сырья, этиленвинилацетата. Они не растрескиваются зимой, гибки и не ломаются. Они экологически чистые, не деформируются от жары и не имеют запаха, что также подходит для лета. Благодаря специальным отверстиям вода и грязь остаются в отверстиях до тех пор, пока они не будут очищены. Легко чистить Они убираются очень быстро.",
                "product_other_title" => "Коврики для автомобиля",
                "product_other_text" => "Размеры ковров для вашей машины взяты непосредственно с пола автомобиля, на котором ковры покрывают 95% пола автомобиля. Ковры Eva изготовлены из специального сырья, этиленвинилацетата. Они не растрескиваются зимой, гибки и не ломаются. Они экологически чистые, не деформируются от жары и не имеют запаха, что также подходит для лета. Благодаря специальным отверстиям вода и грязь остаются в отверстиях до тех пор, пока они не будут очищены. Легко чистить Они убираются очень быстро.",

                "product_order_title" => "Сформируйте свой заказ",
                "product_order_sub_step_1" => "1 шаг: ",
                "product_order_sub_step_2" => "2 шаг: ",
                "product_order_sub_step_3" => "3 шаг: ",
                "product_order_sub_step_4" => "4 шаг: ",
                "product_order_sub_step_5" => "5 шаг: ",
                "product_order_sub_step_6" => "6 шаг: ",
                "product_order_sub_step_7" => "7 шаг: ",
                "product_order_sub_title_1" => "выберите комплектацию",
                "product_order_sub_title_2" => "выберите форму ячейки",
                "product_order_sub_title_3" => "выберите цвет коврика",
                "product_order_sub_title_4" => "выберите цвет окантовки",
                "product_order_sub_title_5" => "выберите тип коврика",
                "product_order_sub_title_6" => "наличие тунеля на заднем или переднем ряду",
                "product_order_sub_title_7" => "Подарок",
                "product_order_type_1" => "Тип кузова",
                "product_order_type_2" => "Седан",
                "product_order_type_3" => "Внедорожник",

                "product_order_sub_title_1_text_1" => "Комплект ковриков в салон",
                "product_order_sub_title_1_text_2" => "Коврик в багажник",
                "product_order_sub_title_1_text_3" => "Значок на коврик",
                "product_order_sub_title_1_text_4" => "Подпятник",

                "product_order_sub_title_1_text_5" => "Купить отдельно",
                "product_order_sub_title_1_text_6" => "1 Водительский коврик",
                "product_order_sub_title_1_text_7" => "2 Пассажирский коврик",
                "product_order_sub_title_1_text_8" => "3 Комплект задних ковриков",

                "product_order_sub_title_2_text_1" => "Сота",
                "product_order_sub_title_2_text_2" => "Ромб",

                "product_order_color_black" => "черный",
                "product_order_color_white" => "белый",
                "product_order_color_gray" => "серый",
                "product_order_color_light_gray" => "светло-серый",
                "product_order_color_blue" => "синий",
                "product_order_color_dark_blue" => "темно-синий",
                "product_order_color_green" => "салатовый",
                "product_order_color_dark_green" => "темно-зеленый",
                "product_order_color_burgundy" => "бордовый",
                "product_order_color_dark_burgundy" => "бордовый",
                "product_order_color_brown" => "коричневый",
                "product_order_color_beige" => "бежевый",
                "product_order_color_dark_beige" => "темно-бежевый",
                "product_order_color_red" => "красный",
                "product_order_color_purple" => "фиолетовый",
                "product_order_color_orange" => "оранжевый",
                "product_order_color_yellow" => "желтый",

                "product_order_color_green_new" => "зеленый",
                "product_order_color_brown_new" => "коричневый",
                "product_order_color_orange_new" => "оранжевый",
                "product_order_color_yellow_new" => "желтый",
                "product_order_color_red_new" => "красный",
                "product_order_color_beige_new" => "бежевый",
                "product_order_color_gray_new" => "серый",
                "product_order_color_blue_new" => "синий",

                "product_order_currancy" => "руб",
                "product_order_send_btn" => "Заказать",
                "category_other" => "Другое",
                "search_label" => "Поиск",
                "search_btn" => "Искать",
                "empty_search" => "По вашему запросу ничего не найдено",
                "product_order_title_text" => "Для увеличения нажмите",
                "select_quantity" => "Выберите количество",
            ),
            3 => array(
                "products_title" => "Знаменитый EVA коврики",
                "products_under_title" => "Лучшое только у нас",

                "category_title" => "Автомобильные коврики",
                "category_left_title_1" => "Автомобильные коврики для",
                "category_left_title_2" => "",
                "category_all_models_btn" => "Все модели",

                "product_title" => "Автомобильные коврики для ",
                "product_text_1_1" => "Коврики для автомобиля",
                "product_text_1_2" => "",
                "product_text_2_1" => "Размеры ковров для модели",
                "product_text_2_2" => "взяты непосредственно с пола автомобиля, на котором ковры покрывают 95% пола автомобиля. Ковры Eva изготовлены из специального сырья, этиленвинилацетата. Они не растрескиваются зимой, гибки и не ломаются. Они экологически чистые, не деформируются от жары и не имеют запаха, что также подходит для лета. Благодаря специальным отверстиям вода и грязь остаются в отверстиях до тех пор, пока они не будут очищены. Легко чистить Они убираются очень быстро.",
                "product_other_title" => "Коврики для автомобиля",
                "product_other_text" => "Размеры ковров для вашей машины взяты непосредственно с пола автомобиля, на котором ковры покрывают 95% пола автомобиля. Ковры Eva изготовлены из специального сырья, этиленвинилацетата. Они не растрескиваются зимой, гибки и не ломаются. Они экологически чистые, не деформируются от жары и не имеют запаха, что также подходит для лета. Благодаря специальным отверстиям вода и грязь остаются в отверстиях до тех пор, пока они не будут очищены. Легко чистить Они убираются очень быстро.",

                "product_order_title" => "Сформируйте свой заказ",
                "product_order_sub_step_1" => "1 шаг: ",
                "product_order_sub_step_2" => "2 шаг: ",
                "product_order_sub_step_3" => "3 шаг: ",
                "product_order_sub_step_4" => "4 шаг: ",
                "product_order_sub_title_1" => "выберите комплектацию",
                "product_order_sub_title_2" => "выберите форму ячейки",
                "product_order_sub_title_3" => "выберите цвет коврика",
                "product_order_sub_title_4" => "выберите цвет окантовки",
                "product_order_type_1" => "Тип кузово",
                "product_order_type_2" => "Седан",
                "product_order_type_3" => "Внедорожник",

                "product_order_sub_title_1_text_1" => "Комплект ковриков в салон",
                "product_order_sub_title_1_text_2" => "Коврик в багажник",
                "product_order_sub_title_1_text_3" => "Значок на коврик",
                "product_order_sub_title_1_text_4" => "Подпятник",

                "product_order_sub_title_1_text_5" => "Купить отдельно",
                "product_order_sub_title_1_text_6" => "1 Водительский коврик",
                "product_order_sub_title_1_text_7" => "2 Пассажирский коврик",
                "product_order_sub_title_1_text_8" => "3 Комплект задних ковриков",

                "product_order_sub_title_2_text_1" => "Сота",
                "product_order_sub_title_2_text_2" => "Ромб",

                "product_order_color_black" => "черный",
                "product_order_color_white" => "белый",
                "product_order_color_gray" => "серый",
                "product_order_color_light_gray" => "светло-серый",
                "product_order_color_blue" => "синий",
                "product_order_color_dark_blue" => "темно-синий",
                "product_order_color_green" => "салатовый",
                "product_order_color_dark_green" => "темно-зеленый",
                "product_order_color_burgundy" => "бордовый",
                "product_order_color_dark_burgundy" => "бордовый",
                "product_order_color_brown" => "коричневый",
                "product_order_color_beige" => "бежевый",
                "product_order_color_dark_beige" => "темно-бежевый",
                "product_order_color_red" => "красный",
                "product_order_color_purple" => "фиолетовый",
                "product_order_color_orange" => "оранжевый",
                "product_order_color_yellow" => "желтый",

                "product_order_color_green_new" => "зеленый",
                "product_order_color_brown_new" => "коричневый",
                "product_order_color_orange_new" => "оранжевый",
                "product_order_color_yellow_new" => "желтый",
                "product_order_color_red_new" => "красный",
                "product_order_color_beige_new" => "бежевый",
                "product_order_color_gray_new" => "серый",
                "product_order_color_blue_new" => "синий",

                "product_order_currancy" => "руб",
                "product_order_send_btn" => "Заказать",
                "category_other" => "Другое",
                "search_label" => "Поиск",
                "search_btn" => "Искать",
                "empty_search" => "По вашему запросу ничего не найдено",
                "product_order_title_text" => "Для увеличения нажмите",
                "select_quantity" => "Выберите количество",
            ),
        );
        return  $tr[LG];
    }

    function getMan(){
        $sql = "SELECT * FROM manufacture ORDER BY `title`";
        $arr = $this->query($sql);
        return $arr;
    }

    function getCatsNew($name){
        $sql = "SELECT * FROM manufacture WHERE `title` = '$name'";
        $arr = $this->query($sql);

        $sql = "SELECT * FROM seria WHERE manufacture_id = ".$arr[0]['id'];
        $arr = $this->query($sql);
        foreach ($arr as $k => $v){
            $sql = "SELECT * FROM model WHERE seria_id = " . $v['id'] . " ORDER BY title";
            $arrTmp = $this->query($sql);
            //Нужеж forech для прохода во всех хначениях
            foreach ($arrTmp as $key => $value) {
                $arrTmp[$key]['title_url'] = str_replace('/', '_', str_replace(' ', '_', $arrTmp[$key]['title']));
            }
            $arrTmp[0]['title_url'] = str_replace('/', '_', str_replace(' ', '_', $arrTmp[0]['title']));
            $arr[$k]['childs'] = $arrTmp;
        }


        return $arr;
    }

    function getManSingleNew($name){
        $sql = "SELECT * FROM manufacture WHERE `title` = '$name' order by `title`";
        $arr = $this->query($sql);
        
        $arr[0]['title'] = ucfirst($arr[0]['title']);
        
       # print_r($arr);
        
        return $arr[0];
    }

    function getCar($name){
        
        
        $name = str_replace('/','_', $name);

        
        $newName = str_replace('_',' ', $name);
        $sql = "SELECT * FROM model WHERE `title` = '$newName'";
        $arr = $this->query($sql);
        return $arr[0];
    }

    function getCarID($id){
        $sql = "SELECT * FROM model WHERE `id` = '$id'";
        $arr = $this->query($sql);
        return $arr[0];
    }

    function getPrice($id){
        $sql = "SELECT * FROM price WHERE id = ".$id;
        $arr = $this->query($sql);
        return $arr[0];
    }
    
    function getManufacturerFromCarName($name){

        $sql = "SELECT * FROM `seria` WHERE `id` = '".$name['seria_id']."'";
        $arr = $this->query($sql);

        $sql2 = "SELECT * FROM `manufacture` WHERE `id` = '".$arr[0]['manufacture_id']."' order by `title`";
        $arr2 = $this->query($sql2);
        
                $arr2[0]['title'] = ucfirst($arr2[0]['title']);


        return $arr2[0];       
    }
    
    function getSeriaFromCarName($name){

        $sql = "SELECT * FROM `seria` WHERE `id` = '".$name['seria_id']."'";
        $arr = $this->query($sql);

        return $arr[0];       
    }

    function searchCars($s){
        $ss = explode(" ",$s);
        $s = "'%".implode("%",$ss)."%'";
        $sql = "SELECT * FROM model WHERE title LIKE ".$s;
        $arr = $this->query($sql);

        
        foreach ($arr as $key => $value) {
            $arr[$key]['title_url'] = str_replace(' ', '_', $arr[$key]['title']);
        }
        return $arr;
    }
}