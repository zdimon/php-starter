<h1>Обратная связь</h1>

<form method="POST"  action="post/contact.php">

    <p>Имя</p>

    <label class="mdc-text-field mdc-text-field--filled">
        <input class="mdc-text-field__input" type="text" name="username" />
        <span class="mdc-line-ripple"></span>
    </label>


    <p>Сообщение</p>
    <label class="mdc-text-field mdc-text-field--textarea">
        <textarea rows="8" cols="40" name="usertext"></textarea>
       
    </label>

    <div style="padding: 10px">
      <input class="mdc-button mdc-button--raised" type="submit" name="Отправить" value="Отправить" />
    </div>

</form>

