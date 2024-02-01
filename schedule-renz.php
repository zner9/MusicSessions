<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedules</title>
    <link rel="stylesheet" href="stylesheets/general.css">
    <link rel="stylesheet" href="stylesheets/header.css">
    <link rel="stylesheet" href="stylesheets/schedule.css">
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
    <main>
        <div class="side-bar">
            <div class="box">
                <div class="upper">
                    <img src="pictures/profile.jpg" class="profile">
                </div>
                <div class="bottom">
                    <div class="side-to-side">
                        <div class="name">Name:</div>
                        <di class="teacher-name">Renz Desiiderio</div>
                    
                    <div class="side-to-side">
                        <div class="name">Mobile Number:</div>
                        <div class="teacher-name">09279277234</div>
                    </div>
                    <div class="output">
                    You <strong>choose: </strong><?php
                        session_start(); 
                        if (isset($_POST['submit'])) {
                        $statement1 = false;
                        $statement2 = false;
                        $statement3 = false;
                        $statement4 = false;
                        $statement5 = false;
                        $statement6 = false;
                        $statement7 = false;
                        $_SESSION['statement1']=$statement1;
                        $_SESSION['statement2']=$statement2;
                        $_SESSION['statement3']=$statement3;
                        $_SESSION['statement4']=$statement4;
                        $_SESSION['statement5']=$statement5;
                        $_SESSION['statement6']=$statement6;
                        $_SESSION['statement7']=$statement7;
                            if (isset($_POST['row1-1'])) {
                                $statement1 = true;
                                $_SESSION['statement1']=$statement1;
                                $schedule1 = "9:00-9:45";
                                echo "<br>Monday: ${schedule1}";
                                $_SESSION['output1']=$schedule1;
                            } if (isset($_POST['row1-2'])) {
                                $statement2 = true;
                                $_SESSION['statement2']=$statement2;
                                $schedule2 = "9:00-9:45";
                                echo "<br>Tuesday: ${schedule2}";
                                $_SESSION['output2']=$schedule2;
                            } if (isset($_POST['row1-3'])) {
                                $statement3 = true;
                                $_SESSION['statement3']=$statement3;
                                $schedule3 = "9:00-9:45";
                                echo "<br>Wednesday: ${schedule3}";
                                $_SESSION['output3']=$schedule3;
                            } if (isset($_POST['row1-4'])) {
                                $statement4 = true;
                                $_SESSION['statement4']=$statement4;
                                $schedule4 = "9:00-9:45";
                                echo "<br>Thursday: ${schedule4}";
                                $_SESSION['output4']=$schedule4;
                            } if (isset($_POST['row1-5'])) {
                                $statement5 = true;
                                $_SESSION['statement5']=$statement5;
                                $schedule5 = "9:00-9:45";
                                echo "<br>Friday: ${schedule5}";
                                $_SESSION['output5']=$schedule5;
                            } if (isset($_POST['row1-6'])) {
                                $statement6 = true;
                                $_SESSION['statement6']=$statement6;
                                $schedule6 = "9:00-9:45";
                                echo "<br>Saturday: ${schedule6}";
                                $_SESSION['output6']=$schedule6;
                            } if (isset($_POST['row1-7'])) {
                                $statement7 = true;
                                $_SESSION['statement7']=$statement7;
                                $schedule7 = "9:00-9:45";
                                echo "<br>Sunday: ${schedule7}";
                                $_SESSION['output7']=$schedule7;
                            }
                            } 
                            
                        ?>
                    </div>
                </div>
            </div>
            <h1 class="reserve">R
                E
                S
                E
                R
                V
                E</h1>
        </div>
        <!--schedules-->
        <form action="<?php echo htmlspecialchars(
            $_SERVER['PHP_SELF']); ?>" method="POST">
            <label for="timetable" class="timetable" class="timetable">Time Table</label>
            <label for="timetable" class="timetable">Monday</label>
            <label for="timetable" class="timetable">Tuesday</label>
            <label for="timetable" class="timetable">Wednesday</label>
            <label for="timetable" class="timetable">Thursday</label>
            <label for="timetable" class="timetable">Friday</label>
            <label for="timetable" class="timetable">Saturday</label>
            <label for="timetable" class="timetable">Sunday</label>

            <label for="timetable" class="timetable">9:00-9:45</label>
            <input type="checkbox" value="" name="row1-1">
            <input type="checkbox" value="" name="row1-2">
            <input type="checkbox" value="" name="row1-3">
            <input type="checkbox" value="" name="row1-4">
            <input type="checkbox" value="" name="row1-5">
            <input type="checkbox" value="" name="row1-6">
            <input type="checkbox" value="" name="row1-7">

            <label for="timetable" class="timetable">9:45-10:30</label>
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">

            <label for="timetable" class="timetable">10:30-11:15</label>
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">

            <label for="timetable" class="timetable">11:15-12:00</label>
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">

            <label for="timetable" class="timetable">12:00-1:00</label>
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">

            <label for="timetable" class="timetable">1:00-1:45</label>
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">

            <label for="timetable" class="timetable">1:45-2:30</label>
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">

            <label for="timetable" class="timetable">2:30-3:15</label>
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">

            <label for="timetable" class="timetable">3:15-4:00</label>
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">

            <label for="timetable" class="timetable">4:00-4:45</label>
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">

            <label for="timetable" class="timetable">4:45-5:30</label>
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">

            <label for="timetable" class="timetable">5:30-6:15</label>
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">

            <label for="timetable" class="timetable">6:15-7:00</label>
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">
            <input type="checkbox" value="">

            <input type="submit" name="submit" class="submit-form">
        </form>
        <div class="bottom-bar">
            <a href="student-rates.html"><button class="proceed">PROCEED</button></a>
        </div>
    </main>
</body>
</html>