<?php
require '../Db.php';
$user = [];
foreach ($_POST as $key => $value){
    $keyUser = strval(htmlspecialchars($key));
    $valueUser = strval(htmlspecialchars($value));
    $user[$keyUser] = $valueUser;
}
$db = new Db();
$hashedParams = ['password', 'email', 'fio', 'contacts'];
foreach($user as $key => &$value) {
    if (in_array($key, $hashedParams)) {
        if ($value != null) {
            $value = password_hash($value, PASSWORD_DEFAULT);
        }
    }
}
if (!empty($user['login']) && !empty($user['password']) && !empty($user['email'])){
    $response = $db->registration($user['login'], $user['password'], $user['email'], $user['fio'], $user['contacts']);
    if ($response['status']) {
        echo 'you are successfully registered '.$response['data']['login'];
    } else {
        echo 'not registered.'.$response['errorInfo'];
    }
} else {
    die('Enter all data');
}