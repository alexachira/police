<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">police</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home.php">home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="suspects.php">suspects</a>
            </li>
<?php if ($_SESSION["user"]["type"] == "admin"):?>
            <li class="nav-item">
                <a class="nav-link" href="admin.php">admin</a>
            </li>
<?php endif; ?>

        <li class="nav-item">
                <a class="nav-link" href="released.php">released</a>
            </li>
        </ul>
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link" href="#">
          <?php
          echo  $_SESSION['user'] ['names'];

          ?>

          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>

      </li>


  </ul>

    </div>
</nav>