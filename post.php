<?php

declare(strict_types=1);

session_start();

if (isset($_SESSION['user_name_error'])) {
  unset($_SESSION['user_name_error']);
}

$userName = trim($_POST['user_name']);

if (isset($_POST['user_name']) && !empty($userName)) {
  $_SESSION['user_name'] = $userName;
} else {
  $_SESSION['user_name_error'] = 'Нужно ввести имя пользователя';
}

header('Location: index.php');
