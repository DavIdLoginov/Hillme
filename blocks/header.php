<header class="header">
  <div class="header__warning">
    <div class="container">
      <strong>WARNING:</strong> MINORS are prohibited from buying e-cigarettes.
    </div>
  </div>

  <div class="header__content">
    <div class="container">
      <div class="header__inner">
        <div class="header__logo">
          <a href="index.php" class="logo">
            <img src="images/logo.svg" alt="">
          </a>
        </div>

        <div class="header__nav">
          <div class="menu-popup">
            <div class="menu-popup__bg"></div>
            <div class="menu-popup__inner">
              <button type="button" class="menu-popup__close close-btn"></button>
              <div class="menu-popup__content">
                <nav class="nav">
                  <ul>
                    <li>
                      <a href="index.php"<?= $page === 'home' ? ' class="is-active"' : ''; ?>>Home</a>
                    </li>
                    <li>
                      <a href="products-classic.php"<?= $page === 'products' ? ' class="is-active"' : ''; ?>>Products</a>
                    </li>
                    <li>
                      <a href="about.php"<?= $page === 'about' ? ' class="is-active"' : ''; ?>>About us</a>
                    </li>
                    <li>
                      <a href="partner.php"<?= $page === 'partner' ? ' class="is-active"' : ''; ?>>Become a partner</a>
                    </li>
                    <li>
                      <a href="contacts.php"<?= $page === 'contacts' ? ' class="is-active"' : ''; ?>>Contacts</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>

        <div class="header__search">
          <div class="search">
            <form class="search__form">
              <div class="search__wrapper">
                <input type="text" class="search__input form-control" name="search" required placeholder="Enter keywords">
                <button type="submit" class="search__btn">
                  <svg class="icon" width="21" height="21"><use xlink:href="#icon-search"></use></svg>
                </button>
              </div>
            </form>
          </div>
        </div>

        <div class="header__burger">
          <button type="button" class="menu-btn">
            <span></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</header>