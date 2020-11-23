
<?php
require 'session.php'; 
require 'vendor\autoload.php';
session_start();
if (!$_SESSION['usertype']=='hod')
{
    header('location:login.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOD and ADMIN DASHBOARD</title>
    <!-- Google font cdn file imported here -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- bootstrap cdn files for the Tables and other contents  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Link the External Css here And please see name Its a Styles.css  -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="p">
        <!-- NavBar for the Logo and the title -->
        <div class="nav">
            <div class="logo">
            <img src="polybond - logo.png" alt="">
            </div>
            <center><span class="hr">HOD dashboard</span></center>
           <span style="margin-left:700px; margin-top:30px; font-size:20px;">
            <?php  echo $_SESSION['email'] ?>
</span>
            <hr>
        </div>
        <hr>
        <!-- Logo and the title navbar close here -->



        <!-- Main navbar that contains home recruittment Should Be start here -->
        <nav class="shadow p-3 mb-5 bg-white rounded">
            <div class="gri">
                <div class="item1">
                    <a href="HodDashboard.php"> HOME</a>
                </div>
                <div class="item2">
            <div class="dropdown">
                    <a href="#">RECRUITMENT</a>
                   <div class="dropdown-content">
                            <a href="Requisition.php"><p>REQUISITION</p></a>
                            <a href="open_positions.php"><p>OPEN POSITIONS</p></a>
                            <a href="closedposition.php"><p>CLOSED POSITIONS</p></a>
                       
                </div>
        </div>
        </div>
                <div class="item3">
                    <div class="dropdown">
                        <span> <a href="#"> TRAINNING</a></span>
                        <div class="dropdown-content">
                            <a href="skillmatrixlist.php"><p>SKILL MATRIX</p></a>
                            <a href="trainnomination.php"><p>TRAINING NOMINATIONS CARD</p></a>
                            <a href="calender.php"><p>TRAINING CALENDER</p></a>
                            <a href="emptrainscheduleview.php"><p>TRAINING SCHEDULE</p></a>
                            <a href="empeffleclist.php"><p>EFFECTIVENESS</p></a>
                        </div>
                    </div>
                </div>
                <div class="item4">
                    <a href="#"> PMS    </a>


                </div>
                <div class="item5">
                    <a href="#"> WELFARE    </a>


                </div>
                    <div class="item7">
                    
                        <span> <a href="logout.php"> Logout</a></span>
                    </div>
        
            </div>
        </nav>
        </div>
    <!-- Main navbar Close here -->

</body>

</html>
