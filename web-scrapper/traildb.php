<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <script src="https://kit.fontawesome.com/f2116c735f.js" crossorigin="anonymous"></script>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <title>Contact</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/c240ae0fe1.js" crossorigin="anonymous"></script>
<style>

*{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
 }

 /* body{
    /* background: url("aboutimg.jpeg");
    background-size: cover;     */
    /* color: #11101d;
    text-shadow: #4b40bf; 
 } */
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

.logoimg{
    position: absolute;
    top: 15px;
    left: 515px;
    /* border-radius: 30px; */
    /* border: 2px solid black; */
}

.logoimg img {
        /* width: 200px;
        height: 200px; */
        transition: width 4s, height 4s transform 4s;
    }

.logoimg img:hover {
        width: 90px;
        height: 90px;
        transform: rotate(0deg);
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

.home_content {
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
        font-family: 'Lora', serif; 
        font-size: 85px;
        position: absolute;
        /* text-align: center; */
        left: 630px;
        top: 0px;
        color: #4bb9ef;
        text-shadow: 4px 4px #981ec7;
    }

.container {
    top: 110px;
    left: 775px;
    position: absolute;
    height: 680px;
    width: 600px;
    box-shadow: 1px 2px 25px black;
    border-radius: 5px;
    border: 3px solid white;
    background-image: linear-gradient(45deg,#3e32a8,#e310c7);
    padding: 25px;
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


    .container .name {
        color: white;
        font-size: 25px;
        position: absolute;
        top: 70px;
    }

    .container .email {
        color: white;
        font-size: 25px;
        position: absolute;
        top: 175px;

    }

    .container .phone {
        color: white;
        font-size: 25px;
        position: absolute;
        top: 275px;

    }

.container .concern{
        color: white;
        font-size: 25px;
        position: absolute;
        top: 380px;
    }
   
textarea{
        width: 100%;
        font-size: 18px;
    }

    .but {
        position: absolute;
        top: 600px;
        left: 250px;
    }

    .but input {
    background-color: rgb(241, 178, 232);
    color: black;
    width: 200%;
    height: 40px;
    font-size: 18px;
}
.ic1{
    position: absolute;
    top: 200px;
    left: 150px;
    height: 45px;
    width: 190px;
    opacity: 0.6;
    /* border-radius: 100%; */
    background-color: #e310c7;
    box-shadow: 2px 2px black;
}

.ic1:hover{
    opacity: 1;
}

.ic2{
    position: absolute;
    top: 400px;
    left: 150px;
    height: 45px;
    width: 190px;
    opacity: 0.6;
    /* border-radius: 100%; */
    background-color: #e310c7;
    box-shadow: 2px 2px black;
}

.ic2:hover{
    opacity: 1;
}

.ic3{
    position: absolute;
    top: 600px;
    left: 150px;
    height: 45px;
    width: 170px;
    opacity: 0.6;
    /* border-radius: 100%; */
    background-color: #e310c7;
    box-shadow: 2px 2px black;
}

.ic3:hover{
    opacity: 1;
}

 .fa{
    padding: 10px;
    /* align-items: center; */
    /* font-size: 25px; */
    /* width: 25px; */
} 

.ic1con,.ic2con,.ic3con{
    position: absolute;
    top: 55px;
    color: #981ec7;
}

.alert{
    position: absolute;
    top: 800px;
    left: 500px;
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
                <a href="http://localhost/miniproj/homepage.php">
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
                <a href="http://localhost/miniproj/about.php">
                    <i class="fa-solid fa-info" aria-hidden="true"></i>
                    <span class="links_name">About Us</span>
                    <span class="tooltip">About Us</span>
                </a>
            </li>
        </ul>
     </div>
    <div class="home_content">
        <div class="logoimg">
        <img src="logo.jpeg" alt="scrapeimg" width="80" height="80">
        </div>
     <div class="contact">
        <div class="text">Contact Us</div>

 
<div class="icons">
    <div class="ic1">
        <i class="fa fa-phone fa-1x"></i>&nbsp;&nbsp;PHONE
        <div class="ic1con"><p>8828357179 <br>9321988451</p></div>
    </div>
    <div class="ic2">
        <i class="fa fa-location-dot fa-1x"></i>&nbsp;&nbsp;ADDRESS
        <div class="ic2con"><p>A-2 447, <br>Vashi, <br>Navi Mumbai</p></div>
    </div>
    <div class="ic3">
        <i class="fa fa-envelope fa-1x"></i>&nbsp;&nbsp;EMAIL
        <div class="ic3con"><p>scraperngo@gmail.com</p></div>
    </div>

</div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $concern = $_POST['concern']
 
  
// echo 'Success!!, your Email ' . $email. ' and password has been submitted';



//connecting to database.
$servername ="localhost";
$username = "root";
$password = "";
$database = "miniproj";

// create a connection object
$con = mysqli_connect($servername, $username, $password, $database);


//Die if connection was not successful
if (!$con) {
    die("sorry we failed to connect: ". mysqli_connect_error());
    
}
else{
    //  echo " Connection was successful <br> ";
          
    // Submit this to Database


            //$sql querry to be executed.......
            $sql = "INSERT INTO `contactus` (`name`, `email`, `phone`, `concern`, `dt`) VALUES ('$name', '$email', '$phone', '$concern', current_timestamp());";

            $result = mysqli_query($con, $sql);

            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Success!</strong> Your email '.$email.' and details has been submitted. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
            }
            else{
                echo "the record was not inserted successfully because of this error---> ". mysqli_error($con);
            }
        }
    }  
?>


<div class="container">
    <form action="/miniproj/contactus.php" method = "post">
        <div class="name">
            <label for="name">Enter Your Name</label><br>
            <input type="text" placeholder="Enter Name here" name="name" id="name" required>
        </div>
        <div class="email">
            <label for="email">Enter Your Email</label><br>
            <input type="email" placeholder="Enter Email" name="email" id="email" required>
        </div>
        <div class="phone">
            <label for="phone">Enter Your Phone</label><br>
            <input type="number" placeholder="Enter Phone number" name="phone" id="phone" required>
        </div>
        <div class="concern">
            <label for="">Any Concern</label><br>
            <textarea name="concern" id="concern" rows="8" cols="50" placeholder="Enter concern here" required ></textarea>
        </div>
        <div class="but">
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
</div>
       
    </div>            
    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");

        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>

</body>
</html>