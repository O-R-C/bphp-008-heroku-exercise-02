<?php

declare(strict_types=1);

require_once './showLoginPage.php';
require_once './showHello.php';

session_start();

if (isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])) {
  showHello($_SESSION['user_name'] ?? 'Guest');
  exit;
} else {
  showLoginPage($_SESSION['user_name_error'] ?? null);
}
