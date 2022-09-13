<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <script src="https://kit.fontawesome.com/f2116c735f.js" crossorigin="anonymous"></script>
    
    <title>WEB SCRAPER </title>
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

.logoimg{
    position: absolute;
    top: 20px;
    left: 600px;
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
.text {
    text-align: center;
    font-size: 30px;
    font-family: 'Times New Roman', Times, serif;
    top: 45px;
    position: absolute;
    left: 700px;
}
.pic {
    width: 800px;
    height: 500px;
    position: absolute;
    left: 775px;
    top: 135px;
    box-shadow: 0 10px 15px rgb(25 25 25 / 64%);
}

.info{
    position: relative;
    left: 100px;
    top: 130px;
    width: 600px;
    height: 700px;
}

.info p{
    font-family: 'Times New Roman', Times, serif;
    font-size: 30px;
    text-decoration: solid;
    color: orange;
    /* text-shadow: 2px 2px black; */
}


/* .btn {
        display: inline-block;
         border: 2px solid green; 
        position: absolute;
        right: 35px;
        top: 32px;
        padding: 8px
    } */

    .btn1 {
    background-color: #4b40bf;
    /* background-image: linear-gradient(45deg, #8d88c8); */
    color: white;
    padding: 8px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    border-radius: 18px;
    height: 10%;
    width: 15%;
    opacity: 0.6;
    position: absolute;
    left: 75px;
    top: 700px;
    font-size: 20px;
        }

.btn1:hover {
       opacity: 1;
            }

.btn2 {
    background-color: #4b40bf;
    /* background-color: linear-gradient( #8d88c8); */
    color: white;
    padding: 8px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    border-radius: 18px;
    height: 10%;
    width: 15%;
    opacity: 0.6;
    position: absolute;
    left: 420px;
    top: 700px;
    font-size: 20px;
        }

.btn2:hover {
       opacity: 1;
            }

.btn3 {
    background-color: #4b40bf;
    /* background-color: linear-gradient( #8d88c8); */
    color: white;
    padding: 8px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    border-radius: 18px;
    height: 10%;
    width: 15%;
    opacity: 0.6;
    position: absolute;
    left: 750px;
    top: 700px;
    font-size: 20px;
        }

.btn3:hover {
       opacity: 1;
            }
.btn4 {
    background-color: #4b40bf;
    /* background-color: linear-gradient( #8d88c8); */
    color: white;
    padding: 8px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    border-radius: 18px;
    height: 10%;
    width: 15%;
    opacity: 0.6;
    position: absolute;
    left: 1100px;
    top: 700px;
    font-size: 20px;
        }

.btn4:hover {
       opacity: 1;
            }
.btn5 {
    background-color: #4b40bf;
    /* background-color: linear-gradient( #8d88c8); */
    color: white;
    padding: 8px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    border-radius: 18px;
    height: 10%;
    width: 15%;
    opacity: 0.6;
    position: absolute;
    left: 1450px;
    top: 700px;
    font-size: 20px;
        }

.btn5:hover {
       opacity: 1;
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
                <a href="http://localhost/miniproj/contactus.php">
                    <i class="fa-solid fa-address-book"></i>
                    <span class="links_name">Contact</span>
                    <span class="tooltip">Contact</span>
                </a>
            </li>
            <li>
                <a href="http://localhost/miniproj/about.php">
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
        <div class="text">WEB SCRAPPING FOR NGO'S</div>
        <div class="pic">
            <img src="homebg.jpg" alt="scrapeimg" width="800" height="500">
        </div>
        <div class="info">
            <p>
            Web scraping is the process of extracting data from websites. Some data that is available on theweb is presented in a format that one makes it easier to collect and use it. There are variety of ways to scrape a website to extract information for reuse. In its simplest form, this can be achieved by copying and pasting snippets from a web page, but this can be unpractical is there is a large amount of data to be extracted, or if it is spread over a large number of pages. Automating web scraping also allows to define whether the process should run at regular intervals and capture changes in the data.
            </p>
        </div>
        <div class="butn">
         <a href="http://localhost/miniproj/startmah.php"><button class="btn1">MAHARASHTRA</button></a>
         <a href="http://localhost/miniproj/startdel.php"><button class="btn2">DELHI</button></a>
         <a href="http://localhost/miniproj/startrj.php"><button class="btn3">RAJASTHAN</button></a>
         <a href="http://localhost/miniproj/startkar.php"><button class="btn4">KARNATAKA</button></a>
         <a href="http://localhost/miniproj/startup.php"><button class="btn5">UP</button></a>
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