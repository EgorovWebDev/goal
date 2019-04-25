
<?php
require '../Db.php';
$user = [];
foreach ($_POST as $key => $value){
    $keyUser = strval(htmlspecialchars($key));
    $valueUser = strval(htmlspecialchars($value));
    $user[$keyUser] = $valueUser;
}
$db = new Db();
if (!empty($user['login'])){
    $response = $db->getLogin($user['login']);
    if ($response['status']) {
        if (password_verify($user['password'], $response['data']['password'])) {
            echo 'you are logged in successfully, '.$response['data']['login'];
        } else {
            die('Wrong username or password');
        }
    } else {
        echo 'I failed to join.'.$response['errorInfo'];
    }
} else {
    die('Wrong username or password');
}