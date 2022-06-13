<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }

?>
<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
</head>
<body>
    <table width='30%' border="5px solid" style="margin-top:30px;margin-left:auto ;margin-right:auto ;font-weight:bold;border-spacing: 5px 5px;border-collapse: collapse;">
    <tr style="background-color: yellow;font-size:30px">
    <th>Weight in Kg</th><th>Price</th>
    </tr>
    <tr>
    <td>0-2kg</td><td>80</td>
    </tr>
    <tr>
    <td>2-4kg</td><td>120</td>
    </tr>
    <tr>
    <td>4-6kg</td><td>160</td>
    </tr>
    <tr>
    <td>6-8kg</td><td>200</td>
    </tr>
    <tr>
    <td>8-10kg</td><td>250</td>
    </tr>
    <tr>
    <td>10 and above</td><td>300</td>
    </tr>
    </table>
    <h3 align="center" style="margin-top:20px;"> Amount to be paid on any of the given accounts:</h3>
    <div style="margin-left:45% ;margin-right:auto ;font-weight:bold;">
    <ol>
    <li>UPI: abcd@sbi.com</li>
    <li>GPay: 6362786223</li>
    <li>Paytm: 3565656555</li>
    </ol>
    </div>
</body>
</html>