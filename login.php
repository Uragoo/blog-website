<?php 
include("path.php"); 
include(ROOT_PATH . "/app/database/users.php");
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
    <title>Login</title>
</head>
<body background="assets/img/background.jpg">
    <!-- Class used to make page fade into view -->
    <div class="fade-in">
        
        <div id="MainContainer">
            <!-- Header of the website -->
            <?php include(ROOT_PATH . "/app/PageParts/header.php"); ?>

            <div class="authentication">
                <form action="login.php" method="post">
                    <h2 class="form-title">Login</h2>

                    <!-- Display error messages if found -->
                    <?php include(ROOT_PATH . "/app/database/formErrors.php"); ?>

                    <div>
                        <label for="">Email</label>
                        <input type="email" name="email" class="text-input" value="<?php echo $email; ?>">
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password" name="password" class="text-input" value="<?php echo $password; ?>">
                    </div>
                    <div>
                        <button type="submit" name="login-button" class="button button-big">Login</button>
                    </div>
                    <p>Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
                </form>
            </div>
            <div>
                <img src="" alt="">
            </div>

            <!-- JQuery -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            
            <!-- JavaScript -->
            <script src="assets/js/scripts.js"></script>
        </div>
    </div>
    
</body>
</html>