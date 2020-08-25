<header class="mdc-top-app-bar">
  <div class="mdc-top-app-bar__row">
    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
      <a href="/" class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button"
        aria-label="Open navigation menu">menu</a>
      <span class="mdc-top-app-bar__title">Page title</span>
    </section>

    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
      <a href="/contact" class="mdc-button mdc-button--raised">Контакты</a>
      <a href="/portfolio" class="mdc-button mdc-button--raised">Портфолио</a>
      <a href="/services" class="mdc-button mdc-button--raised">Сервисы</a>
      <a href="/cam" class="mdc-button mdc-button--raised">Камера</a>
      <a href="/quiz" class="mdc-button mdc-button--raised">Викторина</a>
    </section>

    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
      <?php if (array_key_exists('loginUser', $_SESSION)) :  ?>
      <?php echo $_SESSION['loginUser']; ?>
      <form method="post" action="post/logout.php">
        <div style="padding: 10px">
          <input class="mdc-button mdc-button--raised" type="submit" name="logout" value="Выйти">
        </div>
      </form>
      <?php else : ?>
      <a href="/register" class="mdc-button mdc-button--raised">Регистрация</a>
      <a href="/login" class="mdc-button mdc-button--raised">Войти</a>
      <?php endif; ?>
    </section>
  </div>
</header>