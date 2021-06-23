<?php
session_start();
if(isset($_SESSION['uname'])){
    $ab=$_SESSION['uname'];
  
    echo "Welcome ". $_SESSION['uname'];
    echo "<br>";
    $servername = "localhost";
    $username = "rohith";
    $password = "rohith";
    $dbname="project";
    $conn = new mysqli($servername, $username, $password,$dbname);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}


$sql = "CREATE TABLE $ab (   DateOfEntry DATE  PRIMARY KEY,    work VARCHAR(30) NOT NULL)";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table '$ab' created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();


}
?>
<html>
  <head>
    <style>
      .abc{
            border: 5px outset red;
            background-color: lightblue;    
            text-align: center;
            display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
        }
        .grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
.a{
  background-image: url('view.jpg');
  height: auto;
}
.b{
  background-image: url('insert.jpg');
  height: auto;

}
.c{
  background-image: url('modify.jpg');
  height: auto;

}
.d{
  background-image: url('delete.jpg');
  height: auto;

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
  <div class="abc">
     <div class="a"><button><a href="view.php">View Entered Data</a></button></div>   
        <br>
        <br>
       <div class="b"><button><a href="enter.php">Enter New Data</a></button></div> 
        <br>
        <br>
        <div class="c"><button><a href="modify.php">Modify Entered Data</a></button></div>
        <br>
        <br>
        <div class="d"><button><a href="delete.php">Delete Entered Data</a></button></div>
    </div>
    <br><br>
    <div class="bcd">
      <button><a href="logout.php">Logout</a></button>
    </div>
  </body>
</html>