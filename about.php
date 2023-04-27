<?php include("path.php"); 
include(ROOT_PATH . "/app/database/posts.php");
include(ROOT_PATH . "/app/database/likes.php");
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

            <br>
            <h1>About</h1>
            <p class="p_about">Ghiblog is a website created by two students as part of a school project. We decided to make a blog around the theme of Studio Ghibli.
                An animation studio that we are very fond of. If you'd like to learn more about Studio Ghibli and our thoughts on the different movies, soundtracks, etc.
                Feel free to take a look around our website. If you're interested in learning more about the different movies click on the movie posters located underneath to be redirected to it's 
                corresponding trailer.</p>
            <br>
            <h1>Movies</h1>

            <!-- Div tag that contains the content within the footer -->
            <div class="pic_table">
                <p class="p_about">Click on a movie poster to be redirected to it's movie trailer :</p>
                <div class="row_pic">
                    <a href="https://www.youtube.com/watch?v=4bG17OYs-GA"><img class = "column_pic" src="assets/img/kiki_poster.jpg" alt="Kiki's delivery service poster"></a>
                    <a href="https://www.youtube.com/watch?v=iwROgK94zcM"><img class="column_pic" src="assets/img/howl_poster.jpg" alt="Howl's moving castle poster"></a>
                    <a href="https://www.youtube.com/watch?v=CsR3KVgBzSM"><img class="column_pic" src="assets/img/ponyo_poster.jpg" alt="Ponyo poster"></a>
                </div>
                <div class="row_pic">
                    <a href="https://www.youtube.com/watch?v=awEC-aLDzjs"><img class="column_pic" src="assets/img/porco_poster.jpg" alt="Porco Rosso poster"></a>
                    <a href="https://www.youtube.com/watch?v=92a7Hj0ijLs"><img class="column_pic" src="assets/img/totoro_poster.jpg" alt="Totoro poster"></a>
                    <a href="https://www.youtube.com/watch?v=ByXuk9QqQkk"><img class="column_pic" src="assets/img/chihiro_poster.jpg" alt="Spirited away poster"></a>
                </div>  
                <div class="row_pic">
                    <a href="https://www.youtube.com/watch?v=4OiMOHRDs14"><img class="column_pic" src="assets/img/mononoke_poster.jpg" alt="Princess Mononoke poster"></a>
                    <a href="https://www.youtube.com/watch?v=9CtIXPhPo0g"><img class="column_pic" src="assets/img/arrietty_poster.jpg" alt="Arrietty poster"></a>
                    <a href="https://www.youtube.com/watch?v=YrueAaw0RYg"><img class="column_pic" src="assets/img/wind_poster.jpg" alt="The Wind Rises poster"></a>
                </div>
            </div>
            <!-- Footer of the website -->
            <?php include(ROOT_PATH . "/app/PageParts/footer.php"); ?>

            <!-- JQuery -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <!-- Slick -->
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            <!-- JavaScript -->
            <script src="js/scripts.js"></script>
        </div>
    </div>
    
</body>
</html>