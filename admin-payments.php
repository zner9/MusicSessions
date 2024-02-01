<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
    <link rel="stylesheet" href="stylesheets/admin/general.css">
    <link rel="stylesheet" href="stylesheets/admin/header.css">
    <link rel="stylesheet" href="stylesheets/admin/payments.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="header">
        <!--Left Side-->
        <div class="left-side">
            <div><a href="admin-dashboard.html"><img src="pictures/Logo.png" class="logo"></a></div>
            <div><a href="admin-About.html">About Us</a></div>
            <div><a href="admin-terms.html">Terms &#38; Conditions</a></div>
        </div>
        <!--Right Side-->
        <div class="right-side">
            <!--Home-->
            <a href="admin-dashboard.html">
                <div class="home-link">
                    <img src="pictures/home-icon.jpg" class="home-logo-icon">
                    <div class="icon-title">Home</div>
                </div>
            </a>
            <!--Students-->
            <a href="admin-students.php">
                <div class="students-link">
                    <img src="pictures/students-icon.jpg" class="students-logo-icon">
                    <div class="icon-title">Students</div>
                </div>
            </a>
            <!--Schedules-->
            <a href="admin-payments.php">
                <div class="schedules-link">
                    <img src="pictures/schedules-icon.jpg" class="schedules-logo-icon">
                    <div class="icon-title">Payments</div>
                </div>
            </a>
            <!--Profile-->
            <a href="home-noaccount.html">
                <div class="profile-link">
                    <img src="pictures/profile.jpg" class="profile-logo-icon">
                    <div class="profile-icon-title">Me</div>
                </div>
            </a>
        </div>
    </header>
    <div class="student-search-box">
        <form class="example">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
    </div>
    <div class="whole-grid">
        <!--Header-->
        <div class="header-grid">#</div>
        <div class="header-grid">Full Name</div>
        <div class="header-grid">Contact</div>
        <div class="header-grid">Level</div>
        <div class="header-grid">Gcash/Visa</div>
        <div class="header-grid">Reference No:</div>
        <div class="header-grid">Amount</div>
        <div class="header-grid">Verify</div>
        <!--1st row-->
        <div>1</div>
        <div><?php 
        session_start(); 
        $a = $_SESSION['student_full_name'];
        echo $a;
        ?>
        </div>
        <div><?php 
        $b = $_SESSION['student_contact'];
        echo $b;
        ?>
        </div>
        <div><?php 
        $c = $_SESSION['student_level'];
        echo $c;
        ?>
        </div>
        <div><?php 
        $d = $_SESSION['payment-method'];
        echo $d;
        ?></div>
        <div><?php 
        $e = $_SESSION['student_reference'];
        echo $e;
        ?></div>
        <div>&#8369;<?php 
        $f = $_SESSION['student-amount'];
        echo $f;
        ?></div>
        <div id="divToRemove"><button class="confirm" onclick=" 
            confirmAndRemove();
        ">Confirm</button>
        <button class="confirm" onclick="
            removeDiv();
        ">Cancel</button>
        </div>
    </div>
    <script> 
        function confirmAndRemove() {
            var divToRemove = document.getElementById('divToRemove');
            
            // Display a confirmation dialog
            var confirmation = confirm("Do you want to verify the payment?");
            
            // If the user clicks "OK" in the confirmation dialog
            if (confirmation) {
                // Move the div content to another page (e.g., using window.location)
                var contentToMove = divToRemove.innerHTML;
                window.location.href = 'admin-students.php?content=' + encodeURIComponent(contentToMove);
                
                // Remove the div from the current page
                divToRemove.parentNode.removeChild(divToRemove);
            } else {
                // If the user clicks "Cancel" in the confirmation dialog
                divToRemove.parentNode.removeChild(divToRemove);
            }
        }
    </script>
    <div class="next-page">
        <button class="page">1</button>
        <button class="page">2</button>
        <button class="page">3</button>
    </div>
</body>
</html>