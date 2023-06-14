<?php
include '../includes/open_db.php';
$query = "SELECT * FROM posts ORDER BY created_at DESC";
$result = mysqli_query($connection, $query);
?>

<main class="main-layout-container">
    <div class="stats-container">
        <div class="stats-title">OCEAN IN<br>NUMBERS</div>
        <div class="stats-figures">
            <table>
                <tr>
                    <td class="stats-label">Yearly plastic discard: </td>
                    <td class="stats-number">8 300 000 mln tons</td>
                </tr>
                <tr>
                    <td class="stats-label">Percentage caught</td>
                    <td class="stats-number"> &lt; 1% (83 000 tons) </td>
                </tr>
                <tr>
                    <td class="stats-label">Percentage of recyclied</td>
                    <td class="stats-number">too little</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="posts-container">

        <?php
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                $postID = $row['id'];
                $title = $row['title'];
                $date = $row['created_at'];
                $summary = $row['summary'];
                $background = $row['background'];


                echo '<div class="post-box" style="background-image: url(\'../images/' . $background . '\');"><a href="post.php?id=' . $postID . '">';
                echo '<div class="post-box-header" >';
                echo '<div class="post-box-title">' . $title . '</div>';
                echo '</div>';
                echo '<div class="post-content" >';
                echo '<div class="post-box-date">' . $date . '</div>';
                echo '<div class="post-box-text">' . $summary . '</div>';
                echo '</div>';
                echo '</a></div>';
            }
        }
        ?>
    </div>
</main>

<?php
include '../includes/close_db.php';
?>