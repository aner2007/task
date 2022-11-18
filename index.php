<script src="http://code.jquery.com/jquery-latest.js"></script>

<?php include 'includes/header.php'; ?>
<style><?php include 'css/custom.css'; ?></style>
<style><?php include 'css/header.css'; ?></style>
<style><?php include 'css/footer.css'; ?></style>
<style><?php include 'css/pagination.css'; ?></style>

<div class="blog-title">
    <div class="blog-content">
       <h1>My Blog Custom PHP</h1>
       <p>Lorem ipsum s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text</p>
    </div>
</div>

<div id="post-container">

    <?php include 'php/api.php'; ?>

    <div class="blog-title">
        <div class="blog-content">
            <h1>My Blog Custom PHP</h1>
            <p>Lorem ipsum s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text</p>
        </div>
    </div>

    <div class="drop-us">
        <div class="drop-left">
            <p><h3>Drop us line!</h3></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="drop-btn"><a href="/contact">Contact us</a></div>
    </div>
</div>
<script src="js/pagination.js"></script>
<?php include 'includes/footer.php'; ?>