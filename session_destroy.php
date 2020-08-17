<?php
session_start();
session_destroy();
echo $_SESSION['loggedin'].$_SESSION['login_type'].$_SESSION['name'];
?>