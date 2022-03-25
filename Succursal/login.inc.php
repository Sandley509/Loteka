<?php 
session_start();
require('../db.php');

if (isset($_POST['submit'])) {

    $login=mysqli_real_escape_string($pdo,$_POST['login']);
    $psw=$_POST['psw'];
      // error handlers
    // letsh check for empty field
    if( empty($psw & $login)){
        header("Location: ./index.php?Empty_field");
    
        exit();

    }
    
           else{

            
               $sql="SELECT * FROM sucursal WHERE login_credentials='$login' ";
               $result=mysqli_query($pdo,$sql);
               $resultCheck=mysqli_num_rows($result);
               if ($resultCheck < 1) {
                header("Location: ./index.php?=error");
                exit();
               }
               else{
                   if($row=mysqli_fetch_assoc($result)){
                        $hashedpasswordCheck=password_verify($psw,$row['psw']);
                        if($hashedpasswordCheck == false){
                            header("Location: ./index.php?wrong password");
                            exit();
                        }elseif($hashedpasswordCheck==true){
                            session_regenerate_id();
                            $_SESSION['loggedin'] = TRUE;
                            $_SESSION['u_id']=$row['id'];
                            $_SESSION['login_credentials']=$row['login_credentials'];
                        
                            header("Location: ./AdminSucursal.php");
                            exit();



                        }
                   }
               }

           }
    }
else{
    header("Location: ./index.php?empty");
    exit();
}



?>