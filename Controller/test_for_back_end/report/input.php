<?php
class input{
    function post($var){
        if($var == ''){
            return false;
        }

        return true;
    }
}

?>
