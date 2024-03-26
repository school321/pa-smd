<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/logo_pa.png" type="image/x-icon">
    </style>
    <style>
        .container{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            padding: 0 0 0 7%;
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
    <title>Daftar</title>
</head>
<body style="background: #fff;">
      <div class="container" id="bacot">
        <div class="box form-box">

        <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            header("Location: register.php?error=Email ini telah digunakan, coba yang lain!");
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe");
            header("Location: login.php?notif=Pendaftaran Berhasil");

         }

         }else{
         
        ?>

            <header>Daftar</header>
            <form action="" method="post">
                <div class="field input">
                    <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <input type="number" name="age" id="age" placeholder="Umur" autocomplete="off" required>
                </div>
                <div class="field input">
                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
                </div>
                <?php if (isset($_GET['error'])) { ?>
                 <p class="nolan" style="text-align: center; background: #f9eeee; color: #e13330; font-size: 11px; padding: 7px; width: 90%; border-radius: 5px; margin: -10px auto 10px auto;"><?php echo $_GET['error']; ?></p>
                 <?php } ?>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Sudah punya akun? <a href="login.php">Masuk sekarang</a>
                </div>
            </form>
        </div>
        <?php } ?>

        <div class="image">
            <img src="img/signup.png" alt="" style="height: 370px;">
        </div>
      </div>
</body>
</html>