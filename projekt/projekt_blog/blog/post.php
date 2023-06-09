<?php
include '../includes/header.php';
if (isset($_GET['id'])) {
    $postID = $_GET['id'];
}
include '../includes/open_db.php';
?>

<main class="main-post-container">
    <?php
    $queryForPost = "SELECT * FROM posts WHERE id = $postID";
    $postResult = mysqli_query($connection, $queryForPost);

    if (mysqli_num_rows($postResult) > 0) {
        $row = mysqli_fetch_assoc($postResult);
        $title = $row['title'];
        $user_id = $row['user_id'];
        $created_at = $row['created_at'];
        $content = $row['content'];

        $queryForAuthor = "SELECT nickname FROM users WHERE id = $user_id";
        $authorResult = mysqli_query($connection, $queryForAuthor);

        if (mysqli_num_rows($authorResult) > 0) {

            while ($authorRow = mysqli_fetch_assoc($authorResult)) {
                $nickname = $authorRow['nickname'];
            };
        } else {
            $nickname = "Unknown";
        }

        echo '<div class="post-header">';
        echo '<div class="post-bio">';
        echo '<div class="post-title"><h1>' . $title . '</h1></div>';
        echo '<div class="post-author">' . $nickname . '</div>';
        echo '<div class="post-date">' . $created_at . '</div>';
        echo '</div>';
        echo '<div class="post-control-panel">';
        echo '<div class="post-control-btn"><button onclick="scrollToComment()" class="form-btn"><i class="fa-regular fa-message"></i></button></div>';
        echo '<div class="post-control-btn"><button class="form-btn"><i class="fa-solid fa-arrow-left"></i></button></div>';
        echo '<div class="post-control-btn"><button class="form-btn"><i class="fa-solid fa-arrow-right"></i></button></div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="post-content">' . $content . '</div>';
    } else {
        echo 'No post found with the provided ID.';
    }
    ?>


    <div class="post-comment-section">

        <!-- new comment -->
        <div class="post-new-comment" id="new-comment">
            <div class="post-new-comment-header">
                <div class="post-new-comment-author">Write a comment as <span id="comment-user"><?php echo $_COOKIE['nickname']; ?></span></div>
            </div>
            <div class="post-new-comment-text">
                <form action="add_comment.php" method="post">
                    <input type="hidden" name="postID" value="<?php echo $postID; ?>">
                    <textarea name="comment-text" id="" rows="10" placeholder="Be nice!"></textarea>
                    <input class="form-btn" type="submit" value="COMMENT">
                </form>
            </div>
        </div>

        <!-- existing comments -->
        <?php

        // Download comments from DB
        $queryForComments = "SELECT * FROM comments WHERE post_id = $postID ORDER BY created_at DESC";
        $commentsResult = mysqli_query($connection, $queryForComments);

        if (mysqli_num_rows($commentsResult) > 0) {

            while ($row = mysqli_fetch_assoc($commentsResult)) {
                $author_id = $row['user_id'];
                $comment_id = $row['id'];
                $date = $row['created_at'];
                $text = $row['content'];

                //FOR EACH COMMENT, IT WILL SEARCH FOR AUTHOR'S NICKNAME SO IT CAN BE DISPLAYED
                $queryForAuthor = "SELECT nickname FROM users WHERE id = $author_id";
                $authorResult = mysqli_query($connection, $queryForAuthor);

                if (mysqli_num_rows($authorResult) > 0) {

                    while ($authorRow = mysqli_fetch_assoc($authorResult)) {
                        $nickname = $authorRow['nickname'];
                    };
                } else {
                    $nickname = "Unknown"; // Default value if author wasn't found
                }
                //USING FOUND NICKNAME, DISPLAY COMMENT
                echo '<div class="post-comment">';
                echo '<div class="post-comment-header">';
                echo '<img src="../images/user.png" alt="user-image" class="post-comment-profile-img">';
                echo '<div class="post-comment-author">' . $nickname . '</div>';
                echo '</div>';
                echo '<div class="post-comment-content">';
                echo '<div class="post-comment-date">' . $date . '</div>';
                echo '<div class="post-comment-text">' . $text . '</div>';
                echo '</div>';
                echo '<div class="post-comment-action">';

                if ($author_id != $_COOKIE['user_id']) {

                    echo '<i class="fa-solid fa-heart"></i>';
                    echo '<i class="fa-regular fa-heart"></i>';
                    echo '<i class="fa-solid fa-exclamation"></i>';
                }

                if ($author_id == $_COOKIE['user_id'] && $author_id != 4) {
                    echo '<i class="fa-solid fa-pen"></i>';
                    // echo '<i class="fa-regular fa-trash-can"></i>';
                    echo '<form action="delete_comment.php" method="post">';
                    echo '<input type="hidden" name="postID" value="' . $postID . '">';
                    echo '<input type="hidden" name="comment_id" value="' . $comment_id . '">';
                    echo '<button type="submit" name="deleteComment"><i class="fa-regular fa-trash-can"></i></button>';
                    echo '</form>';
                }

                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<div class="post-comment">No one commented yet. Be first!</div>';
        }
        ?>

    </div>
</main>

<script>
    function scrollToComment() {
        const commentSection = document.getElementById("new-comment");
        commentSection.scrollIntoView({
            behavior: "smooth"
        });
    }
</script>

<?php
include '../includes/close_db.php';
include '../includes/footer.php'
?>