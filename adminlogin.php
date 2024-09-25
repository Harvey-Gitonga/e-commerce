<?php 

include '../components/connect.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-platform</title>

    <!-- font awesome cdn link -->
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/
    font-awesome/6.6.0/css/all.min.css">

    <!-- custom css file link -->
     <link rel="stylesheet" href="../css/admin_styles.css">


<!-- admin login section starts -->

<section class="form-container">
    <form action="" method="POST">
        <h2>Login now</h2>
        <p>default username = <span>admin</span> & password = <span>111</span></p>
<input type="text" name="name" maxlength="20" required placeholder="enter your username"
class="box" oninput="this.value=this.value.replace(/\s\g,'')">
<input type="password" name="pass" maxlength="20" required placeholder="enter your password"
class="box" oninput="this.value=this.value.replace(/\s\g,'')">
<input type="submit" value="login now" name="submit" class="btn">


    </form>
</section>


 <!--admin  login section ends -->






</head>
<body>
    
</body>
</html>