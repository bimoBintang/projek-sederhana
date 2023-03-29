<? php
        include 'config.php';
        if ( iseet($_POST['submit'])) {
            $name = mysqli_real_escape_string($coon, $_POST['name']);
            $email = mysqli_real_escape_string($coon, $_POST['email']);
            $password = mysqli_real_escape_string($coon, md5($_POST['password']));

            echo "$name";
        }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container-login-data">
        <div class="wrapper-container-login-data">
            <header class="Navbar-container-login-data">
                <main class="wrapper-Navbar-login-data">
                    <div class="container-logo-home-header">
                        <a href="#"><img src="./image/J3jd2D2MK32mi32ebm,.23.png" alt=""></a>
                    </div>
                    <div class="container-search-feeds-data">
                        <div class="logo-search-data">
                            <img src="./image/search.png" alt="">
                        </div>
                        <input type="search" class="container-search-feeds" >
                    </div>
                    <div class="toggle-pagation-pages">
                        <div class="pagation-horizontal-pages-feeds"></div>
                        <div class="pagation-horizontal-pages-feeds"></div>
                        <div class="pagation-horizontal-pages-feeds"></div>
                    </div>
                </main>
            </header>
            <div class="container-login-data-colum">
                <div class="wrapper-container-login-data-colum">
                        <h2 class="text-Register-login-data">Register</h2>
                <form class="Register-login-data" action="" method="post">
                    <div class="Register-account-login-data">
                        <h2 type="name">Username</h2>
                        <input type="text" name="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="Register-account--login-data">
                        <h2 type="email">Email</h2>
                        <input type="email"  name="email" placeholder="Enter Your Email" required>
                    </div>    
                    <div class="Register-account-login--data">
                        <h2 type="Password" >Password</h2>
                        <input type="password" name="password" placeholder="Enter Your Password" required>
                    </div>
                    <div class="btn-login-data">
                    <button type="submit" name="submit" ></button>
                    </div>
                </form>
                
                </div>  
                <div class="switch-login-data">
                    <p class="switch-data-login-register">Berahli ke</p>
                    <h3><a class="switch-data-login-link" href="" >Login Now</a></h3>
                </div>
                </div>
            </div>
        </div>  
    </div>
</body>
</html>