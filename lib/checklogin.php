<?php
    $path = realpath(dirname(__FILE__));

    require_once($path . '/../class/customer.php');

    $customerModel = new Customer();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $checklogin = $customerModel -> checkLogin($username, $password);
    if($checklogin){
        echo 0;
    }
    else {
        echo 1;
    }
?>