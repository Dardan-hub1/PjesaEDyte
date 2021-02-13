<?php
session_start();
session_destroy();
header('Location:../Pages/Account.php');
