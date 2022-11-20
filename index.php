<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title = "This is page title";
    $description = "This is page description";
    ?>
    <title><?=$title?></title>
    <meta name="description" content="<?=$description?>">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/pagination.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="css/subscribe.css">
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
                    <input type="checkbox" id="design" name="design" value="Design">
                    <label for="vehicle1"> Design</label><br>
                    <input type="checkbox" id="branding" name="branding" value="Branding">
                    <label for="vehicle2"> Branding</label><br>
                    <input type="checkbox" id="ilustrations" name="ilustrations" value="Ilustrations">
                    <label for="vehicle3"> Ilustrations</label><br>
                    <input type="checkbox" id="icons" name="icons" value="Icons">
                    <label for="vehicle4"> Icons</label><br>
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
<script src="js/pagination.js"></script>
<script src="js/form.js"></script>
