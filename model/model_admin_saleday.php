<?php

class model_admin_saleday extends Model{
    function save($value,$id){
        $value = str_replace(',','.',$value);
        $this->updata("saleday",array("value" => $value),array("id" => $id));
    }

    function deleteSale(){
        $sale = $this->getSale();
        foreach ($sale as $id => $value){
            $id++;
            $this->updata("saleday",array("value" => 0),array("id" => $id));
        }
    }

    function getSale() {
        $sql = "SELECT * FROM saleday ORDER BY id";
        $arr = $this->query($sql);
        return $arr;
    }

}