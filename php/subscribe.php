<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Form | CodingNepal</title>
    <link rel="stylesheet" href="../css/subscribe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<div class="wrapper-subscribe">

    <div class="content">
        <header>Subscribe Blog for lates updates</header>
        <p>Subscribe to our blog and get the latest updates straight to your inbox.</p>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" method="POST">
        <?php
        $userEmail = ""; //first we leave email field blank
        if(isset($_POST['subscribe'])){ //if subscribe btn clicked
            $userEmail = $_POST['email']; //getting user entered email
            if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating user email
                $subject = "Thanks for Subscribing us - Aner Blog";
                $message = "Thanks for subscribing to Aner blog. You'll always receive updates from us. And we won't share and sell your information.";
                $sender = "From: anercoric24@gmail.com";
                //php function to send mail
                if(mail($userEmail, $subject, $message, $sender)){
                    ?>
                    <!-- show sucess message once email send successfully -->
                    <div class="alert success-alert">
                        <?php echo "Thanks for Subscribing us." ?>
                    </div>
                    <?php
                    $userEmail = "";
                }else{
                    ?>
                    <!-- show error message if somehow mail can't be sent -->
                    <div class="alert error-alert">
                        <?php echo "Failed while sending your mail!" ?>
                    </div>
                    <?php
                }
            }else{
                ?>
                <!-- show error message if user entered email is not valid -->
                <div class="alert error-alert">
                    <?php echo "$userEmail is not a valid email address!" ?>
                </div>
                <?php
            }
        }
        ?>
        <div class="field">
            <input type="text" class="email" name="email" placeholder="Email Address" required value="<?php echo $userEmail ?>">
            <button type="submit" name="subscribe" class="subscribe-btn">Subscribe Now</button>
        </div>

    </form>
    <div class="text">We do not share your information.</div>
</div>

</body>
</html>