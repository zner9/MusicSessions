<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="stylesheets/general.css">
    <link rel="stylesheet" href="stylesheets/header.css">
    <link rel="stylesheet" href="stylesheets/payment.css">
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
    <div class="gcash-visa-box">
        <div class="upper">
            <img src="pictures/gcash.png" class="gcash">
            <img src="pictures/our-qr.jpg" class="gcash-qr">
        </div>
        <div class="lower">
            <img src="pictures/visa.png" class="visa">
            <img src="pictures/our-visa-qr.jpg" class="visa-qr">
        </div>
    </div>
    <?php 
        session_start(); 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $payment = htmlspecialchars($_POST['payment-method']);
            $amount = htmlspecialchars($_POST['amount']);
            $account_number = htmlspecialchars($_POST['account-number']);
            $account_name = htmlspecialchars($_POST['account-name']);
            $reference = htmlspecialchars($_POST['reference']);
            $level = htmlspecialchars($_POST['level-of-student']);

            $_SESSION['payment-method']=$payment;
            $_SESSION['student-amount']=$amount;
            $_SESSION['student_account_number']=$account_number;
            $_SESSION['student_account_name']=$account_name;
            $_SESSION['student_reference']=$reference;
            $_SESSION['student_level']=$level;
            header("Location: student-home.html");
        }
    ?>
    <form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']); ?>" method="POST"> 
        <div class="payment-box">
            <div class="upper">   
                <div class="heads">Payment method</div>
            </div>
            <div class="middle">
                <div class="label">Gcash/Visa</div>
                    <select name="payment-method" REQUIRED>
                        <option value="v"></option>
                        <option value="gcash">Gcash</option>
                        <option value="visa">Visa</option>
                    </select>
                <div class="label">Amount</div>
                    <input type="text" class="input-box" name="amount" REQUIRED>
                <div class="label">Reference Number</div>
                    <input type="text" class="input-box" name="reference" REQUIRED>
                    
                    
                <div class="label">Level</div>
                    <select name="level-of-student" class="select-level" REQUIRED>
                        <option value="v"></option>
                        <option value="Beginner">Beginner</option>
                        <option value="Primary">Primary</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advance">Advance</option>
                    </select>
            </div>
            <div class="lower">
                <input type="submit" name="submit" class="confirm">
            </div>
        </div>
    </form>  
</body>
</html>