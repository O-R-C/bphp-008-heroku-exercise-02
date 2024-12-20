<?php

declare(strict_types=1);

function getFormUserName(null|string $errorMessage = null): string
{
  $errorClass = $errorMessage ? 'error-message active' : 'error-message';

  return <<<HTML
  <form action="post.php" method="post" class="form">
    <p class="{$errorClass}">{$errorMessage}</p>
    <label for="user_name">Имя пользователя</label>
    <input type="text" name="user_name" id="user_name" />
    <button type="submit">Отправить</button>
  </form>
  HTML;
}
