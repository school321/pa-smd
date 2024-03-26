<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo_pa.png" type="image/x-icon">
    <title>Pengadilan Agama Sumedang</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Lilita+One&family=Poppins:wght@200;400;600;800&family=Roboto:wght@900&family=Rubik:wght@300;400;500;600;700;800;900&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
    color: #000;
}

:root{
    --main: #004304;
    --mainn: #dfc20a;
}

.abccde{
    display: flex;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    height: 100px;
    justify-content: space-around;
    align-items: center;
    color: #fff;
    box-sizing: border-box;
    padding: 0 3%;
    transition: .3s;
    z-index: 999;
}

.abccde #b{
    border-radius: 5px;
    background: #dfc20a;
    padding: 3px 10px;
}

.abccde .logo{
    font-size: 20px;
}

.abccde .akun{
    display: flex;
    gap: 35px;
    box-sizing: border-box;
}

.abccde .akun a,
.abccde .akun #a{
    text-decoration: none;
    font-size: 13px;
    position: relative;
}

.abccde #a,
.abccde #b{
    font-weight: 600;
    transition: .3s;
    padding: 3px 5px;
}

.abccde #a:hover,
.abccde #b:hover{
    opacity: .8;
}

/* Beranda */
main{
    display: flex;
    padding: 0 7% 0 7%;
    align-items: center;
    justify-content: space-evenly;
    flex-wrap:wrap-reverse;
    height: 100vh;
    width: 100%;
    background: #fff;
    color: #fff;
    gap: 25px;
}

main .b{
    font-size: 55px;
    line-height: 50px;
}

main p{
    font-size: 13px;
}

main .beu{
    color: #009E0B;
    font-size: 25px;
}

#btn{
    margin: 30px 0;
    padding: 5px 10px;
    border-radius: 5px;
    border: none;
    font-weight: 600;
    background: #009E0B;
    cursor: pointer;
}

#btn:hover{
    opacity: .8;
}

@media only screen and (max-width:750px){
    .abccde{
        padding: 0 3%;
    }

    .abccde ul li{
        padding: 10px;
    }

    .abccde .akun{
        gap: 10px;
    }

    main{
        background: #fff;
        height: 100vh;
        padding-top: 100px;
        flex-direction: column-reverse;
    }

    main .col-1 h1{
        font-size: 24px;
    }

    main .col-1 .b{
        font-size: 45px;
        line-height: 40px;
    }

    main .col-1 p{
        font-size: 10px;
    }

    main .col-2 img{
        height: 250px;
    }
}



    </style>
</head>
<body>
    <!-- <div class="abccde">
        <div class="logo">
            <h3>nextar</h3>
        </div>
        <div class="akun">
            <h6><a href="register.php" id="a">Daftar</a></h6>
            <h6><a href="login.php" id="b">Masuk</a></h6>
        </div>
    </div> -->

    <!-- Beranda -->
    <main id="beranda">
        <div class="col-1">
            <h1><span class="beu">|</span> Pengadilan Agama <br> <span class="b">Sumedang</span></h1>
            <p>	
            Terwujudnya Pengadilan <br> Agama Sumedang yang Agung</p>
            <a href="login.php"><input type="button" value="Masuk" id="btn"></a>
        </div>
        <div class="col-2">
            <img src="img/index.png" alt="">
        </div>
    </main>

    <script src="style/script.js"></script>

</body>
</html>