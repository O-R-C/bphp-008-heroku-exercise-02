<?php

declare(strict_types=1);

function getFormUserName(null|string $errorMessage = null): string
{
  $errorClass = $errorMessage ? 'error-message active' : 'error-message';

  return <<<HTML
  <form action="post.php" method="post" class="form">
    <label for="user_name">Имя пользователя</label>
    <input type="text" name="user_name" id="user_name" placeholder="Введите имя пользователя" required/>
    <p class="{$errorClass}">{$errorMessage}</p>
    <button type="submit">Отправить</button>
  </form>
  HTML;
}
