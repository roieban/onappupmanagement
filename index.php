<?php 
require 'functions.php';
if(isset($_GET['logout'])){
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="https://lh3.googleusercontent.com/proxy/DHUii4jcEYtnlo9wZsuGEJscGXB-2l29OCQheLHfLrQiuk3jNy8m5W3fS3VdwqHvh-2ukjcPV1j8_VHXueqpUwfeJ33buwCY4CkBgqRjOMOhSPFRd_K6uc63JnsE2IaumcZzHeVpGHGx5YNvL9PshoVPAlZETmHFgi6wpr1r">
    <title>Login</title>

</head>
<body class="bg-primary">
    <form class="bg-primary" action="action.php" method="POST" id="login" >

    <input type="text" name="email" placeholder="User...">
    <input type="password" name="pass" placeholder="Password...">
    <input type="submit" value="Login">
    <div id="resp"></div>
    
    </form>
    <script src="js/main.js"></script>
</body>
</html>