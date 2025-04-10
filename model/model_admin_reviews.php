<?php

class Model_admin_reviews extends Model{
    function getAll(){
        $sql = "SELECT * FROM reviews";
        $arr = $this->query($sql);
        return $arr;
    }

    function changeStatus($id,$status){
        $this->updata('reviews',array("status" => $status),array("id" => $id));
    }

    function deleteReview($id){
        $this->delete("reviews",array("id" => $id));
    }
}