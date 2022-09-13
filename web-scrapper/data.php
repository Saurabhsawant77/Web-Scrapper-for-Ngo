<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    background-image: linear-gradient(100deg,black,black,white);
    color: white;
    }
h1{
    
  }
    </style>
</head>
<body>
    <h1>NGO DATA</h1>
    <hr>

<h2>NAME:- <?php echo $_POST["name"]; "<br>" ?></h2>
<h2>E-MAIL:- <?php echo $_POST["email"]; "<br>" ?></h2>    
<h2>PHONE:- <?php echo $_POST["phone"]; "<br>" ?></h2>
<hr>
<?php  


$jsondata = file_get_contents("1.json");
$json = json_decode($jsondata,true);
// echo $json[1]['Name_of_VO/NGO'];
$output = "<ul>";
foreach($json as $ngo){
    $output .= "<h2>".$ngo['Sr_No.']."</h2>";
    $output .= "<li><b>Name_of_VO/NGO :  ".$ngo['Name_of_VO/NGO']."</li></b><br>";
    $output .= "<li><b>Registration_No.,City_&_State:  ".$ngo['Registration_No.,City_&_State']."</li></b><br>";
    $output .= "<li><b>Address:  ".$ngo['Address']."</li></b><br>";
    $output .= "<li><b>Sectors_working_in:  ".$ngo['Sectors_working_in']."</li></b><br>";
}
$output .= "</ul>";
echo $output;
echo "<hr>";

?>
</body>
</html>