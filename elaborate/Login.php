<?php
session_start();

function Login(){
    //Server connection
    require('AuthConnection.php');
   
    //Extra control
    if(!empty($_POST["Lemail"]) && !empty($_POST["Lpassword"])){            //secure authentication
            $email = mysql_real_escape_string($_POST["Lemail"]);
            $password = mysql_real_escape_string($_POST["Lpassword"]);
            $password=md5($password);
            $query = "SELECT Name FROM `user` WHERE email='$email' and password='$password' ";
            $result = $mysqli->query($query);
            if(!$result){
                   $message = 'Invalid query: ' . $mysqli->error . "\n";
                    $message .= 'Whole query: ' . $query;
                    die($message);
            
            }
        
         if($result->num_rows>0){
             $username = $result->fetch_assoc();
             $_SESSION['username'] = $username['Name'];
             setcookie("usermerge",$_SESSION['username'],time()+84600,"/",$_SERVER['SERVER_NAME']);
            header("Location: secure.php"); // Redirect user to secure.php
         }else{
             echo "<div class='form'><h3>Username/password is       incorrect.</h3><br/>Click here to <a                href='../index.php'>Login</a></div>";
         }
        
           
    }else{
        
        echo " non hai inserito tutti i parametri";
        
    }
    $mysqli->close();
    return;
}
Login();
?>