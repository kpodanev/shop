      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">Main</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php echo ($action == 'home') ? 'active' : '' ?>">
              <a class="nav-link" href="/index.php?action=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?=($action == 'about') ? 'active' : '' ?>">
              <a class="nav-link" href="/index.php?action=about">About</a>
            </li>
          </ul>
          <form class="nav-item">
            <button class="nav-link" href="/index.php?action=basket">Корзина</button>
          </form>
        </div>
      </nav>