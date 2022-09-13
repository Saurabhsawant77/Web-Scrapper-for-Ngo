<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <script src="https://kit.fontawesome.com/f2116c735f.js" crossorigin="anonymous"></script>
    <title>WEB SCRAPER</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<style>
   *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins",sans-serif;
}

body{
    /* background-repeat: no-repeat;
    background-size: 1728px 904px;
    background-image: url(/img/bg.png); 
     background-size: cover;
    background-repeat: no-repeat; */
    position: relative;
    min-height: 100vh;
    width: 100%;
    overflow: hidden;
    background-color: black;
}

.sidebar{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 78px;
    background: #4b40bf;
    padding: 6px 14px;
    transition: all 0.5s ease;
}

.sidebar.active{
    width: 250px;
}

.sidebar .logo_content .logo{
    color: #fff;
    display: flex;
    height: 50px;
    width: 100%;
    align-items: center;
    opacity: 0;
    pointer-events: none;
    transition: all 0.5s ease;
}

.sidebar.active .logo_content .logo{
    opacity: 1;
    pointer-events: none;
}

.logo_content .logo i{
    font-size: 28px;
    margin-right: 5px;
}

.logo_content .logo .logo_name{
    font-size: 20px;
    font-weight: 400;
}

.sidebar #btn{
    position: absolute;
    color: #fff;
    top: 6px;
    left: 50%;
    font-size: 20px;
    height: 50px;
    width: 50px;
    text-align: center;
    line-height: 50px;
    transform: translateX(-50%);
}

.sidebar.active #btn{
    left: 90%;
}

.sidebar ul{
    margin-top: 20px;
}

.sidebar ul li{
    position: relative;
    height: 50px;
    width: 100%;
    margin: 0 5px;
    list-style: none;
    line-height: 50px;
    list-style: none;
    border-radius: 12px;
}

.sidebar ul li .tooltip{
    position: absolute;
    left: 120px;
    top: 50%;
    transform: translate(-50% , -50%);
    border-radius: 6px;
    height: 35px;
    width: 122px;
    background: #fff;
    line-height: 35px;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    transition: 0s;
    opacity: 0;
    pointer-events: none;
    display: block;
}

.sidebar.active ul li .tooltip{
    display: block;
}

.sidebar ul li:hover .tooltip{
    transition: all 0.5s ease;
    opacity: 1;
    top: 50%;
}

.sidebar ul li a{
    color: #fff;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: all 0 0.4s ease;
    border-radius: 12px;
    white-space: nowrap;
}
.sidebar ul li a:hover{
    color: #11101d;
    background: #fff;
}

.sidebar ul li i{
    height: 50px;
    min-width: 50px;
    border-radius: 12px;
    line-height: 50px;
    text-align: center;
}

.sidebar .links_name{
    opacity: 0;
    pointer-events: none;
    transition: all 0.5s ease;
}

.sidebar.active .links_name{
    opacity: 1;
    pointer-events: none;
}

.home_content{
    position: absolute;
    height: 100%;
    width: calc(100% - 78px);
    left: 78px;
    transition: all 0.5s ease;
}

.home_content .text{
    font-size: 25px;
    font-weight: 500;
    color: #1d1b31;
    margin: 12px;
}

.sidebar.active ~ .home_content{
    width: calc(100% - 240px);
    left: 240px;
}
.text{
    text-align: center;
    font-size: 30px;
    font-family: 'Times New Roman', Times, serif;
}

.container {
    top: 50px;
    left: 710px;
    position: absolute;
    height: 620px;
    width: 600px;
    box-shadow: 1px 2px 25px white;
    border-radius: 5px;
    border: 3px solid white;
    background-image: linear-gradient(45deg,#3e32a8,#e310c7);
    padding: 25px;
}

    .title {

        line-height: 35px;
        /* background-color: black; */
        color: white;
        padding-left: 20px;
        border-radius: 5px 5px 0 0;
        font-size: 35px;
        font-weight: 600;
        text-align: center;

    }

    input[type=text],
    input[type=number],
    input[type=email] {
        font-size: 15px;
        height: 10px;
        width: 245%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        /* background: rgb(19, 17, 17); */
        color: black;
    }

    hr {
        position: absolute;
        top: 70px;
        width: 100%;
        left: 0px;
    }

    .container .name {
        color: white;
        font-size: 25px;
        position: absolute;
        top: 110px;
    }

    .container .email {
        color: white;
        font-size: 25px;
        position: absolute;
        top: 215px;

    }

    .container .phone {
        color: white;
        font-size: 25px;
        position: absolute;
        top: 325px;

    }

    .container .ratings {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 300px;
        line-height: 25px;

    }

    .container .msg {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 375px;
    }

    .but {
        position: absolute;
        top: 560px;
        left: 250px;
    }

    .but input {
    background-color: rgb(255, 255, 255);
    color: black;
    width: 200%;
    height: 40px;
    font-size: 18px;
}
    textarea{
        width: 142%;
    }
</style>

<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name">WEB SCRAPER FOR NGO'S</div>
            </div>
            <i class="fa-solid fa-bars" id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="#">
                    <i class="fa-solid fa-house"></i>
                    <span class="links_name">Home</span>
                    <span class="tooltip">Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-address-book"></i>
                    <span class="links_name">Contact</span>
                    <span class="tooltip">Contact</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-info" aria-hidden="true"></i>
                    <span class="links_name">About Us</span>
                    <span class="tooltip">About Us</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="title"><span>Enter Your Details
                <hr>
            </span></div>
        <form action="rajasthan.php" method="post">
            <div class="name">
                <label for="name">Enter Your Name</label><br>
                <input type="text" placeholder="Enter Name here" name="name" id="name" required>
            </div>
            <div class="email">
                <label for="name">Enter Your Email</label><br>
                <input type="email" placeholder="Enter Email" name="email" id="email" required>
            </div>
            <div class="phone">
                <label for="name">Enter Your Phone</label><br>
                <input type="number" placeholder="Enter Phone number" name="phone" id="phone" required>
            </div>
            <!-- <div class="ratings">
                <label for="name">Ratings</label><br>
                <input type="radio" name="s" value="Bab"> Bad
                <input type="radio" name="s" value="female"> Good
                <input type="radio" name="s" value="female"> very Good
                <input type="radio" name="s" value="female"> Excellent
            </div> -->
            <!-- <div class="msg">
                <label for="">Any suggestions</label><br>
                <textarea name="msg" rows="8" cols="50" required></textarea>
            </div> -->
            <div class="but">
                <input type="submit" value="submit" name="submit">
            </div>
        </form>
    </div>
    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");

        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>
    <?php
    if(isset($_POST['submit'])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_post["phone"];
    }
    
    ?>
</body>
</html>