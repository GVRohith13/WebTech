<html>
    <head>

    </head>
    <body>
        <form action="" method="post">
        Enter the Date:
        <input type="date" name="a" id="a"> <br><br>
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

    $servername = "localhost";
    $username = "rohith";
    $password = "rohith";
    $dbname = "project";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    else{
        echo "Connection was successful<br>";
    }
    
    $sql = "SELECT * FROM $ab";
    
    $result = mysqli_query($conn, $sql);
    
    // Find the number of records returned
    $num = mysqli_num_rows($result);
    
    echo $num;
    echo " records found in the contact TABLE <br>";
    // Display the rows returned by the sql query
    if($num> 0){
        // We can fetch in a better way using the while loop
        while($num!=0){
            $row = mysqli_fetch_assoc($result);
            echo "<hr><b>Date:</b>".$row['DateOfEntry'] .  ".<br><b>Data</b> ". $row['work'] ;
             echo "<br><hr>";
             $num--;
            
         }
     
     
     }
    else
    echo " No Record found for the query.<br>";


    }
  else{
    echo "Start New Session";
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