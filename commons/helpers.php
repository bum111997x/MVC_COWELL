<?php

const BASE_URL = "http://localhost:81/final_php2_tungntph15959/";

function gender($value){
    if ($value == 0 ){
        return 'nam';
    }elseif ($value == 1){
        return 'nu';
    }elseif ($value == 2){
        return 'khac';
    }
}

?>