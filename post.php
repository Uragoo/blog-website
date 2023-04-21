<?php 
include("path.php"); 
include(ROOT_PATH . "/app/database/posts.php");

if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
} else {
    $_SESSION['message'] = "Error: the post couldn't be loaded...";
    $_SESSION['type'] = "error";
    header("location: index.php");
    exit();
}

$posts = selectAll('posts', ['published' => 1]);
$topics = selectAll('topics');
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
    <!-- Display the title of the post and the name of the website for SEO purpose -->
    <title><?php echo $post['title']; ?> | Ghiblog</title>
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
                            <img src="assets/img/<?php echo $post['image']; ?>" alt="">
                            <h1 class="post-title"><?php echo $post['title']; ?></h1>
                            <!-- Div tag that contains the content of the post -->
                            <div class="post-content">
                                <?php echo html_entity_decode($post['body']); ?>
                            </div>
                        </div>
                    </div>
                    <!-- Div tag that contains the sidebar -->
                    <div class="sidebar post">
                        <div class="section popular-posts">
                            <h2 class="section-title">Popular Posts</h2>
                            <!-- Display the trending posts -->
                            <?php foreach ($posts as $post): ?>
                                <div class="post clear">
                                    <img src="assets/img/<?php echo $post['image']; ?>" alt="">
                                    <a href="post.php?id=<?php echo $post['id']; ?>" class="title">
                                        <h4><?php echo $post['title']; ?></h4>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Div tag that contains the topic section -->
                        <div class="section topics">
                            <h2 class="section-title">Topics</h2>
                            <ul>
                                <?php foreach ($topics as $topic): ?>
                                    <li><a href="<?php echo BASE_URL . "/index.php?topic=" . $topic['id']; ?>">
                                        <?php echo $topic['name']; ?>
                                    </a></li>
                                <?php endforeach; ?>
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