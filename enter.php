<html>
    <head>

    </head>
    <body>
        <form action="" method="post">
        Enter the Date:
        <input type="date" name="a" id="a"> <br><br><br><br>
        Enter the Details:
        <textarea name="tx" id="tx" cols="30" rows="10"></textarea><br><br>
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
    $tx=$_POST['tx'];

    $servername = "localhost";
    $username = "rohith";
    $password = "rohith";
    $dbname = "project";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO $ab (DateOfEntry,work)
VALUES ('$a','$tx')";

if ($conn->query($sql) === TRUE) {
  echo "<p>Data is successfully entered...</p>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
}
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
  
    <div class="bcd">
      <button><a href="logout.php">Logout</a></button>
    </div>
  </body>
</html>