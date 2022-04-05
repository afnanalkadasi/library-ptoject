<?php

namespace coding\app\models;

class User_token extends Model{
    function __construct()
    {

        parent::$tblName="user_tokens";
    }
}
?>