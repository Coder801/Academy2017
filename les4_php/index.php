<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formError = [];

    foreach ($_POST as $key => $value) {
        if(!$validateStrLen($value)) {
            $formError[$key] = 'custom error msg';
        } break;
    }
    if(!validateEmail($_POST['email'])) {
        $formError['email'] = 'invalid email';
    }
    if(!validForm) {
        header("Locatin: /");
    }

//validation
    //name 3+
    //email @ . whitespace [A-Z0-9@.]
    //text 2

//filtering

//save
}

function validateStrLen ($str, $min)
{
    return $str != '';
}

function validateEmail ($str)
{
    if(!isValidEmailString($srt)) return false;
    if(!hasValidEmailSchema($srt)) return false;



    $s = ord($str[0]);
    if ($s < 48 || $s > 122) {
        return false;
    }
    if ($s > 57 && $s < 65) {
        return false;
    }
    if ($s > 90 && $s < 97) {
        return false;
    }
    return true;
}


function isValidEmailString($srt)
{
    if(strstr($str, " ")) {
        return false;
    }

    if(substr_count($str, "@") != 1) {
        return false;
    }
}

function hasValidEmailString($srt)
{
    $arr = explode('@', $str);
    if(count($arr) !=2) return false;

    $arr = explode('.', $arr[1]);
    if(count($arr) < 2) return false;
    foreach ($arr as $value) {
        if(!validateStrLen($value)) return false;
    }
}

require_once "form.html";
