<!DOCTYPE html>
<html lang="en">
<head>
    <title>Testni zadatak za posao u firmi Lanaco</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Test your website with the free SEO check from Seobility and get tips for a better search engine optimization.">
     <link rel="stylesheet" href="styles/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<?php include 'includes/header.php'; ?>
<div class="blog-title">
    <div class="blog-content">
       <h1>My Blog Custom PHP</h1>
       <p>Lorem ipsum s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text</p>
    </div>
</div>


<div class="add-post">
    <button class="button" data-modal="modalOne">Add New Post</button>
</div>

<div id="modalOne" class="modal">
    <div class="modal-content">
        <div class="contact-form">
            <a class="close">&times;</a>
            <form action="/task/php/apipost.php">
                 <div>
                    <input class="fname" type="text" name="title" placeholder="Post Title" />
                    <br><br>
                    <span>Choose category</span>
                    <div class="category">
                        <select name="category">
                            <option value="5">Music</option>
                            <option value="6">Animal</option>
                            <option value="4">Sport</option>
                            <option value="3">Nature</option>
                            <option value="Yellow">Yellow</option>
                        </select>
                    </div>
                </div>
                <span>Content</span>
                <div>
                    <textarea rows="4" name="content"></textarea>
                </div>
                <button type="submit" href="/">Submit</button>
            </form>
        </div>
    </div>
</div>

<div id="post-container">
    <?php include 'php/api_category.php'; ?>

    <div class="blog-title">
        <?php include 'php/subscribe.php'; ?>
    </div>

     <div class="drop-us">
        <div class="drop-left">
            <p><h3>Drop us line!</h3></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="drop-btn"><a href="/contact">Contact us</a></div>
    </div>
</div>
</body>

<?php include 'includes/footer.php'; ?>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="js/form.js"></script>
<script>$( document ).ready(function() {
    $(".3").css("display","none");
    $(".4").css("display","none");
    $(".5").css("display","none");
    $(".6").css("display","none");
});</script>
<script src="js/pagination.js"></script>
