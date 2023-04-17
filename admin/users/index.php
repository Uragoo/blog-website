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
    <title>Manage Users</title>
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
                <a href="<?php echo BASE_URL . "/admin/users/create.php"; ?>" class="button button-big">Create User</a>
                <a href="<?php echo BASE_URL . "/admin/users/index.php"; ?>" class="button button-big">Manage Users</a>
            </div>
            <!-- Div tag that contains the list of all posts of the website -->
            <div class="dashboard">
                <h2 class="page-title">Manage Users</h2>
                <table>
                    <thead>
                        <th>N°</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Théo</td>
                            <td>this-is-not@real-address.com</td>
                            <td>Admin</td>
                            <td><a href="#" class="button edit">Edit</a></td>
                            <td><a href="#" class="button delete">Delete</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Céliane</td>
                            <td>this-is-not@real-address.com</td>
                            <td>Admin</td>
                            <td><a href="#" class="button edit">Edit</a></td>
                            <td><a href="#" class="button delete">Delete</a></td>
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