<!DOCTYPE html>
<html>
<?php
include_once '../Login&Register1/userMapper.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new UserMapper();
    $user = $mapper->getUserByID($userId);
}
?>
<head>
        <title>Edit page</title>
        <link href="../css/stili8.css" rel="stylesheet" type="text/css">
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
                        <li><a href="#">Add Vehicle</a></li>
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
<div class='container'>
    <h1>Modifiko perdoruesin</h1>
    <form class="mainForm" action="../Login&Register1/editUser.php" method="get">
        <div class="login forms form-style">
            <input type="text" style="display:none;" value=<?php echo $userId;?> name="id" />
            <label for="">Name:</label>
            <input type="text" name='username' class="input" placeholder="username..." value=<?php echo $user['username']; ?> />
            <label for="">Last Name:</label>
            <input type="text" name='lastName' class="input" placeholder="lastname..." value=<?php echo $user['userLastName']; ?> />
            <input id="submit" type="submit" name='login-btn' class="input submit" value="Edit" />
        </div>
    </form>
</div>
<footer>
            <div id="footer">
                <h2>California Resident</h2>
                <p>Exercise your rights under the California Consumer Privacy Act here</p>
                <a href="#">Do Not Sell My Personal Information</a>
            </div>
       </footer>
    </html>