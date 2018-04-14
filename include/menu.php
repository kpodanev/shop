      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php echo ($action == 'home') ? 'active' : '' ?>">
              <a class="nav-link" href="/index.php?action=home">Главная</a>
            </li>
            <li class="nav-item <?=($action == 'about') ? 'active' : '' ?>">
              <a class="nav-link" href="/index.php?action=about">О нас</a>
            </li>
              <li class="nav-item <?=($action == 'article') ? 'active' : '' ?>">
              <a class="nav-link" href="/index.php?action=article">Статья</a>
            </li>
              <li class="nav-item <?=($action == 'store') ? 'active' : '' ?>">
              <a class="nav-link" href="/index.php?action=store">Магазин</a>
            </li>
          </ul>
          <form>
            <button class="nav-link" href="/index.php?action=cart">Корзина</button>
          </form>
        </div>
      </nav>