<?php

declare(strict_types=1);

session_start();

if (isset($_POST['user_name']) && !empty($_POST['user_name'])) {
  $_SESSION['user_name'] = $_POST['user_name'];
} else {
  $_SESSION['user_name_error'] = 'Нужно ввести имя пользователя';
}

header('Location: index.php');
