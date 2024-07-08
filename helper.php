<?php

function data_protect($data){
    htmlentities(trim($data));
}

?>