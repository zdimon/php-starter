<h1>Войти в систему</h1>

<!-- <form method="post" action="post/login.php">
  <p>Имя пользователя</p>
  <label class="mdc-text-field mdc-text-field--filled">
    <input class="mdc-text-field__input" type="text" name="username">
    <span class="mdc-line-ripple"></span>
  </label>

  <p>Пароль:</p>
  <label class="mdc-text-field mdc-text-field--filled">
    <input class="mdc-text-field__input" type="password" name="password">
    <span class="mdc-line-ripple"></span>
  </label>

  <div style="padding: 10px">
    <input class="mdc-button mdc-button--raised" type="submit" name="send" value="Войти">
  </div>
</form> -->

<?php
$form = createForm('login');
$form->show();
?>