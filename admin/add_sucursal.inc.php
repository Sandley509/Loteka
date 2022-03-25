
    <?php


if (isset($_POST['submit'])) {
    // database include
    require('../db.php');
    // recover values
    $login=mysqli_real_escape_string($pdo,$_POST['login']);
    $psw=$_POST['psw'];
    $email=mysqli_real_escape_string($pdo,$_POST['email']);
    $phone=mysqli_real_escape_string($pdo,$_POST['phone']);
    $addr=mysqli_real_escape_string($pdo,$_POST['addr']);


    // error handlers
    // lets check for empty field
    if(empty($login & $psw & $email & $phone  )){
        header("Location: ./add_sucursal.php?Empty_field");
        exit();

    }else{
        // lets check if input chracteres are valid
        if (preg_match("/^[a-zA-Z]*$^/",$login,$direction)) {
            header("Location: ./add_sucursal.php?invalid");
            exit();
        }
            else{
                // lets check if the pseudo is not taken
                $sql="SELECT * FROM sucursal WHERE login_credentials='$login'";
                $result=mysqli_query($pdo,$sql);
                $resultCheck=mysqli_num_rows($result);
                if($resultCheck > 0){
                    header("Location: ./add_sucursal.php?user_taken");
                    exit();
                }else{
                    // lets Hashing the password
                  
                        $hashpassword=password_hash($psw,PASSWORD_DEFAULT);
                    
                    
                    $sql="INSERT INTO sucursal (login_credentials,psw,email,phone,addr)
                                     VALUES ('$login','$hashpassword','$email','$phone','$addr')";
                    mysqli_query($pdo,$sql);


                    header("Location: ./AdminDashboard.php?Sucursal_added_successfuly");
              
                    exit();
                }
            }
        }

    }
    

else{
    header("Location: ./add_sucursal.php?=error_LOGIN");
    exit();
}

?>