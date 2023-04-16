<?php 
include("path.php");
include(ROOT_PATH . "/app/database/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Links for fonts and icons -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f5f03b58c.js" crossorigin="anonymous"></script>
    <!-- Link to css file -->
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Ghiblog</title>
</head>
<body background="assets/img/background.jpg">
    <!-- Class used to make page fade into view -->
    <div class="fade-in">
        
        <div id="MainContainer">
            <!-- Header of the website -->
            <?php include(ROOT_PATH . "/app/PageParts/header.php"); ?>

            <!-- Display a message whenever there is one in the session -->
            <?php include(ROOT_PATH . "/app/PageParts/messages.php"); ?>

            <!-- Div tag that will wrap the entire content of the page -->
            <div class="page-wrap">
                <!-- Div tag that contains the carousel of popular posts -->
                <div class="carousel">
                    <h1 class="carousel-title">Popular Posts</h1>
                    <i class="fa-solid fa-chevron-left previous"></i>
                    <!-- Div tag that contains the popular posts -->
                    <div class="post-wrap">
                        <!-- Div tags that contain the posts themselves -->
                        <div class="post">
                            <img src="assets/img/ghibli-studios.PNG" alt="ghibli-presentation" class="post-image">
                            <div class="post-info">
                                <h3><a href="#">What is Studio Ghibli ?</a></h3>
                                <i class="far fa-user"> Theo</i>
                                &nbsp;
                                <i class="far fa-calendar"> Mar 29, 2023</i>
                            </div>
                        </div>
                        <div class="post">
                            <img src="assets/img/my-neighbor-totoro.jpg" alt="totoro" class="post-image">
                            <div class="post-info">
                                <h3><a href="#">My Neighbor Totoro</a></h3>
                                <i class="far fa-user"> Theo</i>
                                &nbsp;
                                <i class="far fa-calendar"> Mar 29, 2023</i>
                            </div>
                        </div>
                        <div class="post">
                            <img src="assets/img/howls-moving-castle.jpg" alt="howls-moving-castle" class="post-image">
                            <div class="post-info">
                                <h3><a href="#">Howl's Moving Castle</a></h3>
                                <i class="far fa-user"> Theo</i>
                                &nbsp;
                                <i class="far fa-calendar"> Mar 29, 2023</i>
                            </div>
                        </div>
                        <div class="post">
                            <img src="assets/img/spirited-away.avif" alt="spirited-away" class="post-image">
                            <div class="post-info">
                                <h3><a href="#">Spirited Away</a></h3>
                                <i class="far fa-user"> Theo</i>
                                &nbsp;
                                <i class="far fa-calendar"> Mar 29, 2023</i>
                            </div>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-right next"></i>
                </div>

                <!-- Div tag that contains the content of the page -->
                <div class="content clear">
                    <!-- Div tag that contains the main content of the page -->
                    <div class="main-content">
                        <h1 class="recent-post-title">Recent Posts</h1>
                        <!-- Div tag that contains the post itself -->
                        <div class="post clear">
                            <img src="assets/img/ghibli-studios.PNG" alt="ghibli-presentation" class="post-image">
                            <div class="post-preview">
                                <h2><a href="#">What is Studio Ghibli ?</a></h2>
                                <i class="far fa-user"> Theo</i>
                                &nbsp;
                                <i class="far calendar"> Mar 30, 2023</i>
                                <p class="preview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed molestie nulla. Pellentesque blandit mauris magna, et pretium risus elementum.</p>
                                <a href="#" class="button">Read More</a>
                            </div>
                        </div>
                        <div class="post clear">
                            <img src="assets/img/my-neighbor-totoro.jpg" alt="totoro" class="post-image">
                            <div class="post-preview">
                                <h2><a href="#">My Neighbor Totoro</a></h2>
                                <i class="far fa-user"> Theo</i>
                                &nbsp;
                                <i class="far calendar"> Mar 30, 2023</i>
                                <p class="preview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed molestie nulla. Pellentesque blandit mauris magna, et pretium risus elementum.</p>
                                <a href="#" class="button">Read More</a>
                            </div>
                        </div>
                        <div class="post clear">
                            <img src="assets/img/howls-moving-castle.jpg" alt="howls-moving-castle" class="post-image">
                            <div class="post-preview">
                                <h2><a href="#">Howl's Moving Castle</a></h2>
                                <i class="far fa-user"> Theo</i>
                                &nbsp;
                                <i class="far calendar"> Mar 30, 2023</i>
                                <p class="preview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed molestie nulla. Pellentesque blandit mauris magna, et pretium risus elementum.</p>
                                <a href="#" class="button">Read More</a>
                            </div>
                        </div>
                        <div class="post clear">
                            <img src="assets/img/spirited-away.avif" alt="spirited-away" class="post-image">
                            <div class="post-preview">
                                <h2><a href="#">Spirited Away</a></h2>
                                <i class="far fa-user"> Theo</i>
                                &nbsp;
                                <i class="far calendar"> Mar 30, 2023</i>
                                <p class="preview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed molestie nulla. Pellentesque blandit mauris magna, et pretium risus elementum.</p>
                                <a href="#" class="button">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Div tag that contains the sidebar -->
                    <div class="sidebar">
                        <!-- Div tag that contains the search bar -->
                        <div class="section search">
                            <h2 class="section-title">Search</h2>
                            <form action="index.php" method="post">
                                <input type="text" name="search-input" class="text-input" placeholder="Search...">
                            </form>
                        </div>
                        <!-- Div tag that contains the topic section -->
                        <div class="section topics">
                            <h2 class="section-title">Topics</h2>
                            <ul>
                                <li><a href="#">Topic 1</a></li>
                                <li><a href="#">Topic 2</a></li>
                                <li><a href="#">Topic 3</a></li>
                                <li><a href="#">Topic 4</a></li>
                                <li><a href="#">Topic 5</a></li>
                                <li><a href="#">Topic 6</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer of the website -->
            <?php include(ROOT_PATH . "/app/PageParts/footer.php"); ?>

            <!-- JQuery -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <!-- Slick -->
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            <!-- JavaScript -->
            <script src="assets/js/scripts.js"></script>
        </div>
    </div>
    
</body>
</html>