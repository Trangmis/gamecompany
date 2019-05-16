<nav class="navbar navbar-expand-lg navbar-dark bg-dark-blue mb-3">
    <div class="container">
        <a class="navbar-brand text-white" href="<?php echo URLROOT; ?>">
            <?php echo SITENAME; ?>
        </a>
        <button class="navbar-toggler cursor-pointer" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php echo ($page == 'home') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
                </li>
                <li class="nav-item <?php echo ($page == 'about') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/Pages/About">About</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <?php if(isset($_SESSION["user_id"])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Wish to Logout <?php echo $_SESSION['user_name'];?>?</a>
                </li>

                <?Php else : ?>
                <li class="nav-item <?php echo ($page == 'register') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
                </li>
                <li class="nav-item <?php echo ($page == 'login') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
