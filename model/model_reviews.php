<?php

class Model_reviews extends Model
{
    function translite()
    {
        $tr = array(
            1 => array(
                "title" => "Отзывы наших клиентов",
                "add_review_btn" => "Оставить отзыв",
                "modal_title" => "Оставить отзыв",
                "modal_name" => "Имя Фамилия",
                "modal_text" => "Отзыв",
                "modal_img" => "Загрузить фотографию",
                "modal_send_btn" => "Отправить",
            ),
            2 => array(
                "title" => "Відгуки наших клієнтів",
                "add_review_btn" => "Залишити відгук",
                "modal_title" => "Залишити відгук",
                "modal_name" => "Ім'я Прізвище",
                "modal_text" => "Відгук",
                "modal_img" => "Завантажити фотографію",
                "modal_send_btn" => "Надіслати",
            ),
            3 => array(
                "title" => "Безнең клиентлардан җавап",
                "add_review_btn" => "Фикерләр бирегез",
                "modal_title" => "Фикерләр бирегез",
                "modal_name" => "Исем Фамилия",
                "modal_text" => "Фикер алышу",
                "modal_img" => "Фото йөкләү өчен",
                "modal_send_btn" => "Хәбәр җибәр",
            ),
        );
        return $tr[LG];
    }

    function addReview($arr){
        $this->insert('reviews',$arr);
    }

    function getAll(){
        $sql = "SELECT * FROM reviews WHERE status = '1' ORDER BY id DESC";
        $arr = $this->query($sql);
        return $arr;
    }


}