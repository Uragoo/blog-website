<!-- Header of the website -->
<header>
    <div class="logo">
        <!-- Website title -->
        <a href="<?php echo BASE_URL . '/index.php' ?>"><h1 class="logo-title"><span>Ghi</span>blog</h1></a>
    </div>
    <!-- Adding a menu icon for mobile users -->
    <i class="fa fa-bars menu-icon"></i>
    <!-- Navigation bar -->
    <ul class="nav">
        <li><a href="<?php echo BASE_URL . '/index.php' ?>"><i class="fa-solid fa-house"></i>Home</a></li>
        <li><a href="<?php echo BASE_URL . '/about.php' ?>">About</a></li>
        <li><a href="#">Services</a></li>
        <!-- <li><a href="#">Sign Up</a></li>
        <li><a href="#">Login</a></li> -->
        <li>
            <a href="#">
                <i class="fa fa-user"></i>
                Théo
                <i class="fa fa-chevron-down"></i>
            </a>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#" class="logout">Logout</a></li>
            </ul>
        </li>
    </ul>
</header>