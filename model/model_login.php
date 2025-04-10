<?php

class Model_login extends Model{

    function checkLoginAdmin($login,$pass){
        $sql = "SELECT * FROM admin WHERE login = '".$login."' AND pass = '".$pass."'";
        $arr = $this->query($sql);
        return $arr;
    }
}