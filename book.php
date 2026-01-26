<html>
<head>
    <title>Book</title>
    <style>
        body 
        {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('Pics/Home.jpeg');
            background-size: cover;
        }
        form 
        {
            box-shadow: 0 4px 8px;
            padding: 20px;
            text-align: center;
            max-height: 90vh;
            overflow-y: auto;
        }
        h2 
        {
            text-align: center;
            color: black;
        }

        label 
        {
            display: block;
            text-align: left;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        select 
        {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid black;
            border-radius: 4px;

        }

        button 
        {
            width: 100%;
            padding: 10px;
            background-color: lightskyblue;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            
        }

    </style>
</head>

<body>
<form method="POST">
    <h2>Booking Information</h2>

    <label>Enter your Name:</label>
    <input type="text" required name="n1">

    <label>Enter your Mobile No:</label>
    <input type="tel" required name="n2">

    <label>Enter your E-mail address:</label>
    <input type="email" required name="n3">

    <label>Enter No. of persons:</label>
    <input type="number" required name="n4">

    <label>Travel Date:</label>
    <input type="date" name="n5">

    <label>Select Transportation Type:</label>
    <select name="n7">
        <option value="Bus">Bus</option>
        <option value="Train">Train</option>
        <option value="Flight">Flight</option>
        <option value="Car">Car</option>
    </select>

    <button type="submit" name="n6">Submit</button>
</form>

</body>
</html>

<?php
if (isset($_POST["n6"])) 
{
    $n1 = $_POST["n1"];  
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"]; 
    $n4 = $_POST["n4"];  
    $n5 = $_POST["n5"];
  
    $c = mysqli_connect("localhost", "root", "");
    mysqli_select_db($c, "travel");
    $i = "INSERT INTO book VALUES ('$n1', $n2, '$n3', '$n4', '$n5')";
    $res = mysqli_query($c, $i);
    if ($res) 
    {
        echo "<script>alert('Booking Successful');</script>";
    } else {
        echo "<script>alert('Booking Not Successful');</script>";
    }
}
?>
