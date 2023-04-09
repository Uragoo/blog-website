<?php include("path.php"); ?>
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
    <title>Post</title>
</head>
<body background="assets/img/background.jpg">
    <!-- Class used to make page fade into view -->
    <div class="fade-in">
        
        <div id="MainContainer">
            <!-- Header of the website -->
            <?php include(ROOT_PATH . "/app/PageParts/header.php"); ?>

            <!-- Div tag that wrap the entire content of the page -->
            <div class="page-wrap">
                <!-- Div tag that contains the content of the page -->
                <div class="content clear">
                    <!-- Div tag that wrap the main content for css purpose -->
                    <div class="main-content-wrap">
                        <!-- Div tag that contains the main content of the page -->
                        <div class="main-content post">
                            <img src="assets/img/ghibli-studios.PNG" alt="ghibli-studios">
                            <h1 class="post-title">What is Studio Ghibli ?</h1>
                            <!-- Div tag that contains the content of the post -->
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque harum dolorem sit quasi illum cumque?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum error ut aut inventore maiores quis atque ducimus nobis voluptatibus quidem sint magnam debitis necessitatibus, neque consequuntur corrupti non dolorum ipsam!</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque facilis, aliquid accusantium natus laboriosam quos repudiandae voluptatem quidem hic laborum totam. Atque nesciunt dolore soluta deserunt cum reiciendis maiores beatae hic, ratione amet ipsam eaque quisquam harum distinctio recusandae ut!</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, vel?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque harum dolorem sit quasi illum cumque?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum error ut aut inventore maiores quis atque ducimus nobis voluptatibus quidem sint magnam debitis necessitatibus, neque consequuntur corrupti non dolorum ipsam!</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque facilis, aliquid accusantium natus laboriosam quos repudiandae voluptatem quidem hic laborum totam. Atque nesciunt dolore soluta deserunt cum reiciendis maiores beatae hic, ratione amet ipsam eaque quisquam harum distinctio recusandae ut!</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, vel?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque harum dolorem sit quasi illum cumque?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum error ut aut inventore maiores quis atque ducimus nobis voluptatibus quidem sint magnam debitis necessitatibus, neque consequuntur corrupti non dolorum ipsam!</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque facilis, aliquid accusantium natus laboriosam quos repudiandae voluptatem quidem hic laborum totam. Atque nesciunt dolore soluta deserunt cum reiciendis maiores beatae hic, ratione amet ipsam eaque quisquam harum distinctio recusandae ut!</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, vel?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque harum dolorem sit quasi illum cumque?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum error ut aut inventore maiores quis atque ducimus nobis voluptatibus quidem sint magnam debitis necessitatibus, neque consequuntur corrupti non dolorum ipsam!</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque facilis, aliquid accusantium natus laboriosam quos repudiandae voluptatem quidem hic laborum totam. Atque nesciunt dolore soluta deserunt cum reiciendis maiores beatae hic, ratione amet ipsam eaque quisquam harum distinctio recusandae ut!</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, vel?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque harum dolorem sit quasi illum cumque?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum error ut aut inventore maiores quis atque ducimus nobis voluptatibus quidem sint magnam debitis necessitatibus, neque consequuntur corrupti non dolorum ipsam!</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque facilis, aliquid accusantium natus laboriosam quos repudiandae voluptatem quidem hic laborum totam. Atque nesciunt dolore soluta deserunt cum reiciendis maiores beatae hic, ratione amet ipsam eaque quisquam harum distinctio recusandae ut!</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, vel?</p>
                            </div>
                        </div>
                    </div>
                    <!-- Div tag that contains the sidebar -->
                    <div class="sidebar post">
                        <div class="section popular-posts">
                            <h2 class="section-title">Popular Posts</h2>
                            <!-- Div tag that contains the post itself -->
                            <div class="post clear">
                                <img src="assets/img/my-neighbor-totoro.jpg" alt="totoro">
                                <a href="" class="title"><h4>My Neighbor Totoro</h4></a>
                            </div>
                            <div class="post clear">
                                <img src="assets/img/howls-moving-castle.jpg" alt="howls-moving-castle">
                                <a href="" class="title"><h4>Howl's Moving Castle</h4></a>
                            </div>
                            <div class="post clear">
                                <img src="assets/img/spirited-away.avif" alt="spirited-away">
                                <a href="" class="title"><h4>Spirited Away</h4></a>
                            </div>
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
            
            <!-- JavaScript -->
            <script src="assets/js/scripts.js"></script>
        </div>
    </div>
    
</body>
</html>