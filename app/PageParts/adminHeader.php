<header>
    <div class="logo">
        <!-- Website title -->
        <a href="<?php echo BASE_URL . '/index.php' ?>"><h1 class="logo-title"><span>Ghi</span>blog</h1></a>
    </div>
    <!-- Adding a menu icon for mobile users -->
    <i class="fa fa-bars menu-icon"></i>
    <!-- Navigation bar -->
    <ul class="nav">
        <?php if (isset($_SESSION['id'])): ?>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul>
                    <li><a href="<?php echo BASE_URL . "/logout.php" ?>" class="logout">Logout</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</header>