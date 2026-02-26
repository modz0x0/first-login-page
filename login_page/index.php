<?php



include './included_files/conn.php';
include './included_files/insert.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>login_page</title>
</head>

<body>
   
    <div class="signup-container"> 
        <form action="index.php" method="POST"> 
            <h2>Sign Up</h2>
            
        
            <div>
                <label>User Name</label>
                <div id="emailhelp" class="form_texterror"><?php echo $error['firstnameerror'];?></div>
                <input type="text" name="user_name" id="username" >
                
            </div>

            <div>
                <label>Email</label>
                <input type="text" name="email" id="email" >
                <div id="emailhelp" class="form_texterror"><?php echo $error['invalidemail'];?></div>
                <div><?php echo $error['emailerror'];?></div>
                
            </div>

            <div>
                <label>Password</label>
                <div id="emailhelp" class="form_texterror"><?php echo $error['passworderror'];?></div>
                <input type="password" name="password" id="password" >
                
            </div>

            <input type="submit" name="submit" value="Sign Up" id="button">
        </form>
    </div>
 <script src="hello.js"></script>
</body>
</html>











