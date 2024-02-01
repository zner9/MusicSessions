<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="stylesheets/teacher/general.css">
    <link rel="stylesheet" href="stylesheets/teacher/header.css">
    <link rel="stylesheet" href="stylesheets/teacher/students.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="header">
        <!--Left Side-->
        <div class="left-side">
            <div><a href="teacher-dashboard.html"><img src="pictures/Logo.png" class="logo"></a></div>
            <div><a href="teacher-About.html">About Us</a></div>
            <div><a href="teacher-terms.html">Terms &#38; Conditions</a></div>
        </div>
        <!--Right Side-->
        <div class="right-side">
            <!--Home-->
            <a href="teacher-dashboard.html">
                <div class="home-link">
                    <img src="pictures/home-icon.jpg" class="home-logo-icon">
                    <div class="icon-title">Home</div>
                </div>
            </a>
            <!--Students-->
            <a href="teacher-students.php">
                <div class="students-link">
                    <img src="pictures/students-icon.jpg" class="students-logo-icon">
                    <div class="icon-title">Students</div>
                </div>
            </a>
            <!--Schedules-->
            <a href="teacher-schedules.php">
                <div class="schedules-link">
                    <img src="pictures/schedules-icon.jpg" class="schedules-logo-icon">
                    <div class="icon-title">Schedules</div>
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
    <main>
        <div class="student-search-box">
        <h1 class="students-title">Students</h1>
        <form class="example">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <div class="students-grid">
            <!--header row-->
            <div class="header-grid">#</div>
            <div class="header-grid">Full Name</div>
            <div class="header-grid">Age</div>
            <div class="header-grid">Address</div>
            <div class="header-grid">Mobile No</div>
            <div class="header-grid">Level</div>
            <!--1st row-->
            <div>1</div>
            <div><?php 
            session_start(); 
            $aa = $_SESSION['student_full_name'];
            echo $aa;
            ?></div>
            <div><?php 
            $bb = $_SESSION['student_age'];
            echo $bb;
            ?></div>
            <div><?php 
            $cc = $_SESSION['student_address'];
            echo $cc;
            ?></div>
            <div><?php 
            $dd = $_SESSION['student_contact'];
            echo $dd;
            ?></div>
            <div><?php 
            $ee = $_SESSION['student_level'];
            echo $ee;
            ?></div>
        </div>
        <div class="next-page">
        <button class="page">1</button>
        <button class="page">2</button>
        <button class="page">3</button>
        </div>
    </main>
</body>
</html>