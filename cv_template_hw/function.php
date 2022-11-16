<?php
function cv_redirect($path){
    header("location:$path");
    exit();
}