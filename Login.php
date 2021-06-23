<html>
    <head><title>Login Page</title> 
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
        h1{
            background-color: red;
            text: black;
        }
    </style>
</head>
    <body>
        <div class="abc">
            <h1>Please enter Login Credentials</h1>
        <form action="Login.php" method="post" name="f1" onsubmit = "return validation()">
            Username: <input type="text" name="user" id="user">
            <br><br>
            Password: <input type="password" name="pass" id="pass">
            <br><br>
            <input type="submit" value="Submit">
        </form>
        </div>
       
        <script>  
            function validation(){  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script> 
        
    </body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $servername = "localhost";
    $username = "rohith";
    $password = "rohith";
    $dbname = "project";
    $con = new mysqli($servername, $username, $password, $dbname);

    $user=$_POST['user'];
    $pass=$_POST['pass'];
    echo"$user<br>$pass";

        $user= stripcslashes($user);  
        $pass = stripcslashes($pass);  
        $user = mysqli_real_escape_string($con, $user);  
        $pass = mysqli_real_escape_string($con, $pass);  
      
        $sql = "SELECT * from userdata where un = '$user' and pw = '$pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);  
        $count = mysqli_num_rows($result);  
        if($count == 1){  
            session_start();
            $_SESSION['uname']=$user;
            header('Location: ab.php');
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }



}

?>
<html>
    
</html>