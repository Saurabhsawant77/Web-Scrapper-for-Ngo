<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
        <script src="https://kit.fontawesome.com/f2116c735f.js" crossorigin="anonymous"></script>
    <title>About Us</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
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
}

/* .heading{
    position: absolute;
    width: 100%;
    /* top: 12px; 
    height: 20px;
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
    top: 20px;
    left: 600px;
    /* border-radius: 30px; */
    /* border: 2px solid black; */
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

.logoimg{
    position: absolute;
    top: 10px;
    left: 30px;
    /* border-radius: 30px; */
    /* border: 2px solid black; */
}

.logoimg img {
        /* width: 200px;
        height: 200px; */
        transition: width 4s, height 4s transform 4s;
    }

.logoimg img:hover {
        width: 150px;
        height: 150px;
        transform: rotate(0deg);
    }

.text{
        font-family: 'Lora', serif; 
        font-size: 100px;
        position: absolute;
        /* text-align: center; */
        left: 630px;
        top: -15px;
        color: #4bb9ef;
        text-shadow: 4px 4px #981ec7;
    }

    .fa:hover {
        opacity: 0.7;
    }

    .fa-facebook {
        background: #3B5998;
        color: white;
        position: absolute;
        left: 700px;
        top: 710px;
        
        padding: 7px;
        font-size: 45px;
        width: 60px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 50%;
    }

    .fa-instagram {
        background: #d10b68;
        color: white;
        position: absolute;
        left: 800px;
        top: 710px;

        padding: 7px;
        font-size: 45px;
        width: 60px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 50%;
    }

    .fa-linkedin {
        background: #007bb5;
        color: white;
        position: absolute;
        left: 900px;
        top: 710px;

        padding: 7px;
        font-size: 45px;
        width: 60px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 50%;
    }

    .fa-twitter {
        background: #55ACEE;
        color: white;
        position: absolute;
        left: 1000px;
        top: 710px;

        padding: 6px;
        font-size: 45px;
        width: 60px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 50%;
    }

.pic {
    width: 700px;
    height: 500px;
    position: absolute;
    left: 900px;
    top: 155px;
    box-shadow: 8px 5px 25px #981ec7;
}

/* .ic {
    position: absolute;
    top: 710px;
    left: 680px;
    width: 800px;
    height: 100px;
} */

.cont{
    position: relative;
    left: 110px;
    top: 160px;
    width: 600px;
    height: 700px;
}

.cont p{
    font-family: 'Times New Roman', Times, serif;
    font-size: 35px;
    text-decoration: solid;
    color: rgb(192, 24, 221);
    /* text-shadow: 2px 2px black; */
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
                <a href="http://localhost/miniproj/contactus.php">
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
    <div class="home_content">
    <div class="logoimg">
        <img src="logo.jpeg" alt="scrapeimg" width="80" height="80">
        </div>
        <div class="text">About Us</div>
        <div class="pic">
            <img src="aboutus.png" alt="scrapeimg" width="700" height="500">
        </div>
        <div class="ic">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-twitter"></a>
        </div>

        <!-- <div class="heading">
            <h1>About Us</h1>
        </div> -->
        <div class="cont">
            <p>
            The main objective of the web scraper for NGO'S is to scrape the information from the website HTML pages.Web scraping is an automatic method to obtain large amounts of data from websites. Most of this data is unstructured data in an HTML format which is then converted into structured data in a spreadsheet or a database so that it can be used in various applications.And here in our these web application we are we are scrapping a data of NGO'S and displaying it on our web pages in list format.  
            </p>
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