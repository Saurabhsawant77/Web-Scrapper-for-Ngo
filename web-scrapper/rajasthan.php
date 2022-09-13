<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&display=swap" rel="stylesheet">
    <title>Details of NGO's in maharashtra</title>
    <style>
body{
    background-image: linear-gradient(90deg,#e310c7,#e310c7,white);
    color: white;
    font-size: 25px;
    
    }
hr {
  border: 3px solid black;
}    
h1{
    text-align: center;
    background-color: #e310c7;
  }
h2{
    text-align: center;
    background-color: orange;
    font-family: 'Lora', serif;
  }  
    </style>
</head>
<body>
    <h1>NGO DATA OF RAJASTHAN</h1>
    <hr>

<h2>NAME:- <?php echo $_POST["name"]; "<br>" ?></h2>
<h2>E-MAIL:- <?php echo $_POST["email"]; "<br>" ?></h2>    
<h2>PHONE:- <?php echo $_POST["phone"]; "<br>" ?></h2>
<hr>
<?php  


$jsondata = file_get_contents("maharashtra.json");
$json = json_decode($jsondata,true);
// echo $json[1]['Name_of_VO/NGO'];
$output = "<ul>";
foreach($json as $ngo){
    $output .= "<h2>".$ngo['Sr No.']."</h2>";
    $output .= "<li><b>Name of VO/NGO :  </b>".$ngo['Name of VO/NGO']."</li><br>";
    $output .= "<li><b>Registration No.,City & State:  </b>".$ngo['Registration No.,City & State']."</li><br>";
    $output .= "<li><b>Address:  </b>".$ngo['Address']."</li><br>";
    $output .= "<li><b>Sectors working in:  </b>".$ngo['Sectors working in']."</li><br>";
}
$output .= "</ul>";
echo $output;

?>
<hr>
</body>
</html>