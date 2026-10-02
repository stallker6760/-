<?php

$users = [
    [
        "user_name" => "Алексей",
        "user_age" => 21,
        "user_login" => "alex",
        "user_password" => "Alex@123"
    ],
    [
        "user_name" => "Мария",
        "user_age" => 19,
        "user_login" => "maria",
        "user_password" => "Maria#456"
    ],
    [
        "user_name" => "Иван",
        "user_age" => 25,
        "user_login" => "ivan",
        "user_password" => "Ivan_789"
    ]
];

$user_login = "alex";
$user_password = "Alex@123";

$found_user = null;

foreach ($users as $user) {
    if ($user["user_login"] === $user_login) {
        $found_user = $user;
        break;
    }
}

if ($found_user === null) {
    echo "Пользователь с таким логином не существует. ";
} elseif ($found_user["user_password"] !== $user_password) {
    echo "Некорректный пароль. ";
} else {

    echo "Имя пользователя: " . $found_user["user_name"] . " ";
    echo "Возраст: " . $found_user["user_age"] . " ";
    

    $has_min_length = mb_strlen($user_password) >= 8;
    $has_digit = preg_match('/[0-9]/', $user_password) === 1;
    $has_special_char = preg_match('/[@&%#\[\]()_!]/', $user_password) === 1;

    if (!$has_min_length || !$has_digit || !$has_special_char) {
        echo "Внимание! Пароль является слабым. ";
    }
}