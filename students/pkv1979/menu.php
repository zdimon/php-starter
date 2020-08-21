<header class="mdc-top-app-bar">
  <div class="mdc-top-app-bar__row">
    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
      <a href="/" class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button"
        aria-label="Open navigation menu">menu</a>
      <span class="mdc-top-app-bar__title">Page title</span>
    </section>

    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
      <a href="/contact" class="mdc-button mdc-button--raised">Contact</a>
      <a href="/portfolio" class="mdc-button mdc-button--raised">Portfolio</a>
      <a href="/services" class="mdc-button mdc-button--raised">Services</a>
      <a href="/cam" class="mdc-button mdc-button--raised">Camera</a>
      <a href="/quiz" class="mdc-button mdc-button--raised">Quiz</a>
    </section>

    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
      <?php if (array_key_exists('loginUser', $_SESSION)):  ?>
      <?php echo $_SESSION['loginUser']; ?>
      <form method="post" action="post/logout.php">
        <div style="padding: 10px">
          <input class="mdc-button mdc-button--raised" type="submit" name="logout" value="Выйти">
        </div>
      </form>
      <?php else: ?>
      <a href="/login" class="mdc-button mdc-button--raised">Login</a>
      <?php endif; ?>
    </section>
  </div>
</header>