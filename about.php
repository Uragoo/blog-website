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
    <title>Blog</title>
</head>
<body background="assets/img/background.jpg">
    <!-- Class used to make page fade into view -->
    <div class="fade-in">
        
        <div id="MainContainer">
            <!-- Header of the website -->
            <?php include(ROOT_PATH . "/app/PageParts/header.php"); ?>
            
            <div class="Container">
                <hr>
                <h1>Movies</h1>
                <hr>
            </div>

            <div class="Container">
                <!-- Div tag that contains the content within the footer -->
                <div class="pic_table", id="movies">
                    <p>Feel free to click on a movie poster to learn more about said movie :<p>
                    <div class="row_pic">
                        <a href="Kiki.html"><img class = "column_pic" src="assets/img/kiki_poster.jpg" alt="Kiki's delivery service poster"></a>
                        <a href="Howl.html"><img class="column_pic" src="assets/img/howl_poster.jpg" alt="Howl's moving castle poster"></a>
                        <a href="Ponyo.html"><img class="column_pic" src="assets/img/ponyo_poster.jpg" alt="Ponyo poster"></a>
                    </div>
                    <div class="row_pic">
                        <a href="Porco.html"><img class="column_pic" src="assets/img/porco_poster.jpg" alt="Porco Rosso poster"></a>
                        <a href="Totoro.html"><img class="column_pic" src="assets/img/totoro_poster.jpg" alt="Totoro poster"></a>
                        <a href="Chihiro.html"><img class="column_pic" src="assets/img/chihiro_poster.jpg" alt="Spirited away poster"></a>
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
            <script src="js/scripts.js"></script>
        </div>
    </div>
    
</body>
</html>