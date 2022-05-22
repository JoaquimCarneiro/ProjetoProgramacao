<?php
function debug($activo, $vars){
    if($activo){
        echo "<pre>";
            print_r($vars);
        echo "</pre>";
    }
}