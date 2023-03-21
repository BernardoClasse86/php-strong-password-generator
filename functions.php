<?php
function generatePassword($password_length) {

    $numbers = '0123456789';
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols = '!?@#$%*&+=';
    $total = $numbers . $characters . $symbols;
    $shuffled_total = str_shuffle($total);
    $password = substr($shuffled_total, 0, $password_length);
    
    return $password;
}
?>