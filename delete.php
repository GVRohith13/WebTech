<html>
    <head>
<style>
    .abc{
            border: 5px outset red;
            background-color: lightblue;    
            text-align: center;
            padding: 10px;
          
        }
        .bcd{
          border: 5px outset red;
            background-color: lightblue;    
            text-align: center;
            padding: 10px;
        }
        header{
            background-color: red;
            text-align: center;
        }
        body{
            background-color: yellow;
            background-image: url('diary.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        button{
            text-align: center;
        }
        a{
            text-align: center;
            color: black;
        }
        
        h1{
            background-color: red;
            text: black;
        }
</style>
    </head>
    <body>
        <form action="" method="post">
        Enter the Date:
        <input type="date" name="a" id="a"> <br><br><br><br>
        
        <input type="submit" value="Enter">
        </form>
    </body>
</html>

<?php
session_start();
if(isset($_SESSION['uname'])){
    $ab=$_SESSION['uname'];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $a=$_POST['a'];
// Connecting to the Database
$servername = "localhost";
$username = "rohith";
$password = "rohith";
$database = "project";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}


$sql = "DELETE FROM $ab WHERE DateOfEntry = '$a'";

$result = mysqli_query($conn, $sql);

$afr = mysqli_affected_rows($conn);

echo "<br>Number of affected rows: $afr <br>";

if($afr >0){
    echo "Deleted successfully";
}
else{
    $err = mysqli_error($conn);
    echo "Not record found with this regn number";
}
}}
?>
<html>
  <head>
    <style>
        .bcd{
          border: 5px outset red;
            background-color: lightblue;    
            text-align: center;
            padding: 10px;
        }
    </style>
  </head>
  <body>
  
    <div class="bcd">
      <button><a href="logout.php">Logout</a></button>
    </div>
  </body>
</html>