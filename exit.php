<?php

declare(strict_types=1);

session_start();

if (isset($_SESSION['user_name'])) {
  unset($_SESSION['user_name']);
}

header('Location: index.php');
