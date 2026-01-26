<html>
<head>
    
    <title>Registration Form</title>
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
        }

        label 
        {
            font-weight: bold;
            color: black;
            display: block;
            margin-bottom: 5px; 
            text-align: left; 
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] 
        {
            width: 100%; 
            padding: 10px; 
            margin-bottom: 20px; 
            border: 1px solid black; 
            border-radius: 4px; 
            font-size: 14px; 
            box-sizing: border-box; 
        }

        button 
        {
           
            padding: 10px; 
            background-color: black; 
            border-radius: 4px; 
            color: white; 
            font-size: 16px; 
           
        }

      
    </style>
</head>
<body>
    <form method="POST">
        <h2>Registration Form</h2>

      
        <label for="username">Username:</label>
        <input type="text" name="a1" required>

        <label for="mobile">Mobile No:</label>
        <input type="text" name="a2" required>

        <label for="email">Email:</label>
        <input type="email" name="a3" required>

        <label for="password">Password:</label>
        <input type="password" name="a4" required>

        <label for="confirm-password">Confirm Password:</label>
        <input type="password" name="a5" required>

        <button type="submit" name="a6">Register</button>
    </form>

    <?php
    if (isset($_POST["a6"])) 
    {
        $a1 = $_POST["a1"];
        $a2 = $_POST["a2"];
        $a3 = $_POST["a3"];
        $a4 = $_POST["a4"];
        $a5 = $_POST["a5"];

        if ($a4 !== $a5) 
        {
            echo "<script>alert('Passwords do not match!');</script>";
        } 
        else 
        {
            $c = mysqli_connect("localhost", "root", "");

            mysqli_select_db($c,"travel");

            $i = "INSERT INTO register (user_name,mobile_no,email_id,password,confirm_password) VALUES ('$a1', '$a2', '$a3', '$a4','$a5')";

            if (mysqli_query($c, $i)) 
            {
                echo "<script>alert('Registration successful!');</script>";
                header("Location:index.html");
                exit();
            } 
            else
            {
                echo "<script>alert('Not Registered');</script>";
            }
        }
    }
    ?>
</body>
</html>
