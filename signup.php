<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'users';

$accept = false;
$dbconnection = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
 ?><?php
 if($_POST)
{
    $sqlquery = "INSERT INTO `users` (`username`, `mobile`, `email`, `password`) VALUES ('{$_POST['username']}', '{$_POST['mobile']}', '{$_POST['email']}', '{$_POST['password']}');";
    $data;$row;
    if($dbconnection -> query($sqlquery) === true){
        $accept = true;    
    }else{
        $error = $dbconnection -> error;
        if(strpos($error , 'email'))
        {
            echo "<script>alert('email already taken.');</script>";
        }elseif(strpos($error , 'mobile'))
        {
            echo "<script>alert('Number already taken.');</script>";
        }
    }

    
    if($accept)
    {
        echo "<script>alert('USER REGISTERED..!!!');</script>";
    }
}
?>

<?php mysqli_close($dbconnection); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>
<body>
    <div class="head">  
        <div class="main">
            <div class="up">
                <div class="top">
                    <img src="Images/Img2.png" alt="">
                </div>
                <form onsubmit="return verify();" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <p class="txt">Sign up Here</p>
                    <div class="input">
                        <input type="username" placeholder="Name" name="username" id="name" onclick="dislighting(this.id)">
                        <span class="pic"><img src="Images/Img7.png" alt=""></span>
                        <span id="username" class="warning"></span>
                    </div>
                    <div class="input">
                        <input type="email" placeholder="Email" name="email" onclick="dislighting(this.id)" id="text" >
                        <span class="pic"><img src="Images/Img4.png" alt=""></span>
                        <span id="email" class="warning"></span>
                    </div>
                    <div class="input">
                        <input type="tel" placeholder="Mobile" name="mobile" onclick="dislighting(this.id)" id="mobile" >
                        <span class="pic"><img src="Images/Img1.png" width="20" alt=""></span>
                        <span id="num" class="warning"></span>
                    </div>
                   <div class="input">
                        <input type="password" placeholder="Password" name="password" onclick="dislighting(this.id)" id="pass" >
                        <span class="pic"><img src="Images/Img5.png" alt=""></span>
                        <span id="password" class="warning"></span>
                    </div>
                    <div class="input">
                        <input type="password" placeholder="Confirm Password" name="confirm_password" onclick="dislighting(this.id)" id="confirm" >
                        <span class="pic"><img src="Images/Img5.png" alt=""></span>
                        <span id="conpassword" class="warning"></span>
                    </div>
                    <button type="submit" class="btn submit">
                        <img src="Images/Img3.png" alt="">
                    </button>
                </form>
            </div>  
        </div>  
    </div>
</body>
    <script src="verify.js"></script>
</html>