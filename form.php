<?php
function checkCredentials($username, $password) {
    $superadmin = "Admin";
    $key = 1234;

    return ($username == $superadmin && $password == $key);
}
if(isset($_POST['login']))
{   
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (checkCredentials($username, $password)) {
            header("Location:success.php");
            exit();     
        } else {
            header("Location:error.php");
            exit();
        }
    } else {
        echo "Please fill out the details";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment One</title>
</head>
<body>
    <section>   
        <h1>Assignment One</h1>
        <form action="" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" > 
            <label for="password">Password:</label>
            <input type="password" name="password" > 
            <input type="submit" value="Login" name="login">
        </form>
    </section>
</body>
</html>
