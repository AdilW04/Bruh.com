<?php
include "../PHP classes/User.php";
session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>F-encore</title>
    <link rel="stylesheet" href="../StyleSheets/StyleSheet.css" type="text/css"/>
<!--    google font stuff-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Varela Round', sans-serif;
        }
    </style>
</head>
<body>
<?php
if (isset($_GET["user"]))
{
    $_SESSION["user"]=$_GET["user"];
}
if (isset($_GET["session"]))
{
    if (isset($_SESSION["user"]))
    {
        session_unset();
        session_destroy();
    }
}
?>



<section class="blue">
    <?php
    //echo isset($bruh);
    if (isset($_GET["user"]) or isset($_SESSION["user"]))
    {
        echo "<a href='Index.php?session=false'><div> <h1 id= 'signIn'>Sign out</h1></div></a>";
    }
    if (isset($_SESSION["user"]))
    {
        echo "<h1 class='top-left'> Hello ".$_SESSION["user"]->GetUserName()."!</h1>";
    }
    else{
        echo "<div>
        <a href='Login.php'><h1 id='signIn'>Sign in</h1></a>
    </div>";
    }


    ?>

    <h1> Welcome to the Brain Repository Utilization Hub </h1>
    <p> Learning that doesn't suck</p>
    <div class="wave-bottom">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>


</section>
<section>
    <a href="CreateQuestion.php"><h2>Create a Question</h2></a>
    <br>
    <p>Click above to create a question for<br> strangers around the world to answer</p>



</section>
<section class="orange">

    <!-- code for wave svg thing-->
    <div class="wave-top">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>

        </svg>
        <div class="center">
            <a href="ViewQuestions.php"><h2>View All Questions</h2></a>
            <br>
            <p>See every question ever made</p>
            <br>
            <p>(development purposes only)</p>
        </div>
    </div>
    <div class="wave-bottom">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>



</section>

<section>
    <a href="AnswerQuestions.php"><h2>Answer Questions</h2></a>
    <br>
    <p>click above to have a go at answering some questions</p>

</section>

<section class="red ">

    <!-- code for wave svg thing-->
    <div class="wave-top">

        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
        <div class="center">
            <a href="SiteInfo.html"><h2>View Site Info</h2></a>
            <br>
            <p>click above to see some information about this site</p>
        </div>

    </div>
    <div class="wave-bottom">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>

</section>

<section>
<!--    <a href="Search.php"><h2>Search For Questions</h2></a>-->
<!--    <br>-->
<!--    <p>Search for some questions to answer</p>-->
    <a href="UsersQuestions.php"><h2>View your questions</h2></a>
    <br>
    <p>click above to see all awful the questions you have plagued my database with</p>

</section>

<!--<section class="teal">-->
<!---->
<!--     code for wave svg thing-->
<!--    <div class="wave-top">-->
<!---->
<!--        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">-->
<!--            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>-->
<!--        </svg>-->
<!--        <div class="center">-->
<!--            <a href="UsersQuestions.php"><h2>View your questions</h2></a>-->
<!--            <br>-->
<!--            <p>click above to see all awful the questions you have plagued my database with</p>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--    <div class="wave-bottom">-->
<!--        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">-->
<!--            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>-->
<!--        </svg>-->
<!--    </div>-->
<!---->
<!--</section>-->


</body>
</html>
