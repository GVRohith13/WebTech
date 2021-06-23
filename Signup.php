<html>
    <head><title>Sign Up Page</title>
    <style>
<style>
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
        .abc{
            border: 5px outset red;
            background-color: lightblue;    
            text-align: center;
            padding: 10px;
        }
        h3{
          background-color: yellow;
        }
    </style>
    </style>
    </head>
    <body>
      <div class="abc">

      <h3>Kindly Enter the Details        </h3>
        
        <form action="Signup.php" method="POST">
            Username: <input type="text" id="name" name="name"><br><br>
            Password: <input type="password" id="Id" name="Id"><br><br>
            Date of Birth: <input type="date" id="date" name="date"><br><br>
            Mail: <input type="email" id="mail" name="mail"><br><br>
            Photo: <input type="file" id="image" name="image">
            <br><br>
            <input type="submit" value="Submit">
        </form>
      </div>
        
    </body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

$servername = "localhost";
$username = "rohith";
$password = "rohith";
$dbname = "project";

$un=$_POST['name'];
$pw=$_POST['Id'];
$dob=$_POST['date'];
$img=$_POST['image'];
$mail=$_POST['mail'];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO userdata(un,pw,mail,dob,img)
VALUES ('$un','$pw','$mail','$dob','$img')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>You are Successfully Registered...</h1>";
  header('Location: Login.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
} 
?>