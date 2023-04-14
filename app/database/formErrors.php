<!-- Checking if there are errors when submitting the form -->
<!-- Display error messages if it is the case -->
<?php if(count($errors) > 0): ?>
    <!-- <div class="message error"> -->
    <!-- Display each errors found in the form -->
    <?php foreach ($errors as $errors => $error): ?>
        <div class="message error">
            <li><?php echo $error;?></li>
        </div>
    <?php endforeach; ?>
    <!-- </div> -->
<?php endif; ?>