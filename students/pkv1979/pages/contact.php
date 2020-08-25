<h1>Обратная связь</h1>

<form method="post" action="post/contact.php">
  <p>Имя пользователя</p>
  <label class="mdc-text-field mdc-text-field--filled">
    <input class="mdc-text-field__input" type="text" name="username">
    <span class="mdc-line-ripple"></span>
  </label>

  <p>Телефон</p>
  <label class="mdc-text-field mdc-text-field--filled">
    <input class="mdc-text-field__input" type="tel" name="phone">
    <span class="mdc-line-ripple"></span>
  </label>


  <p>Адрес</p>
  <label class="mdc-text-field mdc-text-field--textarea">
    <textarea rows="8" cols="40" name="adress"></textarea>
  </label>

  <div style="padding: 10px">
    <input class="mdc-button mdc-button--raised" type="submit" name="send" value="Отправить">
  </div>
</form>