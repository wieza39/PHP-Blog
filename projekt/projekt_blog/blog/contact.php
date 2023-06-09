<?php
include '../includes/header.php';
?>
<main class="main-contact-container">
    <div class="contact-header"></div>
    <div class="contact">
        <div class="contact-form">
            <h3 class="h3-header">You can contact us through form</h3>
            <form action="" method="">
                <div class="contact-fields forms"><input type="text" name="" placeholder="Introduce yourself"></div>
                <div class="contact-fields forms"><input type="email" name="" placeholder="Put your email"></div>
                <div class="contact-fields forms"><textarea type="text" name="" cols="50" rows="10" placeholder="What's on your mind?"></textarea></div>
                <div><input type="submit" class="form-btn" value="SEND"></div>
            </form>
        </div>
        <div class="contact-info">
            <h3 class="h3-header">Or use other channels</h3>
            <div class="contact-general-info">
                <strong>OCEAN BLOG</strong><br>
                ul. Oceaniczna 123/4<br>
                80-808, Gdańsk, Polska<br>
                +48 123 123 123
            </div>
            <div class="contact-social">
                <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                <a href="tel:+48123123123"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://www.twitter.com"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </div>
</main>
<?php
include '../includes/footer.php';
?>