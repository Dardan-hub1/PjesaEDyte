<!DOCTYPE html>
<html>
    <head> 
    <?php
    session_start();
      if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
        header('Location:Dashboard.php');
      ?>
      <?php
      }
      ?>
        <title>Faqja e pare</title>
        <link href="css/stili7.css" rel="stylesheet" type="text/css">
        </head>
    <body>
        <header>
            <div id="mbjatesi1">
                <div id="header">
                <div id="headerM">
                    <ul>
                        <li><a href="#"><img src="Photos/Ford-logo.jpg"></a></li>
                        <li><a href="#">SUV&CROSSOVERS</a></li>
                        <li><a href="#">TRUCKS&VANS</a></li>
                        <li><a href="#">SUV&CROSSOVERS</a></li>
                        <li><a href="#">ELICTRIFIED</a></li>
                        <li><a href="#">CARS</a></li>
                        <li><a href="#">ALL VEHICLES</a></li>
                    </ul>
                </div>
            <div id="headerD">
                    <ul>
                        <li><a href="#">MY ACCOUNT</a></li>
                        <li><a href="#">FINANCE</a></li>
                        <li><a href="#">SUPPORT</a></li>
                        <li><a href="#">EN</a></li>
                    </ul>
            </div>
            </div>
        </header>
        <main>
            <h1>This page is Home Page</h1>
        </main>
        <footer>
            <div id="footer">
                <h2>California Resident</h2>
                <p>Exercise your rights under the California Consumer Privacy Act here</p>
                <a href="#">Do Not Sell My Personal Information</a>
            </div>
       </footer>
    </html>