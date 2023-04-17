
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
    <title>Manage Posts</title>
</head>
<body>

    <!-- Header part of the website -->
    <?php include(ROOT_PATH . "/app/PageParts/adminHeader.php"); ?>

    <!-- Div tag that will wrap the entire content of the page -->
    <div class="admin-page-wrap">
        <!-- Div tag that contains the left sidebar of the admin page -->
        <?php include(ROOT_PATH . "/app/PageParts/adminSidebar.php"); ?>
        <!-- Div tag that contains the main content of the admin page -->
        <div class="admin-content">
            <!-- Div that contains the place where our admin buttons will be -->
            <div class="button-group">
                <a href="<?php echo BASE_URL . "/admin/posts/create.php"; ?>" class="button button-big">Create Post</a>
                <a href="<?php echo BASE_URL . "/admin/posts/index.php"; ?>" class="button button-big">Manage Posts</a>
            </div>
            <!-- Div tag that contains the list of all posts of the website -->
            <div class="dashboard">
                <h2 class="page-title">Manage Posts</h2>
                <table>
                    <thead>
                        <th>N°</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="#">What is Studio Ghibli</a></td>
                            <td>Théo</td>
                            <td><a href="#" class="button edit">Edit</a></td>
                            <td><a href="#" class="button delete">Delete</a></td>
                            <td><a href="#" class="button publish">Publish</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="#">My Neighbor Totoro</a></td>
                            <td>Théo</td>
                            <td><a href="#" class="button edit">Edit</a></td>
                            <td><a href="#" class="button delete">Delete</a></td>
                            <td><a href="#" class="button publish">Publish</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JavaScript -->
    <script src="../../assets/js/scripts.js"></script>
    
</body>
</html>