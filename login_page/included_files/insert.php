<?php



$error = [
    'firstnameerror' => '',
    'passworderror' => '',
    'emailerror' => '',
    'invalidemail'=>''
]; 


    // التحقق من البيانات
    if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['user_name']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

        if(empty($username)){
            $error['firstnameerror']="please type name";
            
        }elseif(empty($email)){
            $error['emailerror']="please type your email";
            
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error['invalidemail']='invalid email' ;
        }elseif(empty($password)){
            $error['passworderror']="please type password";
            
        } else {
            // تشفير الباسورد للأمان (اختياري بس يفضل)
            // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // جملة الاستعلام (تأكد من أسماء الأعمدة في قاعدة بياناتك)
            $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

            if(mysqli_query($conn, $sql)){
            // النجاح: ابعث الاسم للترحيب
            header('Location: index.php?user=' . urlencode($username));
            exit(); 
            } else {
            echo "Error: " . mysqli_error($conn);
            }

        }    
            
    }

?>
    
    
    
    



