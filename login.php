<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/logo_pa.png" type="image/x-icon">
    <title>Login</title>
    <style>
        .container{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            padding: 0 7% 0 0;
        }

        .box{
            box-shadow: none;
        }

        .image img{
            height: 370px;
        }

        @media only screen and (max-width:1080px){
            .image img{
                height: 250px;
            }
        }

        @media only screen and (max-width:750px){
            .image img{
                display: none;
            }
        }
    </style>
</head>
<body style="background: #fff;">
      <div class="container">

      <div class="image">
            <img src="img/login.png" alt="">
        </div>

        <div class="box form-box">
            <?php 
              include("php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                header("Location: login.php?error=Username atau Password Salah");
                }
                if(isset($_SESSION['valid'])){
                    header("Location: beranda.php");
                }
              }else{
            ?>

                

            <header>Masuk</header>
            <form action="" method="post">
                <div class="field input">
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
                </div>
                
                <div class="field input">
                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
                </div>
                
                <?php if (isset($_GET['error'])) { ?>
                 <p class="nolan" style="text-align: center; background: #f9eeee; color: #e13330; font-size: 13px; padding: 7px; width: 90%; border-radius: 5px; margin: -10px auto 10px auto;"><?php echo $_GET['error']; ?></p>
                 <?php } ?>

                 <?php if (isset($_GET['notif'])) { ?>
                 <p class="nolan" style="text-align: center; background: #f0f9ee; color: #30e136; font-size: 11px; padding: 7px; width: 90%; border-radius: 5px; margin: -10px auto 10px auto;"><?php echo $_GET['notif']; ?></p>
                 <?php } ?>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Tidak mempunyai akun? <a href="register.php">Daftar Sekarang</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>