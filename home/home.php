<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body
        {
        background-image:url('../images/menu.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;font-family:'Times New Roman', Times, serif"><br><br><br><br>
        <h2>SABER Inc. Courier Services</h2>
        <h4>Our aim is to build the operating system for commerce. We provide express parcel transportation and supply chain services 
        to large & small enterprises & brands and customers. Our supply chain platform and logistics operations bring flexibility, breadth, efficiency and innovation 
        to our customers’ supply chain and logistics. Our operations, infrastructure and technology enable our customers to transact with us and our partners at low costs.</h4><br><br>
        <h3>DBMS MINI PROJECT</h3>
        <h6>By Elvin Dsouza</h6>
    </div>
</body>
</html>