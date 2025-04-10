<?php

class model_admin_price extends Model{
    function getPrice(){
        $sql = "SELECT * FROM price ORDER BY id";
        $arr = $this->query($sql);
        return $arr;
    }

    function save($arr,$id){
        $this->updata("price",$arr,array("id" => $id));
    }
}