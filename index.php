<?php

declare(strict_types=1);

require_once './showLoginPage.php';
require_once './showHelloPage.php';

session_start();

if (isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])) {
  showHelloPage($_SESSION['user_name']);
} else {
  showLoginPage($_SESSION['user_name_error'] ?? null);
}
