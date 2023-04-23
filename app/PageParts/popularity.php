<!-- Part containing the likes display -->
<div class="popularity">
    <?php if (isset($_SESSION['id'])): ?>
        <!-- Check if the user already likes the post -->
        <?php if (alreadyLiked($post['id'], $_SESSION['id'])): ?>
            <a href="" class="unlike" id="<?php echo $post['id']; ?>">
                <i class="fas fa-heart"> <?php echo $post['likes']; ?></i>
            </a>
        <?php else: ?>
            <a href="" class="like" id="<?php echo $post['id']; ?>">
                <i class="far fa-heart"> <?php echo $post['likes']; ?></i>
            </a>
        <?php endif; ?> 
    <?php else: ?>
        <a href="" class="like" id="<?php echo $post['id']; ?>">
            <i class="far fa-heart"> <?php echo $post['likes']; ?></i>
        </a>
    <?php endif; ?>
</div>