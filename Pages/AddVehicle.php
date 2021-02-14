<!DOCTYPE html>
<html>
<head>
<title>AddVehicle</title>
<link rel='stylesheet' href='../css/stili9.css' type='text/css' />
</head>
<div class='cars'>
<body>
<div id="formulari">
    <div id="full-content">
    <header>
    <div id="header">
        <ul>
            <li><img src="../photos/Ford-logo-1.png"></li>
        </ul>
</div>
</header>
<main>
<form id="mainForm" action="../Vehicle/VehicleVerify.php" method="post" enctype="multipart/form-data" onsubmit="return validate()">
<p>Add a Vehicle in the page</p>
<div class="register forms">
    <ul>
       <li><label>Type:</label></li>
       <li><input type="text" id="type" name="type" placeholder="Type"/></li>
       <li><label>Model:</label></li>
       <li><input type="text" id="model"name="model" placeholder="Model"/></li>
       <li><label>Price:</label></li>
       <li><input type="number" id="price"name="price" placeholder="Price"/></li>
       <li><label>Year:</label></li>
       <li><input type="number" id="year" name="year" placeholder="Year"/></li>
       <li><label>Select image to upload:</label></li>
       <li><input type="file" id="file"  name="file" placeholder="File"/></li>
       <li><input type="submit"  id="vehicle-btn" value="Add" name='vehicle-btn'/></li>
    </ul>
</div>
</form>
</main>
</div>
</div>
</div>
</div>
</body>
</div>
<footer>
    <div id="footer">
        <h3>California Resident</h3>
        <p>Exercise your rights under the California Consumer Privacy Act here</p>
        <a href="#">Do Not Sell My Personal Information</a>
    </div>
</footer>
</html>