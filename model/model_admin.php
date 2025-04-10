<?php

class Model_admin extends Model{
    function addMan($arr){
        return $this->insert('manufacture',$arr);
    }

    function addSer($arr){
        return $this->insert('seria',$arr);
    }

    function addCar($arr){
        return $this->insert('model',$arr);
    }

}