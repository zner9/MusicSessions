<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="stylesheets/general.css">
    <link rel="stylesheet" href="stylesheets/header.css">
    <link rel="stylesheet" href="stylesheets/information.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="left-side"> 
            <div><a href="student-home.html"><img src="pictures/Logo.png" class="logo"></a></div>
            <div><a href="student-About.html">About Us</a></div>
            <div><a href="student-instruments.html">Instruments</a></div>
            <div><a href="terms.html">Terms &#38; Conditions</a></div>
        </div>
        <div class="right-side">
            <div><a href="home-noaccount.html" class="sign-up">Logout</a></div>
        </div>
    </header>
    <?php 
        session_start(); 
        if (isset($_POST['submit'])) { 
            $full_name = filter_input(
                INPUT_POST,
                'full-name',
                FILTER_SANITIZE_FULL_SPECIAL_CHARS
              );
            $address = filter_input(
                INPUT_POST,
                'address',
                FILTER_SANITIZE_FULL_SPECIAL_CHARS
              );
            $birthday = filter_input(
                INPUT_POST,
                'birthday',
                FILTER_SANITIZE_FULL_SPECIAL_CHARS
              );
              $contact = filter_input(
                INPUT_POST,
                'contact',
                FILTER_SANITIZE_FULL_SPECIAL_CHARS
              );
              $age = filter_input(
                INPUT_POST,
                'age',
                FILTER_SANITIZE_FULL_SPECIAL_CHARS
              );
            $_SESSION['student_full_name']=$full_name;
            $_SESSION['student_age']=$age;
            $_SESSION['student_address']=$address;
            $_SESSION['student_birthday']=$birthday;
            $_SESSION['student_contact']=$contact;
            header("Location: student-teachers.html");
        } 
    ?>
    <form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']); ?>" method="POST"> 
        <div class="information-box">   
            <div class="information-header">
                <div class="title">Your Information</div>
            </div>
            <div class="middle-side">
                <div class="left-side">
                    <div class="full-name">Full Name (FN/MN/LN)</div>
                        <input type="text" class="input" name="full-name" REQUIRED>
                    <div class="contact-number">Age</div>
                        <input type="text" class="input" name="age" REQUIRED> 
                    <div class="address">Address</div>
                        <input type="text" class="input" name="address" REQUIRED>
                    <div class="birthday">Birthday (DD/MM/YYYY)</div>
                        <input type="date" class="input" name="birthday" REQUIRED>
                    <div class="contact-number">Contact Number</div>
                        <input type="text" class="input" name="contact" REQUIRED> 
                    <div class="next-button">   
                        <input type="submit" name="submit" class="proceed">
                    </div>
                </div> 
                <div class="right-side">
                    <div class="upper"><img src="pictures/profile.jpg" class="profile"></div>
                    <button class="change-picture">Change Picture</button>
                </div>
            </div>  
        </div> 
    </form>
</body>
</html>