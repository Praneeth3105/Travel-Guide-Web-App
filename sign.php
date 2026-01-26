<?php 
$error = ""; 
if (isset($_POST['sign'])) 
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c = mysqli_connect("localhost", "root", "");
    mysqli_select_db($c, "travel");

    $s = "SELECT * FROM register WHERE email_id='$email' AND password='$password'";
    $result = mysqli_query($c, $s);

    if (mysqli_num_rows($result) > 0) {
        $i = "INSERT INTO sign (mail_id, password) VALUES ('$email', '$password')";
        mysqli_query($c, $i);
        echo "<script>alert('Login successful!');</script>";
        header("Location: index.html");
        exit(); 
    } else {
        $error = "Invalid email or password.";
    }
}
?>
<html>
<head>
    <title>Sign In</title>
    <style>
        body 
        {
            font-family: Times New Roman;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(Pics/Home.jpeg);
            background-size: cover;
        }
        form 
        {
            background-color: lightyellow;
            border-radius: 8px;
            box-shadow: 0px 4px 8px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
            margin-bottom: 20px;
        }
        h2 
        {
            margin-bottom: 20px;
            color: #333;
        }
        label 
        {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }
        input[type="email"],
        input[type="password"] 
        {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .buttons 
        {
            display: flex;
            justify-content: space-between;
        }
        button 
        {
            padding: 10px;
            background-color: black;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }
        .register-link 
        {
            margin-top: 15px;
            font-size: 14px;
        }
        .register-link a 
        {
            color: #00bfff;
            text-decoration: none;
        }
        .error-message 
        {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="sign-in-form" method="POST">
            <h2>Sign In</h2>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <div class="buttons">
                <button type="submit" name="sign">Sign In</button>
            </div>
            <div class="error-message">
                <?php if (!empty($error)) echo $error; ?>
            </div>
            <p class="register-link">Don't have an account? <a href="register.php">Register here</a></p>
        </form>

    </div>
</body>
</html>
