
<?php
//this page allows users to view their own questions
include "../PHP classes/User.php";
session_start();
if (!isset($_SESSION["user"]))
{
    header("Location:Login.php");
}
?>
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
<a href="Index.php" , class="home"><h1 class="home">Bruh.com</h1></a>
<div class="center">

<?php
//creates a html table that gets populated with php variables taken from the questions table
$connection=new mysqli("localhost","root");
$result=$connection->query("SELECT Question, Answer, UserID FROM questionsdb.questions WHERE UserID=".$_SESSION["user"]->GetID());
$connection->close();
echo "
<table>
<tr><th>Question</th> <th>Answer</th></tr>

";
while ($row=$result->fetch_assoc())
{
    echo "<tr><td>".$row["Question"]."</td><td>".$row["Answer"]."</td>";
}
?>
</div>
</body>
</html>