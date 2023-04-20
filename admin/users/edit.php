<?php 
include("../../path.php"); 
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
    <link rel="stylesheet" href="../../assets/styles/style.css">
    <link rel="stylesheet" href="../../assets/styles/admin.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <title>Edit User</title>
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
                <h2 class="page-title">Edit User</h2>

                <!-- Display error messages if found -->
                <?php include(ROOT_PATH . "/app/database/formErrors.php"); ?>

                <form action="edit.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label><h4>Username</h4></label>
                        <input type="text" name="username" class="text-input" value="<?php echo $username; ?>">
                    </div>
                    <div>
                        <label><h4>Email</h4></label>
                        <input type="email" name="email" class="text-input" value="<?php echo $email; ?>">
                    </div>
                    <div>
                        <label><h4>Password</h4></label>
                        <input type="password" name="password" class="text-input" value="<?php echo $password; ?>">
                    </div>
                    <div>
                        <label><h4>Password confirmation</h4></label>
                        <input type="password" name="password-confirmation" class="text-input" value="<?php echo $passwordConfirmation; ?>">
                    </div>
                    <div>
                        <label>
                            <?php if ($admin): ?>
                                <input type="checkbox" name="admin" checked>
                            <?php else: ?>
                                <input type="checkbox" name="admin">
                            <?php endif; ?>    
                            Admin ?
                        </label>
                    <div>
                    <div>
                        <button type="submit" class="button button-big" name="update-user">Update User</button>
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