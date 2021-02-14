<!DOCTYPE html>
<html>
<?php
include_once '../Login&Register1/userMapper.php';
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
} else {
    header("Location:./Pages/Account.php");
}
?>
    <head>
        <title>Dashboard</title>
        <link href="../css/stili6.css" rel="stylesheet" type="text/css">
        </head>
    <body>
        <header>
            <div id="mbjatesi1">
                <div id="header">
                <div id="headerM">
                    <ul>
                        <li><a href="#"><img src="../Photos/Ford-logo.jpg"></a></li>
                        <li><a href="#">SUV&CROSSOVERS</a></li>
                        <li><a href="#">TRUCKS&VANS</a></li>
                        <li><a href="#">SUV&CROSSOVERS</a></li>
                        <li><a href="#">ELICTRIFIED</a></li>
                        <li><a href="#">CARS</a></li>
                        <li><a href="./AddVehicle.php">Add Vehicle</a></li>
                    </ul>
                </div>
            <div id="headerD">
                    <ul>
                        <li><a href="#">MY ACCOUNT</a></li>
                        <li><a href="#">FINANCE</a></li>
                        <li><a href="#">SUPPORT</a></li>
                        <li><a href="#">EN</a></li>
                        <li><a href="../Login&Register1/logout.php">Logout</a></li>
                    </ul>
            </div>
            </div>
        </header>
        <main>
            <div id='table'>
        <h2>User list:</h2>
</div>
<div id='users'>
        <table border='1'>
            <thead>
                <tr>
                    <td>Emri</td>
                    <td>Mbiemri</td>
                    <td>Roli</td>
                    <td>Detajet</td>
                    <td>Modifiko</td>
                    <td>Fshij</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['userLastName']; ?></td>
                        <td><?php echo $user['role']; ?></td>
                        <td><a href=<?php echo "../Login&Register1/detailsUser.php?id=" . $user['userid']; 
                                    ?>>Detajet</a></td>
                        <td><a href=<?php echo "../Pages/edit.php?id=" . $user['userid'];
                                    ?>>Modifiko</td>
                        <td><a href=<?php echo "../Login&Register1/deleteUser.php?id=" . $user['userid'];
                                    ?>>Fshij</td>
                    </tr>
                <?php
                }
                ?>
                 </tbody>
        </table>
    </div>
        </main>
        <footer>
            <div id="footer">
                <h2>California Resident</h2>
                <p>Exercise your rights under the California Consumer Privacy Act here</p>
                <a href="#">Do Not Sell My Personal Information</a>
            </div>
       </footer>
    </html>