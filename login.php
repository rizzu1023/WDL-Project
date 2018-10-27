<!DOCTYPE html>
<html lang="en" style="font-size:18px">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body style="background:#e0e0e0">
<?php
        
        
        if($_POST){
                ini_set('display_errors',1);error_reporting(E_ALL);

                require_once "PHP/functions.php";

                $username=$_POST['username'];
                $password=$_POST['password'];
                
                $q="Select * from user where username='$username' and password='$password'";
                $chek=Query($q);
                // echo mysqli_num_rows($chek);
                if(mysqli_num_rows($chek) > 0){
                        echo '<span>You are successfully Logged In</span>';
                        header("Refresh:3, url=index.php");
                }
                else{
                        echo '<span>Incorrect Password or Username</span>';
                }
        }
        

        

       
?>
        <header class="header">
                <nav class="navigation">
                    <div class="navigation__icon"><a href="login.php"><i class="fas fa-user"></i></a></div>
                    <div class="navigation__movie"><h3 class="navigation__naac-h3">Movies</h3></div>
                    <!-- <div class="navigation__input"><i class="fas fa-search"></i><input type="text" name="#" placeholder="Search Movie, actor & theatre"></div> -->
                    <!-- <a href="#"><div class="navigation__div1"><span>Box office</span></div></a> -->
                    <!-- <a href="#"><div class="navigation__div2"><span>Theatre</span></div></a> -->
                    <a href="#"><div class="navigation__div3"><span>About us</span></div></a>
                    <a href="index.php"><div class="navigation__div4"><span>Home</span></div></a>

        
            </header>
    <section class="login">
            <h3 class="login__h3">Sign In With</h3>
            <a href="#"><div class="login__fb"><i class="fab fa-facebook-f fb"></i><span>Facebook</span></div></a>
            <a href="#"><div class="login__gg"><i class="fab fa-google gp"></i><span>Google</span></div></a>
            <form class="login__form" action="login.php" method="post">
                    <input type="text" class="login__form-username" placeholder="username" name="username">
                    <input type="password" class="login__form-password" placeholder="password" name="password">
                    <input type="submit" class="login__form-submit"  value="Log in">

            </form>
            <span class="login__span">Not a member?<a href="signin.php">Sign Up NOW</a></span>
    </section>
</body>
</html>