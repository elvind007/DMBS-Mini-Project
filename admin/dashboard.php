<!-- admin dashbord page with options for admin -->

<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}else{
    header('location: ../login.php');
}

?>

<?php
include('head.php');
?>

<style>
    body {
        background-image: url('../images/extra2.png');
        background-size: cover;
        }
</style>

<div class="admintitle">
    <div>
    <h5 ><a href="../index.php" style="float: left;font-size:20px; margin-left:20px; color:white;">Log in As User</a></h5>
    <h5 ><a href="logout.php" style="float: right; font-size:20px;margin-right:20px; color:white;">Log Out</a></h5>
    </div>
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">Welcome To Admin Dashbord</h1>
</div>
<div align="center" style="margin-top:240px;">
<form style="position: center;color:red;font-weight:bold;font-size:50px">
    
    <!-- <a href="insertdata.php">Insert Data</a><br><br> -->

    <!-- <a href="updatedata.php">Update Data</a><br><br> -->

    <a href="deletedata.php">Delete Data</a><br><br>

    <a href="deleteusers.php">Delete Users</a><br><br>
</form>

</div>
</body>
</html>