<html>
<head>
<title>Activity</title>
   <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body class="big purple lighten-1">
<?php
/**
Name is fetched during form submission
*/
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$oper = strtolower($_POST['oper']);
$result = 0;

if ($oper === "add"): $result = $num1 + $num2;
elseif($oper === "subtract"): $result = $num1 - $num2;
elseif($oper === "multiply"): $result = $num1 * $num2;
elseif($oper === "divide"): $result = $num1 / $num2;
else: echo "<div class=\"animated bounce infinite center-align big\"><h1>Invalid operation! </h1></div>";
endif;

echo "<div class=\"animated bounce infinite center-align big\"><h1>" . $result . "</h1></div>";

$day = $_POST['num3'];

switch($day):
case "1": echo "<div class=\"animated tada infinite center-align big\"><h1>Monday</h1></div>"; break;
case "2": echo "<div class=\"animated tada infinite center-align big\"><h1>Tuesday</h1></div>"; break;
case "3": echo "<div class=\"animated tada infinite center-align big\"><h1>Wednesday</h1></div>"; break;
case "4": echo "<div class=\"animated tada infinite center-align big\"><h1>Thursday</h1></div>"; break;
case "5": echo "<div class=\"animated tada infinite center-align big\"><h1>Friday</h1></div>"; break;
case "6": echo "<div class=\"animated tada infinite center-align big\"><h1>Saturday</h1></div>"; break;
case "7": echo "<div class=\"animated tada infinite center-align big\"><h1>Sunday</h1></div>"; break;
default: echo "<div class=\"animated  tada infinite center-align big\"><h1>Invalid Number!</h1></div>"; break;
endswitch;

?>
</body>
</html>