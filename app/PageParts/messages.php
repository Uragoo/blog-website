<?php if (isset($_SESSION['message'])): ?>
    <div class="message <?php echo $_SESSION['type']; ?>">
        <li><?php echo $_SESSION['message']; ?></li>
    </div>
                
    <?php 
        //Destroy the message and its type once it is displayed
        unset($_SESSION['message']);
        unset($_SESSION['type']);
    ?>
<?php endif; ?>