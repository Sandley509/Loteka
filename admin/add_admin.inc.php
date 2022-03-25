
    <?php


if (isset($_POST['submit'])) {
    // database include
    include_once('../db.php');
    // recover values
    $login=mysqli_real_escape_string($pdo,$_POST['login']);
    $psw=$_POST['psw'];
    $pin=mysqli_real_escape_string($pdo,$_POST['pin']);


    // error handlers
    // lets check for empty field
    if(empty($login & $psw & $pin )){
        header("Location: ./add_admin.php?Empty_field");
        exit();

    }else{
        // lets check if input chracteres are valid
        if (preg_match("/^[a-zA-Z]*$^/",$login)) {
            header("Location: ./add_admin.php?invalid");
            exit();
        }
            else{
                // lets check if the pseudo is not taken
                $sql="SELECT * FROM users WHERE login_credentials='$login'";
                $result=mysqli_query($pdo,$sql);
                $resultCheck=mysqli_num_rows($result);
                if($resultCheck > 0){
                    header("Location: ./add_admin.php?user_taken");
                    exit();
                }else{
                    // lets Hashing the password
                  
                        $hashpassword=password_hash($psw,PASSWORD_DEFAULT);
                    
                    
                    $sql="INSERT INTO users (login_credentials,psw,pin)
                                     VALUES ('$login','$hashpassword','$pin')";
                    mysqli_query($pdo,$sql);


                    $_SESSION['login_credentials']=$login;
                    header("Location: ./index.php?Addin_user_complete_login_now");
              
                    exit();
                }
            }
        }

    }
    

else{
    header("Location: ./add_admin.php?=error_LOGIN");
    exit();
}

?>