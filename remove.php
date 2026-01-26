<html>
<head>
    <title>Remove Account</title>
    <style>
        body {
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
        form {
            background-color: lightyellow; 
            border-radius: 8px; 
            box-shadow: 0px 4px 8px; 
            padding: 20px; 
            box-sizing: border-box; 
            text-align: center; 
            margin-bottom: 20px;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
        }
        button {
            padding: 10px; 
            background-color: black; 
            border-radius: 4px; 
            color: white; 
            cursor: pointer;
        }
        .remove-button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        button.remove-account {
            background-color: red;
        }
        .register-link {
            margin-top: 15px;
            font-size: 14px;
        }
        .register-link a {
            color: #00bfff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="sign-in-form" method="POST">
            <h2>Remove Account</h2>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <div class="remove-button-container">
                <button type="submit" class="remove-account" name="confirm">Confirm</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['confirm'])) 
{
    $email = $_POST['email'];
    

    $c = mysqli_connect("localhost", "root", "");
    mysqli_select_db($c, "travel");

    $s = "SELECT * FROM register WHERE email_id='$email'";
    $result = mysqli_query($c, $s);

    if (mysqli_num_rows($result) > 0) 
    {
       
        $d = "DELETE FROM register WHERE email_id='$email'";
        if (mysqli_query($c, $d)) 
        {
            echo "<script>alert('Account successfully removed.');</script>";
            header("Location: index.html");
        } 
        else 
        {
            echo "<script>alert('Failed to remove account.');</script>";
        }
    } 
    else 
    {
       
        echo "<script>alert('No account found with this email.');</script>";
    }

  
}
?>
