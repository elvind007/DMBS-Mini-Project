<?php

include('dbconnection.php');
session_start();
$gd = $_SESSION['gid'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        body {
            background-image: url('images/reset2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <form action="reset.php" method="POST">
        <table border="0px solid" style="margin-left: auto; margin-right:auto; margin-top:70px; font-weight:bold;border-spacing: 50px 30px;">
            <th colspan="3" style="text-align: center;font-size:35px; width: 300px; height: 70px;color: #FFFFFF ;font-weight:bold;">Enter your New Password</th>
            <tr>
                <td colspan="2" style="font-size: 25px;color: #FF9620; font-weight:bold">Password</td>
                <td><input type="password" name="pass" placeholder="Enter Here" style="font-size: 20px;font-weight:bold" required /></td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <input type="submit" name="submit" value="Update" style="background-color:#FDFFAF; border-radius: 15px; width: 140px; height: 50px;" />
                </td>
            </tr>
        </table>

    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) {

    $password = $_POST['pass'];

    $qryd = "UPDATE `login` SET `password` = '$password' WHERE `u_id` = '$gd'";
    $run = mysqli_query($dbcon, $qryd);

    if ($run == true) {
        ?> <script>
            alert('Password changed Successfully :)');
            window.open('logout.php', '_self');
            </script>
        <?php
    }
}
?>