<!DOCTYPE html>
<html>
    <head> 
    <?php
    include_once '../Vehicle/VehicleMapper.php';
    session_start();
        $mapper =  new VehicleMapper();
        $vehicleList = $mapper->getAllVehicles();
      ?>
        <title>Home</title>
        <link href="../css/stili10.css" rel="stylesheet" type="text/css">
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
                <?php
            if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
                    ?>
                    <div id="headerD">
                            <ul>
                                <li><a href="./Account.php">MY ACCOUNT</a></li>
                                <li><a href="#">EN</a></li>
                                <li><a href="./Dashboard.php">Dashboard</a></li>
                                <li><a href="../Login&Register1/logout.php">Logout</a></li>
                            </ul>
                    </div>
                    <?php
            } else {
                    ?>
                    <div id="headerD">
                            <ul>
                                <li><a href="#">MY ACCOUNT</a></li>
                                <li><a href="#">EN</a></li>
                                <li><a href="../Login&Register1/logout.php">Logout</a></li>
                            </ul>
                    </div>
                    <?php
            }
        ?>
            </div>
        </header>
        <main>
            <div id='list'>
        <h2>Vehicle list:</h2>
        </div>
        <?php
            if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
                foreach ($vehicleList as $vehicle) {
                    ?>
                    <div id='cars'>
                            <h3>Tipi: <?php echo $vehicle['type'];?></h3>
                            <h3>Modeli: <?php echo $vehicle['model'];?></h3>
                            <h3>Viti: <?php echo $vehicle['year'];?></h3>
                            <h3>Cmimi: <?php echo $vehicle['price'];?>$</h3>
                            <h3>Edited By: <?php echo $vehicle["edited_by"];?></h3>
                            <?php echo "<img src='{$vehicle['Image_Url']}'"?>;
                            <h3><a href=<?php echo "../Pages/editVehicle.php?id=" . $vehicle['id'];
                                        ?>>Edito</a></h3>
                            <h3><a href=<?php echo "../Vehicle/deleteVehicle.php?id=" . $vehicle['id'];
                                        ?>>Fshij</a><h3>
                        </div>
                    <?php
                }
            } else {
                foreach ($vehicleList as $vehicle) {
                    ?>
                    <div id="cars2">
                            <h3>Tipi: <?php echo $vehicle['type'];?></h3>
                            <h3>Modeli: <?php echo $vehicle['model'];?></h3>
                            <h3>Viti: <?php echo $vehicle['year'];?></h3>
                            <h3>Cmimi: <?php echo $vehicle['price'];?></h3>
                            <h3>Edited By: <?php echo $vehicle["edited_by"];?></h3>;
                            <?php echo "<img src='{$vehicle['Image_Url']}'"?>;
                            <h3><a href=<?php echo "../Pages/editVehicle.php?id=" . $vehicle['id'];
                                        ?>>Edito</a></h3>
                      </div>
                    <?php
}
            }
        ?>
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