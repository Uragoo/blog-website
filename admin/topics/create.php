<?php include("../../path.php"); ?>
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
    <link rel="stylesheet" href="../../assets/styles/style.css">
    <link rel="stylesheet" href="../../assets/styles/admin.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <title>Create Topic</title>
</head>
<body>
    <!-- Header part of the website -->
    <?php include(ROOT_PATH . "/app/PageParts/adminHeader.php"); ?>

    <!-- Div tag that will wrap the entire content of the page -->
    <div class="admin-page-wrap">
        <!-- The left sidebar of the admin page -->
        <?php include(ROOT_PATH . "/app/PageParts/adminSidebar.php"); ?>
        <!-- Div tag that contains the main content of the admin page -->
        <div class="admin-content">
            <!-- Div that contains the place where our admin buttons will be -->
            <div class="button-group">
                <a href="<?php echo BASE_URL . '/admin/topics/create.php'; ?>" class="button button-big">Create Topic</a>
                <a href="<?php echo BASE_URL . '/admin/topics/index.php'; ?>" class="button button-big">Manage Topics</a>
            </div>
            <!-- Div tag that contains the list of all posts of the website -->
            <div class="dashboard">
                <h2 class="page-title">Create Topic</h2>
                <form action="create.html" method="post">
                    <div>
                        <label><h4>Topic Name</h4></label>
                        <input type="text" name="name" class="text-input">
                    </div>
                    <div>
                        <label><h4>Topic Description</h4></label>
                        <textarea name="topic-description" id="editor"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="button button-big">Create Topic</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- CKEditor 5 (the integrated text editor) -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <!-- JavaScript -->
    <script src="../../assets/js/scripts.js"></script>
    
</body>
</html>