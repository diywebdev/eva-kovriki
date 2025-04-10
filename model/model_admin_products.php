<?php

class Model_admin_products extends Model{
    function getMan(){
        $sql = "SELECT * FROM manufacture ORDER BY pos";
        $arr = $this->query($sql);
        return $arr;
    }

    function getCats($id){
        $sql = "SELECT * FROM seria WHERE manufacture_id = ".$id;
        $arr = $this->query($sql);
        foreach ($arr as $k => $v){
            $sql = "SELECT * FROM model WHERE seria_id = ".$v['id'];
            $arr[$k]['childs'] = $this->query($sql);
        }
        return $arr;
    }

    function getCar($id){
        $sql = "SELECT * FROM model WHERE id = ".$id;
        $arr = $this->query($sql);
        return $arr[0];
    }

    function getManSingle($id){
        $sql = "SELECT * FROM manufacture WHERE id = ".$id;
        $arr = $this->query($sql);
        return $arr[0];
    }

    function addCar($arr){
        $this->insert('model',$arr);
    }

    function deleteCar($id){
        $this->delete('model',array("id" => $id));
    }

    function deleteCat($id){
        $this->delete('seria',array("id" => $id));
    }

    function setSale($arr){
        $this->updata("sale",$arr,array("id" => 1));
    }

    function updataMan($id,$pos){
        $this->updata("manufacture",array("pos" => $pos),array("id" => $id));
    }

    function updataType($id,$type){
        $this->updata("model",array("type" => $type),array("id" => $id));
    }

}