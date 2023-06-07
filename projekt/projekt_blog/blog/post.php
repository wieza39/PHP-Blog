<?php
include '../includes/header.php'
?>

<main class="main-post-container">
    <div class="post-header">
        <div class="post-bio">
            <div class="post-title">
                <h1>Some title of post</h1>
            </div>
            <div class="post-author">Author Name</div>
            <div class="post-date">dd-mm-yyyy</div>
        </div>
        <div class="post-control-panel">
            <div class="post-control-btn"><button onclick="scrollToComment()" class="form-btn"><i class="fa-regular fa-message"></i></button></div>
            <div class="post-control-btn"><button class="form-btn"><i class="fa-solid fa-arrow-left"></i></button></div>
            <div class="post-control-btn"><button class="form-btn"><i class="fa-solid fa-arrow-right"></i></button></div>
        </div>
    </div>
    <div class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus atque, fugiat voluptatem a libero sit, explicabo reprehenderit consequatur laboriosam enim provident praesentium molestiae reiciendis sapiente officia aperiam perspiciatis iste? Ratione eveniet blanditiis nisi voluptatem labore, explicabo quae cumque ut totam harum doloremque obcaecati et veritatis consectetur, possimus similique eius accusantium temporibus, repellat earum error id minus neque. Animi, accusantium libero ipsam perspiciatis quas facilis rerum cumque, consectetur voluptatum aperiam repellendus. Aperiam beatae hic laborum aspernatur, rem numquam tempore a natus est eum perspiciatis sapiente ea, voluptate tenetur, quisquam consequuntur. Voluptatem velit necessitatibus magni obcaecati repellendus. <br><br> Et ut amet quos facilis dolorem, at itaque deserunt totam dignissimos aliquam placeat qui ducimus? Dolorum, ea laborum non fugiat repudiandae at officia, eos facilis veniam dolor necessitatibus vel eaque ab ducimus. Itaque delectus mollitia deserunt voluptatum ad reprehenderit fugit officiis minus dolorum ea obcaecati debitis unde dolorem magni voluptatem, dolor eos facere placeat aspernatur. Ratione, culpa doloremque eaque obcaecati assumenda praesentium voluptatibus illo natus, corporis iusto ut est harum, repudiandae earum voluptatum placeat esse perspiciatis. Repellat, perspiciatis dolore accusamus, facere illum recusandae iste voluptate saepe unde laudantium nostrum minima voluptatem necessitatibus id. Dolores quaerat incidunt neque quae aliquam vel illum debitis officia, sunt cumque.</div>

    <div class="post-comment-section">

        <!-- new comment -->
        <div class="post-new-comment" id="new-comment">
            <div class="post-new-comment-header">
                <div class="post-new-comment-author">Write a comment as <span id="comment-user"><?php echo $_SESSION['user']; ?></span></div>
            </div>
            <div class="post-new-comment-text">
                <form action="add_comment.php" method="post">
                    <textarea name="comment-text" id="" rows="10" placeholder="Be nice!"></textarea>
                    <input class="form-btn" type="submit" value="COMMENT">
                </form>
            </div>
        </div>

        <!-- existing comments -->
        <!-- Comment 1 -->
        <div class="post-comment">
            <div class="post-comment-header">
                <img src="../images/user.png" alt="user-image" class="post-comment-profile-img">
                <div class="post-comment-author">Author Comment</div>
            </div>
            <div class="post-comment-content">
                <div class="post-comment-date">dd-mm-yyyy</div>
                <div class="post-comment-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam numquam nemo, modi nobis autem quia vel soluta doloribus ducimus dolor necessitatibus ipsa ex enim. Maxime totam omnis aliquid porro cum!</div>
            </div>
            <div class="post-comment-action">
                
                <i class="fa-solid fa-heart"></i>
                <i class="fa-regular fa-heart"></i>
                <i class="fa-solid fa-pen"></i>
                <i class="fa-regular fa-trash-can"></i>
                <i class="fa-solid fa-exclamation"></i>
                
            </div>
        </div>

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
include '../includes/footer.php'
?>