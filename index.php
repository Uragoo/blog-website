<?php 
include("path.php");
include(ROOT_PATH . "/app/database/topics.php");
include(ROOT_PATH . "/app/database/likes.php");

date_default_timezone_set('Europe/Paris');

$posts = array();
$popularPosts = getPopularPosts(); //Get all the published posts from the database
$postTitle = "Recent Posts";

//If there is a search attribute in the url, display only the posts matching
if (isset($_GET['search'])) {
    //If the search attribute is empty, delete it from the URL
    if ($_GET['search'] == "") {
        header('location: index.php');
        exit();
    }
    $posts = searchPosts($_GET['search']);
    $postTitle = 'Results for "' . $_GET['search'] . '"';
} else if (isset($_GET['topic'])) {
    //If the search attribute is empty, delete it from the URL
    if ($_GET['topic'] == "") {
        header('location: index.php');
        exit();
    }
    $topic = selectOne('topics', ['id' => $_GET['topic']]);
    $posts = getPostsByTopic($topic['id']);
    $postTitle = 'Posts related to "' . $topic['name'] . '"';
} else {
    $posts = getRecentPosts();
}

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
                        <!-- Always display the trending posts -->
                        <?php foreach ($popularPosts as $post): ?>
                            <div class="post">
                                <a href="post.php?id=<?php echo $post['id']; ?>">
                                    <img src="assets/img/<?php echo $post['image']; ?>" alt="" class="post-image">
                                </a>
                                <div class="post-info">
                                    <h3><a href="post.php?id=<?php echo $post['id']; ?>"> <?php echo $post['title']; ?></a></h3>
                                    <i class="far fa-user"> <?php echo $post['username']; ?></i>
                                    &nbsp;
                                    <!-- Display the date the post was created -->
                                    <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['creation_date'])); ?></i>
                                    <!-- Part containing the likes display -->
                                    <?php include(ROOT_PATH . "/app/PageParts/popularity.php"); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <i class="fa-solid fa-chevron-right next"></i>
                </div>

                <!-- Div tag that contains the content of the page -->
                <div class="content clear">
                    <!-- Div tag that contains the main content of the page -->
                    <div class="main-content">
                        <h1 class="recent-post-title"><?php echo $postTitle ?></h1>
                        <!-- If there are no posts to display, display a massage, else display the posts -->
                        <?php if (count($posts) == 0): ?>
                            <div class="no-post clear">
                                <h2>No post matches your query...</h2>
                            </div>
                        <?php else: ?>
                            <?php foreach ($posts as $post): ?>
                                <div class="post clear">
                                    <a href="post.php?id=<?php echo $post['id']; ?>">
                                        <img src="assets/img/<?php echo $post['image']; ?>" alt="" class="post-image">
                                    </a>
                                    <div class="post-preview">
                                        <h2><a href="post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                                        <i class="far fa-user"> <?php echo $post['username']; ?></i>
                                        &nbsp;
                                        <!-- Display the date the post was created -->
                                        <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['creation_date'])); ?></i>
                                        <!-- Display a preview of the post -->
                                        <p class="preview-text"><?php echo html_entity_decode(substr($post['body'], 0, 250) . "..."); ?></p>
                                        <!-- Part containing the likes display -->
                                        <?php include(ROOT_PATH . "/app/PageParts/popularity.php"); ?>
                                        <a href="post.php?id=<?php echo $post['id']; ?>" class="button">Read More</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        
                    </div>

                    <!-- Div tag that contains the sidebar -->
                    <div class="sidebar">
                        <!-- Div tag that contains the search bar -->
                        <div class="section search">
                            <h2 class="section-title">Search</h2>
                            <!-- Search for specific posts (GET method so the user can modify his query directly in the URL) -->
                            <form action="index.php" method="get">
                                <input type="text" name="search" class="text-input" placeholder="Search...">
                            </form>
                        </div>
                        <!-- Div tag that contains the topic section -->
                        <div class="section topics">
                            <h2 class="section-title">Topics</h2>
                            <ul>
                                <!-- Display all topics from the database -->
                                <?php foreach ($topics as $key => $topic): ?>
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
            <!-- Slick -->
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            <!-- JavaScript -->
            <script src="assets/js/scripts.js"></script>
        </div>
    </div>
    
</body>
</html>