<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedules</title>
    <link rel="stylesheet" href="stylesheets/teacher/general.css">
    <link rel="stylesheet" href="stylesheets/teacher/header.css">
    <link rel="stylesheet" href="stylesheets/teacher/schedules.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
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
        <h1 class="schedules-title">Schedules</h1>
        <div class="day-grid">
            <div><h2 class="day">Monday</h2></div>
            <div><h2 class="day">Tuesday</h2></div>
            <div><h2 class="day">Wednesday</h2></div>
            <div><h2 class="day">Thursday</h2></div>
            <div><h2 class="day">Friday</h2></div>
            <div><h2 class="day">Saturday</h2></div>
            <div><h2 class="day">Sunday</h2></div>
        </div>
        <div class="student-grid">
            <!--Monday-->
            <div class="student-box">
                <div class="student-name"><?php 
                    session_start(); 
                    if ($_SESSION['statement1'] == true) {
                        $aa = $_SESSION['student_full_name'];
                        echo $aa;
                    } else if ($_SESSION['statement1'] == false) {
                        echo "none";
                    }
                    ?>
                </div>
                <div class="student-time"><?php 
                    if(!empty($_SESSION['output1'])) {
                        $a = $_SESSION['output1'];
                        echo $a;
                        unset($_SESSION["output1"]);
                        } else {
                            echo "";
                        }?>
                </div>
            </div>
            <!--Tuesday-->
            <div class="student-box">
                <div class="student-name"><?php 
                    if ($_SESSION['statement2'] == true) {
                        $aa = $_SESSION['student_full_name'];
                        echo $aa;
                    } else if ($_SESSION['statement2'] == false) {
                        echo "none";
                    }
                    ?>
                </div>
                <div class="student-time"><?php 
                    if(!empty($_SESSION['output2'])) {
                        $a = $_SESSION['output2'];
                        echo $a;
                        unset($_SESSION["output2"]);
                        } else {
                            echo "";
                        }?>
                </div>
            </div>
            <!--Wednesday-->
            <div class="student-box">
                <div class="student-name"><?php 
                    if ($_SESSION['statement3'] == true) {
                        $aa = $_SESSION['student_full_name'];
                        echo $aa;
                    } else if ($_SESSION['statement3'] == false) {
                        echo "none";
                    }
                    ?>
                </div>
                <div class="student-time"><?php 
                    if(!empty($_SESSION['output3'])) {
                        $a = $_SESSION['output3'];
                        echo $a;
                        unset($_SESSION["output3"]);
                        } else {
                            echo "";
                        }?>
                </div>
            </div>
            <!--Thursday-->
            <div class="student-box">
                <div class="student-name"><?php 
                    if ($_SESSION['statement4'] == true) {
                        $aa = $_SESSION['student_full_name'];
                        echo $aa;
                    } else if ($_SESSION['statement4'] == false) {
                        echo "none";
                    }
                    ?>
                </div>
                <div class="student-time"><?php 
                    if(!empty($_SESSION['output4'])) {
                        $a = $_SESSION['output4'];
                        echo $a;
                        unset($_SESSION["output4"]);
                        } else {
                            echo "";
                        }?>
                </div>
            </div>
            <!--Friday-->
            <div class="student-box">
                <div class="student-name"><?php 
                    if ($_SESSION['statement5'] == true) {
                        $aa = $_SESSION['student_full_name'];
                        echo $aa;
                    } else if ($_SESSION['statement5'] == false) {
                        echo "none";
                    }
                    ?>
                </div>
                <div class="student-time"><?php 
                    if(!empty($_SESSION['output5'])) {
                        $a = $_SESSION['output5'];
                        echo $a;
                        unset($_SESSION["output5"]);
                        } else {
                            echo "";
                        }?>
                </div>
            </div>
            <!--Saturday-->
            <div class="student-box">
                <div class="student-name"><?php 
                    if ($_SESSION['statement6'] == true) {
                        $aa = $_SESSION['student_full_name'];
                        echo $aa;
                    } else if ($_SESSION['statement6'] == false) {
                        echo "none";
                    }
                    ?>
                </div>
                <div class="student-time"><?php 
                    if(!empty($_SESSION['output6'])) {
                        $a = $_SESSION['output6'];
                        echo $a;
                        unset($_SESSION["output6"]);
                        } else {
                            echo "";
                        }?>
                </div>
            </div>
            <!--Sunday-->
            <div class="student-box">
                <div class="student-name"><?php 
                    if ($_SESSION['statement7'] == true) {
                        $aa = $_SESSION['student_full_name'];
                        echo $aa;
                    } else if ($_SESSION['statement7'] == false) {
                        echo "none";
                    }
                    ?>
                </div>
                <div class="student-time"><?php 
                    if(!empty($_SESSION['output7'])) {
                        $a = $_SESSION['output7'];
                        echo $a;
                        unset($_SESSION["output7"]);
                        } else {
                            echo "";
                        }?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>