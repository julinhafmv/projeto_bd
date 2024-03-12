<?php
include_once("include/factory.php");

if(!Auth::is_authenticaded()){
    header("location: login.php");
    exit();
}
?>