<script src="http://code.jquery.com/jquery-latest.js"></script>

<?php include 'includes/header.php'; ?>
<style><?php include 'css/custom.css'; ?></style>
<style><?php include 'css/header.css'; ?></style>
<style><?php include 'css/footer.css'; ?></style>
<style><?php include 'css/pagination.css'; ?></style>
<style><?php include 'css/form.css'; ?></style>

<div class="blog-title">
    <div class="blog-content">
       <h1>My Blog Custom PHP</h1>
       <p>Lorem ipsum s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text</p>
    </div>
</div>

<h2>Multiple Popup Forms</h2>
<p>
    <button class="button" data-modal="modalOne">Contact Us</button>
</p>
<p>
    <button class="button" data-modal="modalTwo">Send a Compliant Form</button>
</p>
<div id="modalOne" class="modal">
    <div class="modal-content">
        <div class="contact-form">
            <a class="close">&times;</a>
            <form action="/">
                <h2>Contact Us</h2>
                <div>
                    <input class="fname" type="text" name="name" placeholder="Full name" />
                    <input type="text" name="name" placeholder="Email" />
                    <input type="text" name="name" placeholder="Phone number" />
                    <input type="text" name="name" placeholder="Website" />
                </div>
                <span>Message</span>
                <div>
                    <textarea rows="4"></textarea>
                </div>
                <button type="submit" href="/">Submit</button>
            </form>
        </div>
    </div>
</div>
<div id="modalTwo" class="modal">
    <div class="modal-content">
        <div class="contact-form">
            <span class="close">&times;</span>
            <form action="/">
                <h2>Complaint form</h2>
                <div>
                    <input class="fname" type="text" name="name" placeholder="Full name" />
                    <input type="text" name="name" placeholder="Email" />
                    <input type="text" name="name" placeholder="Phone number" />
                    <input type="text" name="name" placeholder="Website" />
                </div>
                <span>Message</span>
                <div>
                    <textarea rows="4"></textarea>
                </div>
                <button type="submit" href="/">Submit</button>
            </form>
        </div>
    </div>
</div>


<div class="new-post"><btn id="add-post"> Add New Post</btn></div>
<div id="post-container">

    <?php include 'php/api.php'; ?>

     <div class="drop-us">
        <div class="drop-left">
            <p><h3>Drop us line!</h3></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="drop-btn"><a href="/contact">Contact us</a></div>
    </div>
</div>
</div>
<div class="blog-title">
    <div class="blog-content">
        <h2>Subscribe Blog for lates updates</h2>
        <p>Lorem ipsum s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text</p>
    </div>
</div>
<script src="js/pagination.js"></script>
<script src="js/form.js"></script>
<?php include 'includes/footer.php'; ?>