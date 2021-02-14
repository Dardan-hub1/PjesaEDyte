<!DOCTYPE html>
<html>
<head>
<title>Account Page</title>

<?php 
echo '<script src="../js/scripta.js">  </script> ';?>
<link rel='stylesheet' href='../css/stili4.css' type='text/css'/>
</head>
<body>
    <div id="full-content">
    <header>
    <div id="header">
        <ul>
            <li><img src="../photos/Ford-logo-1.png"></li>
        </ul>
    </div>
</header>
<main>
<div id="formulari2">
<div id="formulari">
<div id="header1">
<a onclick="changeForm(0)" href="#">Login</a>
<a onclick="changeForm(1)" href="#">Register</a>
</div>
<form id="mainForm" action="../Login&Register1/loginverify.php" method="post">
    <div class="login forms form-style">
        <p>If you have a Ford or Lincoln account,</p>
        <p>enter your username and password here.</p>
<ul>
<li><label>Username:</label></li>
<li><input type="text" name="username" id="userid" class="login" size="15" placeholder="Username"/></li>
<li><label>Password:</label></li>
<li><input type="password" name="password" id="pass" size="15" class="login" placeholder="Password"/></li>
<li><input type="submit" value="Login"  id="login-btn" name='login-btn' onclick="validate(0)"/></li>
</ul>
</div>
<div class="register forms hidden">
    <p>If you don't have a Ford or Lincoln account,</p>
    <p>create an account here for free.</p>
    <ul>
       <li><label>Name and Surname:</label></li>
       <li><input type="text" id="name" class="login" size="40" name="register-username" placeholder="Name Surname"/></li>
       <li><label>Lastname:</label></li>
       <li><input type="text" id="lastname" class="login" size="40" name="register-lastname" placeholder="Email"/></li>
       <li><label>Password:</label></li>
       <li><input type="password" id="pass" class="login" size="15" name="register-password" placeholder="Password"/></li>
       <li><input type="submit"  id="login-btn" value="Register" name='register-btn'  onclick="validate(1)"/></li>
    </ul>
</div>
</form>
</div>
</div>
</main>
<footer>
    <div id="footer">
        <h3>California Resident</h3>
        <p>Exercise your rights under the California Consumer Privacy Act here</p>
        <a href="#">Do Not Sell My Personal Information</a>
    </div>
</footer>
</body>
</html>

<script src="../js/scripta.js"></script>